<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/todos', [TodoController::class, 'index']); // Fetch all todos
Route::post('/todos', [TodoController::class, 'store']); // Store a new todo
Route::put('/todos/{id}', [TodoController::class, 'update']); // Update a todo (mark as completed)
Route::delete('/todos/{id}', [TodoController::class, 'destroy']); // Delete a todo

require __DIR__.'/auth.php';
