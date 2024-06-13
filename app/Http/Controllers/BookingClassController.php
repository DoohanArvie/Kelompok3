<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingClass;
use App\Models\Booking;

class BookingClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        $bookingClasses = BookingClass::all();
        return view('admin.dataSchedule.index', compact('bookingClasses'));
    }

}
