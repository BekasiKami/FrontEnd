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

// ISI ARRAY USER

// array:12 [▼ // app\Http\Controllers\ProfileController.php:40
//   "uid" => "9edb76a8-acd8-4bfe-92f8-aa53dc2ae02b"
//   "fullname" => "kopling"
//   "phone" => "08888869"
//   "image" => "avatar-default.png"
//   "cover" => null
//   "birthday_date" => null
//   "created_at" => "2023-12-05T06:13:13.000Z"
//   "username" => "testing"
//   "description" => null
//   "is_private" => 0
//   "is_online" => 0
//   "email" => "testing@gmail.com"
// ]