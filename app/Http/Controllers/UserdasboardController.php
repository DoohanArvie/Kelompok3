<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserdasboardController extends Controller
{
    public function index()
    {
        return view('member.layouts.index');
    }
}
