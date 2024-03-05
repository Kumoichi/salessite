<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectedDate;

class SelectedDateController extends Controller
{
    public function showForm()
    {
        return view('calendar_form');
    }

    public function saveDate(Request $request)
    {
        $request->validate([
            'selected_date' => 'required|date',
        ]);

        SelectedDate::create([
            'selected_date' => $request->selected_date,
        ]);

        return redirect()->back()->with('success', 'Date selected successfully.');
    }
}
