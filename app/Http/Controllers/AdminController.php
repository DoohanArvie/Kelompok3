<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trainer;
use App\Models\Classes;
use App\Models\Product;
use App\Models\Program;
use App\Models\Order;
use App\Models\Booking;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $trainers = Trainer::all();
        $classes = Classes::all();
        $totalUsers = $this->countUsers();
        $totalTrainers = $this->countTrainers();
        $totalProducts = $this->countProducts();
        $totalPrograms = $this->countPrograms();
        $totalOrders = $this->countOrders();
        $totalBookings = $this->countBookings();
        $totalClasses = $this->countClasses();
        return view('admin.layouts.index', compact('users','trainers','classes', 'totalUsers', 'totalTrainers', 'totalProducts','totalPrograms','totalOrders', 'totalBookings','totalClasses'));
    }

    public function master()
    {
        $user = Auth::user();
        return view('admin.layouts.master', compact('user'));
    }

    public function countUsers()
    {
        $totalUsers = User::count();
        return $totalUsers;
    }

    public function countTrainers()
    {
        $totalTrainers = Trainer::count();
        return $totalTrainers;
    }

    public function countProducts()
    {
        $totalProducts = Product::count();
        return $totalProducts;
    }

    public function countPrograms()
    {
        $totalPrograms = Program::count();
        return $totalPrograms;
    }

    public function countOrders()
    {
        $totalOrders = Order::count();
        return $totalOrders;
    }

    public function countBookings()
    {
        $totalBookings = Booking::count();
        return $totalBookings  ;
    }

    public function countClasses()
    {
        $totalClasses = Classes::count();
        return $totalClasses;
    }
}
