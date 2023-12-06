<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // return view('home');
        return view('home', [
            'title' => 'Home',
            'username' => 'Fatih',
            'post_time' => 'Recenly',
            'image' => 'assets/images/image-post1.svg',
            'profile_image' => 'assets/images/silverash-profile.svg',
            'caption' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend et. Donec sit amet odio vitae elit ullamcorper tempus...',
            'upvotes' => '20 Upvotes',
            'comments' => '3 Comments',
        ]);
    }
}
