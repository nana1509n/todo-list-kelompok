<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProductController;

// Routes untuk Tugas
Route::resource('tasks', TaskController::class);

// Routes untuk Mata Kuliah (Product)
Route::resource('products', ProductController::class);

// Home route langsung ke halaman daftar tugas
Route::get('/', function () {
<<<<<<< Updated upstream
    return view('welcome');

});
=======
    return redirect()->route('tasks.index');
});
>>>>>>> Stashed changes
