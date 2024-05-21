<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdasboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DataMemberController;
use App\Http\Controllers\UlasanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::get('/home', [HomeController::class, 'index']);
route::get('/member', [UserdasboardController::class, 'index']);
route::get('/dashboard', [DashboardController::class, 'index']);
route::get('/member.dashboard', [MemberController::class, 'index']);
route::get('/admin.dataMember', [DataMemberController::class, 'index'])->name('admin.dataMembers.index');
route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin.datamembers/{id}/edit', [DatamemberController::class, 'edit'])->name('admin.dataMembers.edit');
Route::put('/admin.datamembers/{id}', [DatamemberController::class, 'update'])->name('admin.dataMembers.update');

Route::middleware('auth')->group(function () {
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
    Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
});

Route::get('/', [UlasanController::class, 'index'])->name('dashboard');
Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');




require __DIR__.'/auth.php';
