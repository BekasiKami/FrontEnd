<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\ChangePasswordController;

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

// Call API
Route::get('view/detail/users', [HomeController::class, 'index'])->name('view/detail/users');
// Login API
Route::get('loginn', [LoginController::class, 'login'])->name('loginn');
Route::post('loginApi', [LoginController::class, 'loginApi'])->name('loginApi');

// Route::get('/register', function () {
//     return view('register');
// });
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('regisAPI', [UserController::class, 'regisAPI'])->name('regisAPI');
// Contoh memberikan nama route
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
Route::get('/trending', [TrendingController::class, 'trending'])->name('trending');
Route::get('/notification', [NotificationController::class, 'notification'])->name('notification');
Route::get('/editprofile', [EditProfileController::class, 'editprofile'])->name('editprofile');
Route::match(['post', 'put'], '/updateProfile', [EditProfileController::class, 'updateProfile'])->name('updateProfile');
Route::get('/changepassword', [ChangePasswordController::class, 'changepassword'])->name('changepassword');
Route::match(['post', 'put'], '/updatePassword', [ChangePasswordController::class, 'updatePassword'])->name('updatePassword');
//Logout clear token
// Route::POST('logout', 'App\Http\Controllers\UserController@logout')->middleware('auth:api');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

route::get('/postlogin', 'loginController@postlogin')->name('postlogin');

Route::post('newPost', [HomeController::class, 'newPost'])->name('newPost');

// Route::get('/home', function () {
//     return view('home', [
//         'title'=> 'Home',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "Lorem ipsum dolor
//         sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
//         et. Donec sit amet odio vitae elit ullamcorper tempus...",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });



// Route::get('/loker', function () {
//     return view('loker', [
//         'title'=> 'Loker',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "assets/images/dummy/loker.jpg",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "[LOKER BOGOR KOTA] Terupdate dan Terpercaya
//         Bagikan info lowongan kerja ini kepada keluarga, teman, sahabat, dan orang yang membutuhkan info lowongan pekerjaan
//         PERHATIKAN :
//         - Untuk info lebih lanjut, silakan hubungi kontak atau langsung datang ke alamat yang tertera
//         - Hindari dan laporkan ke admin jika ada lowongan pekerjaan dengan modus Travel /penggantian biaya akomodasi selama test berlangsung
//         - Hindari memberikan sejumlah uang/transfer kepada pihak tertentu yang mengatasnamakan perusahaan
//         - Cek selalu Website resmi perusahaan tersebut
//         - Waspada terhadap lowongan pekerjaan penipuan seperti MLM atau sejenisnya dengan imbalan Gaji besar
//         - Silahkan DM kepada admin kami jika dirasa lowongan pekerjaan yang kami posting tersebut mencurigakan",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });

// Route::get('/event', function () {
//     return view('event', [
//         'title'=> 'Event',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "assets/images/dummy/event2.jpg",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "Lorem ipsum dolor
//         sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
//         et. Donec sit amet odio vitae elit ullamcorper tempus...",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });

// Route::get('/wisata', function () {
//     return view('wisata', [
//         'title'=> 'Wisata',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "assets/images/dummy/mlm.png",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "Lorem ipsum dolor
//         sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
//         et. Donec sit amet odio vitae elit ullamcorper tempus...",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });

// Route::get('/kuliner', function () {
//     return view('kuliner', [
//         'title'=> 'Kuliner',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "assets/images/dummy/geprek.jpg",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "Lorem ipsum dolor
//         sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
//         et. Donec sit amet odio vitae elit ullamcorper tempus...",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });

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

// Route::get("/profile", function () {
//     return view("profile", [
//         "title"=> "Profile",
//     ]);
// });

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});



// Route::get('/register2', function () {
//     return view('register2');
// });

// Route::get('/trending', function () {
//     return view('trending', [
//         'title' => 'Trending',
//         "username" => "Fatih",
//         "post_time" => "Recenly",
//         "image" => "assets/images/image-post1.svg",
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "caption" => "Lorem ipsum dolor
//         sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
//         et. Donec sit amet odio vitae elit ullamcorper tempus...",
//         "upvotes"=> "20 Upvotes",
//         "comments"=> "3 Comments",
//     ]);
// });

// Route::get('/notification', function () {
//     return view('notification', [
//         'title'=> 'Notification',
//         'nama' => 'sirkoping_',
//         'nama2' => 'daydream',
//         "profile_image" => "assets/images/silverash-profile.svg",
//         "profile_image2" => "assets/images/putri-kecil-brocklesnar.png",
//     ]);
// });

// Route::get('/editprofile', function () {
//     return view('editprofile', [
//         'title'=> 'Edit Profile',
//     ]);
// });

// Route::get('/changepassword', function () {
//     return view('gantipass', [
//         'title'=> 'Ubah Password',
//     ]);
// });