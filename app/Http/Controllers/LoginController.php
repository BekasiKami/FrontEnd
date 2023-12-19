<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function login()
    {
        return view('loginn');
    }

    public function loginApi(Request $request)
    {
        $http = new \GuzzleHttp\Client;

        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|max:8', 
        // ]);
        $email      = $request->email;
        $password   = $request->password;

        try {
            $response = $http->post('http://127.0.0.1:8001/api/auth-login', [
                'form_params' => [
                    'email' => $email, 
                    'password' => $password
                ]
            ]);
            
            $result = json_decode((string)$response->getBody(), true);
            $token = $result['token'];
            
            if (isset($result['token'])) {
                // Token ditemukan, simpan ke dalam sesi
                session(['token' => $result['token']]);
                // Redirect ke route "home"
                return redirect()->route('home');
            } else {
                // Token tidak ditemukan, berikan respons JSON dengan status 401 (Unauthorized)
                return response()->json(['error' => 'Login failed'], 401);
            }
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Handle exception, e.g., log the error or return a custom response
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);
            // return dd($result);
            return redirect()->back()->with('error', 'login fail, Please Try Again');
        }
    }
}


// Wajib ada tiap page view 
// @if (session()->has('token'))
//             {{-- <p>Your token: {{ session('token') }}</p> --}}
//             <script>
//                 // Save the token to session storage
//                 sessionStorage.setItem('token', '{{ session('token') }}');
//             </script>
//         @else
//             <p>No token available.</p>
//         @endif

//         <script>
//             // Retrieve the token from session storage
//             const jwtToken = sessionStorage.getItem('token');

//             // Check if the token is available
//             if (jwtToken) {
//                 // Add the token to the headers (JavaScript)
//                 document.addEventListener('DOMContentLoaded', function() {
//                     document.querySelector('#xxx-token').setAttribute('value', jwtToken);
//                 });
//             } else {
//                 console.error('JWT token not found in session storage.');
//             }
//         </script>


// Harus ada tiap Form
// <input type="hidden" id="xxx-token" value="">