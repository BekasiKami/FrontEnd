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
        'title'=> 'Home',
        "username" => "Fatih",
        "post_time" => "Recenly",
        "image" => "assets/images/image-post1.svg",
        "profile_image" => "assets/images/silverash-profile.svg",
        "caption" => "Lorem ipsum dolor
        sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
        et. Donec sit amet odio vitae elit ullamcorper tempus...",
        "upvotes"=> "20 Upvotes",
        "comments"=> "3 Comments",
    ]);
});

Route::get("/search", function () {
    return view("search", [
        "title"=> "Search",
    ]);
});

Route::get("/message-list", function () {
    return view('message-list', [
        'title'=> 'Message',
    ]);
});

Route::get("/userprofile", function () {
    return view("userprofile", [
        "title"=> "Profile",
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
