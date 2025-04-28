<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home page ka route
// Ye '/' URL ko PageController ke home method se jorta hai
Route::get('/', [PageController::class, 'home'])->name('home');

// About page ka route
// Ye '/about' URL ko PageController ke about method se jorta hai
Route::get('/about', [PageController::class, 'about'])->name('about');

// Tasks ke liye resource routes
// Ye CRUD ke liye standard routes banata hai (index, create, store, edit, update, destroy)
Route::resource('tasks', TaskController::class);
