<?php

use App\Http\Controllers\ProfileController;
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

// Route::prefix('api/v1')->group(function () {
//   Route::get('/users', function () {
//     $user = User::all();
//     return response()->json($user);
//   });
//  }); 

// Route::prefix('api/v1/')->group(function () {
//   Route::get('/test', function () {
//     return response()->json(['message' => 'Hello, World from api!']);
//   });
//   Route::delete('/test', function () {
//     return response()->json(['message' => 'Deleting']);
//   });
// });

require __DIR__.'/auth.php';
