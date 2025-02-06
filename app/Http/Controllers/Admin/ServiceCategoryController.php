<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        return ServiceCategory::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        return ServiceCategory::create($validated);
    }

    public function destroy($id)
    {
        ServiceCategory::destroy($id);
        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
