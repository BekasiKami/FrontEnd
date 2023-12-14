<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ChangePasswordController extends Controller
{
    public function changepassword(Request $request)
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
        // return view('changepassword', $viewData);
        return view('gantipass', [
            'title'=> 'Ubah Password',
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }
}
