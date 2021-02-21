<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('threads', [ThreadController::class, 'index'])->name('thread.index');
Route::get('threads/{thread}', [ThreadController::class, 'show'])->name('thread.show');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
