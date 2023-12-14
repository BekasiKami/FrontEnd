<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NotificationController extends Controller
{
    public function notification(Request $request)
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
        // return view('notification', $viewData);
        return view('notification', [
            'title'=> 'Notification',
            'nama' => 'sirkoping_',
            'nama2' => 'daydream',
            "profile_image" => "assets/images/silverash-profile.svg",
            "profile_image2" => "assets/images/putri-kecil-brocklesnar.png",
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }
}
