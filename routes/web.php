<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\PdfController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('mascotas', MascotaController::class);
    Route::resource('citas', CitaController::class);
    Route::get('citas-pdf', [PdfController::class, 'citas'])->name('citas.pdf');
    Route::get('citas/pdf', [App\Http\Controllers\PdfController::class, 'citas'])
    ->name('citas.pdf');


});

require __DIR__.'/auth.php';
