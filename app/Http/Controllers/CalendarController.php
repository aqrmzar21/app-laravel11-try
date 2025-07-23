<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarController extends Controller
{
    //
    public function show($month = null, $year = null)
    {
        $month = $month ?? now()->month;
        $year = $year ?? now()->year;

        $currentDate = Carbon::createFromDate($year, $month, 1);
        $daysInMonth = $currentDate->daysInMonth;
        $startOfMonth = $currentDate->startOfMonth()->format('N');

        // return view('cal', compact('daysInMonth', 'startOfMonth', 'month', 'year'));
        return view('cal', [
            'title' => 'Schedule Page',
            'daysInMonth' => $daysInMonth,
            'startOfMonth' => $startOfMonth,
            'month' => $month,
            'year' => $year,
        ]);
    }
}
