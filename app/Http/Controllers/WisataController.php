<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WisataController extends Controller
{
    public function wisata(Request $request)
    {
        // Ambil token dari session
        $jwtToken = session('token');
        
        // Token value
        $tokenValue = $jwtToken;

        // Buat instance Guzzle
        $client = new Client();

        // return dd($jwtToken);
        // Buat permintaan ke endpoint dengan menyertakan token
        $response = $client->get('http://127.0.0.1:8001/api/user/get-User-By-Id?', [
            'headers' => [
                'xxx-token' => $jwtToken,
            ],
        ]);
        
        // Ambil konten respons sebagai array
        $userData = json_decode($response->getBody(), true);

        // Kirimkan data ke view
        // return view('event', $viewData);
        return view('wisata', [
            'title'=> 'Wisata',
            "username" => "Fatih",
            "post_time" => "Recenly",
            "image" => "assets/images/dummy/mlm.png",
            "profile_image" => "assets/images/silverash-profile.svg",
            "caption" => "Lorem ipsum dolor
            sit amet, consectetur adipiscing elit. Ut commodo sem diam, vel malesuada est eleifend
            et. Donec sit amet odio vitae elit ullamcorper tempus...",
            "upvotes"=> "20 Upvotes",
            "comments"=> "3 Comments",
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }
}
