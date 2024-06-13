<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classes;
use App\Models\Booking;
use App\Models\User;

class UserdasboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.layouts.index', compact('user'));
    }

    public function schedule()
    {
        $classes = Classes::with('trainer')->get();
        $groupedClasses = $classes->groupBy('day');
        return view('user.schedule', compact('classes','groupedClasses'));
    }

}
