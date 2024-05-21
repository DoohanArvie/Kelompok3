<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    if (Auth::id()) {
        $usertype = Auth::user()->userType;
        if ($usertype == 'user') {
            return view('user.dashboard');
        } else if ($usertype == 'admin') {
            return view('admin.layouts.index');
        } else if ($usertype == 'member') {
            return view('member.dashboard');
        } else {
            return redirect()->back();
        }
    }
}

}
