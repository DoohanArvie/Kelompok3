<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserdasboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DataMemberController;
use App\Http\Controllers\UlasanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;

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

Route::get('/admin.dataMember/{id}/edit', [DataMemberController::class, 'edit'])->name('admin.dataMember.edit');
Route::put('/admin.dataMember/{id}', [DataMemberController::class, 'update'])->name('admin.dataMember.update');

Route::middleware('auth')->group(function () {
    Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
    Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
});

Route::get('/', [UlasanController::class, 'index'])->name('dashboard');
Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

Route::get('/admin.dataTrainer', [TrainerController::class, 'index'])->name('admin.dataTrainer.index');
Route::get('/admin.dataTrainer/create', [TrainerController::class, 'create'])->name('admin.dataTrainer.create');
Route::post('/admin.dataTrainer/create', [TrainerController::class, 'store'])->name('admin.dataTrainer.store');
Route::get('/admin/dataTrainer/{id}/edit', [TrainerController::class, 'edit'])->name('admin.dataTrainer.edit');
Route::post('/admin/dataTrainer/{id}/update', [TrainerController::class, 'update'])->name('admin.dataTrainer.update');
Route::get('/admin/dataTrainer/{id}/delete', [TrainerController::class, 'destroy'])->name('admin.dataTrainer.destroy');

Route::get('/admin/dataClass', [ClassController::class, 'index'])->name('admin.dataClass.index');
Route::get('/admin.dataClass/create', [ClassController::class, 'create'])->name('admin.dataClass.create');
Route::post('/admin.dataClass/create', [ClassController::class, 'store'])->name('admin.dataClass.store');
Route::get('/admin/dataClass/{id}/edit', [ClassController::class, 'edit'])->name('admin.dataClass.edit');
Route::post('/admin/dataClass/{id}/update', [ClassController::class, 'update'])->name('admin.dataClass.update');
Route::put('admin/dataClass/{id}/update', [ClassController::class, 'update'])->name('admin.dataClass.update');
Route::get('/admin/dataClass/{id}/delete', [ClassController::class, 'destroy'])->name('admin.dataClass.destroy');

require __DIR__.'/auth.php';