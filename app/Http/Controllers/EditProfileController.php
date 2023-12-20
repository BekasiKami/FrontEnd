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

        $requestData = [
            'user'        => $request->input('username'),
            'fullname'    => $request->input('fullname'),
            'description' => 'desc',
            'phone'       => '0000000000',
            // Add other fields as needed
        ];

        $client = new Client();
        try {
            $response = $client->put('http://127.0.0.1:8001/api/user/update-data-profile', [
                'headers' => [
                    'xxx-token' => $jwtToken,
                ],
                'json' => $requestData,
            ]);

            $result = json_decode($response->getBody(), true);
            // $result = json_decode((string)$response->getBody(), true);

            // Check if the API request was successful
            if ($response->getStatusCode() === 200) {
                // Redirect to the 'editprofile' view
                return redirect()->route('editprofile')->with('success', 'Profile updated successfully');
            } else {
                // Handle errors, e.g., display an error message
                return redirect()->route('editprofile')->with('error', 'Failed to update profile');
            }

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Handle exception, e.g., log the error or return a custom response
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);
            // return dd($result);
            return redirect()->back()->with('error', 'Edit Profile Failed, Please Try Again');
        }

        return redirect()->route('editprofile');
    }

}
