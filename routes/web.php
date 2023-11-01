<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/homepage', function () {
    return view('homepage', [
        "username" => "Fatih",
        "post_time" => "Recenly",
        "image" => "assets/images/image-post1.svg",
        "profile_image" => "assets/images/silverash-profile.svg",
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('regis');
});
