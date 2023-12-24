<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use GuzzleHttp\Client;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function regisAPI(Request $request)
    {
        // Buat instance Guzzle
        $client = new Client();

        $requestData = [
            'username'      => $request->input('username'),
            'fullname'      => $request->input('fullname'),
            'email'         => $request->input('email'),
            'password'      => $request->input('password'),
            'description'   => 'desc',
            'phone'         => '0000000000',
            // Add other fields as needed
        ];

        // dd($requestData);
        try {
            $response = $client->post('http://127.0.0.1:8001/api/user', [
                'json' => $requestData,
            ]);

            return redirect()->route('register')->with('success', 'Berhasil mendaftar.');

            $data = json_decode($response->getBody(), true);

            // Check if the API request was successful
            if ($response->getStatusCode() === 401) {
                // Redirect to the 'editprofile' view
                return redirect()->route('register')->with('error email', 'Email sudah terdaftar.');
            } else {
                // Handle errors, e.g., display an error message
                return redirect()->route('register')->with('error', 'Failed to update profile');
            }

            dd($response);
            // return view('login');
        } catch (\Illuminate\Http\Client\RequestException $exception) {
            // Tangkap error dan kembalikan pesan error ke view
            $errorMessage = json_decode($exception->response->body())->message;

            return view('register', ['errorMessage' => $errorMessage]);
        }
    }

    public function logout()
    {
        // Clear Laravel session
        Session::flush();

        // Create a response with embedded JavaScript to clear session storage
        $response = Response::make(redirect('/login'));
        $response->withCookie(cookie('laravel_session', '', 0, '/')); // Clear the Laravel session cookie

        $response->setContent('<script>
                                sessionStorage.clear();
                                window.location.href = "/login";
                              </script>');

        return $response;
    }
}
