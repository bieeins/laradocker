<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
    });
Route::get('/tes', [DashboardController::class, 'index'])->name('tes');

Route::get('/check-headers', function () {
    return response()->json([
        'headers' => request()->headers->all()
    ]);
});
