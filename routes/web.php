<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     sleep(2);
//     return Inertia::render('Home', ['name' => 'Alif']);
// });

// Route::inertia('/about', 'About', ['name' => 'Alif']);

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class)->except('index');
