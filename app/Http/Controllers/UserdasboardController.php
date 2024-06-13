<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
