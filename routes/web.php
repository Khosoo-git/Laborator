<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DeviceController;

Route::get('/status', function () {
    return view('status');
});
Route::get('/dashboard', function () {
    // You can fetch data here to pass to the view
    return view('dashboard');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/dashboard', function(){
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [DeviceController::class, 'index']); // Home
Route::get('/status', [DeviceController::class, 'getStatus']); // Device Status
Route::get('/object-info', [DeviceController::class, 'getObjectInfo']); // Object Details
Route::post('/device/control', [DeviceController::class, 'control'])->name('device.control');


