<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ProfileController extends Controller
{
    public function profile(Request $request)
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

        $posting = $client->get('http://127.0.0.1:8001/api/post/get-post-by-idPerson?', [
            'headers' => [
                'xxx-token' => $jwtToken,
            ],
        ]);

        // $tersimpan = $client->get('http://127.0.0.1:8001/api/post/get-list-saved-posts?', [
        //     'headers' => [
        //         'xxx-token' => $jwtToken,
        //     ],
        // ]);
        
        // Ambil konten respons sebagai array
        $userData = json_decode($response->getBody(), true);
        $postData = json_decode($posting->getBody(), true);
        // $savePostData = json_decode($tersimpan->getBody(), true);

        // lingkup data array user
        // $data = $userData['user'];

        // Kirimkan data ke view
        // return view('profile', $viewData);
        return view('profile', [
            'title' => 'Profile',
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
            'posting' => $postData,
        ]);

        // return dd($userData, $postData);
    }
}