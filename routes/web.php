<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;

Route::get('/', function () {
    return view('contactanos.index');
});

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
