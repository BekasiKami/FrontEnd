<?php

namespace App\Http\Controllers;
use GuzzleHttp\Exception\RequestException;
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
        $response = $client->get('http://127.0.0.1:8001/api/user/get-User-By-Id?', [
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

        // return dd($userData['user']['fullname']);


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
    
    public function newPost(Request $request)
    {
        $http = new \GuzzleHttp\Client;

        // Ambil token dari session
        $jwtToken = session('token');
        
        // Token value
        $tokenValue = $jwtToken;

        $client = new Client();

        $user = $client->get('http://127.0.0.1:8001/api/user/get-User-By-Id?', [
            'headers' => [
                'xxx-token' => $jwtToken,
            ],
        ]);
        $userData = json_decode($user->getBody(), true);
        $user_Uid= $userData['user']['uid'];

        $requestData = [
            'comment'        => $request->input('comment'),
            'type_privacy'    => '1',
            'imagePosts' => 'b5be51a7-d73b-40d7-aec3-0c63f73bb7e1.jpg',
            // Add other fields as needed
        ];
        // dd($requestData);

        // dd($userData['user']['uid']);
        
        // try {
        //     $response = $this->client->post(
        //         'http://127.0.0.1:8001/api/post/create-new-post', [
        //             'headers' => [
        //                 'Accept'                => 'application/json',
        //                 'Content-Type'          => 'multipart/form-data',
        //                 'xxx-token' => $jwtToken,
        //                 'user_uid' => $userData['user']['uid'],
        //             ],
        //             'multipart' => [
        //                 [
        //                     'comment'        => $request->input('comment'),
        //     'type_privacy'    => '1',
        //     'imagePosts' => 'b5be51a7-d73b-40d7-aec3-0c63f73bb7e1.jpg',
        //                 ],
        //             ],
        //         ],
        //     );
        //    echo $response->getBody()->getContents();
        // } catch(\Exception $e) {
        //     echo $e->getMessage();
        //     $response = $e->getResponse();
        //     $responseBody = $response->getBody()->getContents();

        //     echo $responseBody;
        //     exit;
        // }

        try {
            $response = $client->post('http://127.0.0.1:8001/api/post/create-new-post', [
                'headers' => [
                    'xxx-token' => $jwtToken,
                    'user_uid' => $userData['user']['uid'],
                ],
                'json' => $requestData,
                ]);
            
            $result = json_decode((string)$response->getBody(), true);
            $token = $result['token'];
            dd($token);
            // Check if the API request was successful
            if ($response->getStatusCode() === 200) {
                // Redirect to the 'editprofile' view
                return redirect()->route('home')->with('success', 'Profile updated successfully');
            } else {
                // Handle errors, e.g., display an error message
                return redirect()->route('home')->with('error', 'Failed to update profile');
            }

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Handle exception, e.g., log the error or return a custom response
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);
            // return dd($result);
            return redirect()->back()->with('error', 'Post Failed');
        }
    }
}
