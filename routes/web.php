<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
Route::resource('test', App\Http\Controllers\TestController::class);
Route::get('distributors', [App\Http\Controllers\DistributorController::class, 'index'])->name('distributors.index');
Route::get('distributors/create', [App\Http\Controllers\DistributorController::class, 'create'])->name('distributors.create');
Route::post('distributors/store', [App\Http\Controllers\DistributorController::class, 'store'])->name('distributors.store');


