<?php

namespace App\Http\Controllers\Admin;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Notifications\BookingCancelled;
use App\Notifications\BookingCompleted;
use App\Notifications\BookingConfirmed;
use App\DataTables\AppointmentsDataTable;
use Illuminate\Support\Facades\Notification;

class AppointmentController extends Controller
{
    public function index(AppointmentsDataTable $dataTable)
    {
       return $dataTable->render('admin.booking.index');
    }

    public function calendar()
    {
        $bookings = Appointment::with(['service', 'user'])->get();

        $bookings = $bookings->map(function ($booking) {
            $start = Carbon::parse($booking->date . ' ' . $booking->time);

            $duration = Carbon::parse($booking->service->duration); // "HH:MM:SS"
            $end = $start->copy()->addHours($duration->hour)->addMinutes($duration->minute)->addSeconds($duration->second);

            $booking->start = $start->format('Y-m-d\TH:i:s'); // Format ISO8601
            $booking->end = $end->format('Y-m-d\TH:i:s'); // Format ISO8601

            $booking->title = $booking->service->name . ' (' . $booking->user->name . ')';
            $booking->url = route('admin.booking.show', $booking->id);

            return $booking;
        });

        return view('admin.booking.calendar', ['bookings' => json_encode($bookings)]);
    }



    public function show(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.booking.show', ['appointment' => $appointment]);
    }

    public function changeStatus(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        
        $oldStatus = $appointment->status;
        $newStatus = $request->status;

  
    // Send notifications based on status change
        if ($oldStatus !== $newStatus) {
            
            switch ($newStatus) {
                case 'confirmed':
                    Notification::route('mail', $appointment->user->email)->notify(new BookingConfirmed($appointment));
                    break;
                case 'completed':
                    Notification::route('mail', $appointment->user->email)->notify(new BookingCompleted($appointment));
                    break;
                case 'cancelled':
                    Notification::route('mail', $appointment->user->email)->notify(new BookingCancelled($appointment));
                    break;
            }
        }

        $appointment->status = $request->status;
        $appointment->save();
        
        toast('Booking status updated successfully!', 'success');

        return redirect()->back();
    }
}
