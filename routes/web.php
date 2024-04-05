<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index']);
Route::get('/about/{post}', [PostController::class, 'about']);
Route::get('/quote/{post}', [PostController::class, 'quote'])->name('quote');


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about', function () {
//     return view('About');
// });