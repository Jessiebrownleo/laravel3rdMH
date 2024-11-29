<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');  // This corresponds to index.blade.php
});

Route::get('/about', function () {
    return view('about');  // This corresponds to about.blade.php
});

Route::get('/contact', function () {
    return view('contact');  // This corresponds to contact.blade.php
});

Route::get('/courses', function () {
    return view('courses');  // This corresponds to courses.blade.php
});

Route::get('/course-details', function () {
    return view('course-details');  // This corresponds to course-details.blade.php
});

Route::get('/events', function () {
    return view('events');  // This corresponds to events.blade.php
});

Route::get('/pricing', function () {
    return view('pricing');  // This corresponds to pricing.blade.php
});

Route::get('/trainers', function () {
    return view('trainers');  // This corresponds to trainers.blade.php
});
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
