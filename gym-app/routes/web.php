<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClassController;

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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

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

Route::get('/admin/dataFitnes', [ProductController::class, 'index'])->name('admin.dataFitnes.index');
Route::get('/admin.dataFitnes/create', [ProductController::class, 'create'])->name('admin.dataFitnes.create');
Route::post('/admin.dataFitnes/create', [ProductController::class, 'store'])->name('admin.dataFitnes.store');
Route::get('/admin/dataFitnes/{id}/edit', [ProductController::class, 'edit'])->name('admin.dataFitnes.edit');
Route::post('/admin/dataFitnes/{id}/update', [ProductController::class, 'update'])->name('admin.dataFitnes.update');
Route::put('admin/dataFitnes/{id}/update', [ProductController::class, 'update'])->name('admin.dataFitnes.update');
Route::get('/admin/dataFitnes/{id}/delete', [ProductController::class, 'destroy'])->name('admin.dataFitnes.destroy');

