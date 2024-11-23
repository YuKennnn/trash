<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LockerController;
use App\Http\Controllers\OverduesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;


//welcome page
Auth::routes();
Route::get('/welcome', [WelcomeController::class, 'landing'])->name('welcome');



Route::get('/adminDashboard', [AdminController::class, 'index'])->name('adminDashboard');
Route::get('/admin/addLockers', [AdminController::class, 'create'])->name('admin.addLockers');
Route::get('/overdues', [AdminController::class, 'show'])->name('overdues');
Route::get('/transactions', [AdminController::class, 'transaction'])->name('transactions');
