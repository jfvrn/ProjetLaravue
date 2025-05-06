<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Api\V1\PassageController;
use App\Http\Controllers\Api\V1\ChoixController;
use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes pour les passages
Route::prefix('api/v1')->group(function () {
    Route::get('/passages', [PassageController::class, 'index'])->name('passages.index');
    Route::get('/passages/{id}', [PassageController::class, 'show'])->name('passages.show');
    Route::post('/', [PassageController::class, 'store'])->name('passages.store')->middleware('admin');
    Route::put('/{id}', [PassageController::class, 'update'])->name('passages.update')->middleware('admin');
    Route::delete('/{id}', [PassageController::class, 'destroy'])->name('passages.destroy')->middleware('admin');
});

// Routes pour les choix
Route::prefix('api/v1')->group(function () {
    Route::get('/choix', [ChoixController::class, 'index'])->name('choix.index');
    Route::get('/choix/{id}', [ChoixController::class, 'show'])->name('choix.show');
    Route::post('/', [ChoixController::class, 'store'])->name('choix.store')->middleware('admin');
    Route::put('/{id}', [ChoixController::class, 'update'])->name('choix.update')->middleware('admin');
    Route::delete('/{id}', [ChoixController::class, 'destroy'])->name('choix.destroy')->middleware('admin');
});


require __DIR__.'/auth.php';
