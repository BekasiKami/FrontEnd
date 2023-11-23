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
    return view('login');
});

route::get('/postlogin', 'loginController@postlogin')->name('postlogin');

Route::get('/home', function () {
    return view('home', [
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

Route::get("/profile", function () {
    return view("profile", [
        "title"=> "Profile",
    ]);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/register2', function () {
    return view('register2');
});

Route::get('/trending', function () {
    return view('trending', [
        'title' => 'Trending',
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

Route::get('/notification', function () {
    return view('notification', [
        'title'=> 'Notification',
        'nama' => 'sirkoping_',
        'nama2' => 'daydream',
        "profile_image" => "assets/images/silverash-profile.svg",
        "profile_image2" => "assets/images/putri-kecil-brocklesnar.png",
    ]);
});

Route::get('/editprofile', function () {
    return view('editprofile', [
        'title'=> 'Edit Profile',
    ]);
});

Route::get('/changepassword', function () {
    return view('gantipass', [
        'title'=> 'Ubah Password',
    ]);
});