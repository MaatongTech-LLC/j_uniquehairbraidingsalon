@extends('admin.layouts.main')

@section('title')
    Booking {{ $appointment->service->name }}
@endsection
@section('content')
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Service {{ $appointment->service->name }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center gx-2">
                            @if ($appointment->status === 'completed')
                                <p class="h4">Status:  <span class="badge bg-success p-2">Completed</span></p>
                            @elseif ($appointment->status === 'cancelled')
                                <p class="h4">Status:  <span class="badge bg-danger p-2">Cancelled</span></p>
                            @else
                                <a class="btn btn-secondary mx-2" data-bs-toggle="modal" data-bs-target="#changeStatusModal">Change Status</a>
                            @endif
                            <a class="btn btn-primary mx-2" href="{{ route('admin.booking.index') }}">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="{{ $appointment->service->getImage() }}" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block"><a href="{{ route('service.show', $appointment->service->id) }}" target="_blank">{{ $appointment->service->name }}</a></h3>
                                <p>{{ ucwords($appointment->service->type) }}</p>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Booking</h4>
                        </div>

                    </div>
                    <div class="card-body">


                        <div class="mt-2">
                            <h6 class="mb-1">Amount ($):</h6>
                            <p>{{ $appointment->payment->amount  }}
                                {{ $appointment->payment->amount === $appointment->service->price ? '(Full Price)' : '(Deposit Price)' }}
                            </p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Client Name/Email:</h6>
                            <p><a href="{{ route('admin.clients.show', $appointment->user->id) }}">{{ $appointment->user->name }}/{{ $appointment->user->email }}</a></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Date:</h6>
                            <p>{{ $appointment->date }}</p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Time:</h6>
                            <div>
                                {{ $appointment->time }}
                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Booked On:</h6>
                            <p>{{ $appointment->service->created_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

  
  <!-- Modal -->
  <div class="modal fade" id="changeStatusModal" tabindex="-1" aria-labelledby="changeStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="changeStatusModalLabel">Change Booking Status</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
            <form class="" action="{{ route('admin.booking.changeStatus', $appointment->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <input type="hidden" name="booking_id" value="{{ $appointment->id }}">
                    <select name="status" class="form-control">
                        <option value="confirmed" {{ $appointment->status === 'accepted'?'selected' : '' }}>Confirm</option>
                        <option value="cancelled" {{ $appointment->status ==='rejected'?'selected' : '' }}>Cancel</option>
                    </select>
                </div>
               
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Change Status</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        
        
      </div>
    </div>
  </div>

@push('scripts')

@endpush
