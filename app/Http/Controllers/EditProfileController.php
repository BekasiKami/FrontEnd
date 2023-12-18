<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EditProfileController extends Controller
{
    // public function editprofile(Request $request)
    // {
    //     // Ambil token dari session
    //     $jwtToken = session('token');
        
    //     // Token value
    //     $tokenValue = $jwtToken;

    //     // Buat instance Guzzle
    //     $client = new Client();

    //     // return dd($jwtToken);
    //     // Buat permintaan ke endpoint dengan menyertakan token
    //     $response = $client->get('http://127.0.0.1:8001/api/user/get-User-By-Id?', [
    //         'headers' => [
    //             'xxx-token' => $jwtToken,
    //         ],
    //     ]);
        
    //     // Ambil konten respons sebagai array
    //     $userData = json_decode($response->getBody(), true);


    //     // Kirimkan data ke view
    //     // return view('editprofile', $viewData);
    //     return view('editprofile', [
    //         'title'=> 'Edit Profile',
    //     ]);
    // }

    public function editprofile(Request $request)
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

        // $tersimpan = $client->get('http://127.0.0.1:8001/api/post/get-list-saved-posts?', [
        //     'headers' => [
        //         'xxx-token' => $jwtToken,
        //     ],
        // ]);
        
        // Ambil konten respons sebagai array
        $userData = json_decode($response->getBody(), true);
        // $postData = json_decode($posting->getBody(), true);
        // $savePostData = json_decode($tersimpan->getBody(), true);

        // lingkup data array user
        // $data = $userData['user'];

        // Kirimkan data ke view
        // return view('profile', $viewData);
        return view('editprofile', [
            'title' => 'Edit Profile',
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
            // 'posting' => $postData,
        ]);

        // return dd($userData, $postData);
    }

    public function updateProfile(Request $request)
    {
        // Ambil token dari session
        $jwtToken = session('token');
        
        // Token value
        $tokenValue = $jwtToken;

        $client = new Client();
        $response = $client->put('http://127.0.0.1:8001/api/user/update-data-profile', [
            'headers' => [
                'xxx-token' => $jwtToken,
            ],
            'username' => $request->input('username'),
            'fullname' => $request->input('fullname'),
            // Add other fields as needed
        ]);

        // Handle the response from the API
        $apiResponse = $response->json(); // Assuming the API returns JSON

        // Process the API response and return a response to the client
        // ...

        // Example: Return a success message
        return response()->json(['message' => 'Profile updated successfully']);
    }
}
