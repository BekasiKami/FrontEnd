<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    //
    // public function login(Request $request)
    // {
    //     $http = new \GuzzleHttp\Client;

    //     $response = $http->post('http://127.0.0.1:7070/api/auth-login',[
    //         'headers'=>[
    //             'Authorization'=>'Bearer'.session()->get('token.access_token')
    //         ],
    //         'query'=>[
    //             'email'=>'testing@gmail.com',
    //             'password'=>'testing123'
    //         ]
    //     ]);

    //     $result = json_decode((string)$response->getBody(),true);

    //     return dd($result);

    //     return view('loginn');
    // }

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
            $response = $http->post('http://127.0.0.1:7070/api/auth-login', [
                'headers' => [
                    'Authorization' => 'Bearer ' . session()->get('token.access_token')
                ],
                'form_params' => [
                    'email' => $email,
                    'password' => $password
                ]
            ]);

            $result = json_decode((string)$response->getBody(), true);

            // return dd($result);
            return redirect()->route('homee');

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Handle exception, e.g., log the error or return a custom response
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);
            // return dd($result);
            return redirect()->back()->with('error','login fail, Please Try Again');

        }
    }
}
