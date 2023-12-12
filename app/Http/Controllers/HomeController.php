<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil token dari session
        $jwtToken = session('token');
        
        // Token value
        $tokenValue = $jwtToken;

        // Buat instance Guzzle
        $client = new Client();

        // return dd($jwtToken);
        // Buat permintaan ke endpoint dengan menyertakan token
        $response = $client->get('http://127.0.0.1:7070/api/user/get-User-By-Id?', [
            'headers' => [
                'xxx-token' => $jwtToken,
            ],
        ]);
        
        // Ambil konten respons sebagai array
        $userData = json_decode($response->getBody(), true);

        // if (isset($userData['fullname'])) {
        //     $fullname = $userData['fullname'];
        // } else {
        //     $fullname = 'Default Fullname'; // Atau atur nilai default lainnya
        // }

        // return dd($fullname);


        // Data untuk dikirimkan ke view
        // $viewData = [
        //     'title' => 'Home',
        //     'username' => "Fatih",
        //     'post_time' => "Recently",
        //     'image' => "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg",
        //     'profile_image' => "assets/images/silverash-profile.svg",
        //     'caption' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend et. Donec sit amet odio vitae elit ullamcorper tempus...",
        //     'upvotes' => "20 Upvotes",
        //     'comments' => "3 Comments",
        //     'token' => $tokenValue,
        //     'result' => $userData, // Data dari API
        // ];

        // Kirimkan data ke view
        // return view('home', $viewData);
        return view('home', [
            'title' => 'Home',
            'username' => "Fatih",
            'post_time' => "Recently",
            'image' => "https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg",
            'profile_image' => "assets/images/silverash-profile.svg",
            'caption' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend et. Donec sit amet odio vitae elit ullamcorper tempus...",
            'upvotes' => "20 Upvotes",
            'comments' => "3 Comments",
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }
}
