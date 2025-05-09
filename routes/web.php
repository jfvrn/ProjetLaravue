<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Api\V1\PassageController;
use App\Http\Controllers\Api\V1\ChoixController;
use App\Http\Controllers\Api\V1\StoryController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/home', function () {
    return view('welcome'); 
})->middleware(['auth', 'verified'])->name('home');

Route::get('/', function () {
    if (auth()->check()) {
        return view('welcome');
    }
    return view('index');
});


Route::get('/story/{id}', function ($id) {
    return view('story', ['storyId' => $id]);
})->middleware(['auth', 'verified'])->name('story.show');

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

// Routes pour les stories
Route::prefix('api/v1')->group(function () {
    Route::get('/stories', [StoryController::class, 'index'])->name('stories.index');
    Route::get('/stories/{id}', [StoryController::class, 'show'])->name('stories.show');
    Route::post('/stories', [StoryController::class, 'store'])->name('stories.store')->middleware('admin');
    Route::put('/stories/{id}', [StoryController::class, 'update'])->name('stories.update')->middleware('admin');
    Route::delete('/stories/{id}', [StoryController::class, 'destroy'])->name('stories.destroy')->middleware('admin');
});

require __DIR__.'/auth.php';
