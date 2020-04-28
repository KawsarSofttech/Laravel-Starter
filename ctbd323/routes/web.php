<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Customization

Route::get('/profile', function () {
    return 'Welcome to Mr. Jhon Doe';
});
Route::get('/about', function () {
    return 'About Mr. Jhon Doe';
});

Route::get('/contact', function () {
    return 'Contact to Mr. Jhon Doe';
});
Route::get('/purpose', function () {
    return 'Say to Mr. Jhon Doe';
});
Route::get('/blog', function () {
    return 'Write on Mr. Jhon Doe';
});




