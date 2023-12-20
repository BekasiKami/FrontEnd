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
            'title' => 'Ubah Password',
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }

    public function updatePassword(Request $request)
    {
        // Ambil token dari session
        $jwtToken = session('token');

        // Token value
        $tokenValue = $jwtToken;

        $client = new Client();

        // $getUser = $client->get('http://127.0.0.1:8001/api/user/get-User-By-Id?', [
        //     'headers' => [
        //         'xxx-token' => $jwtToken,
        //     ],
        // ]);
        // $userData = json_decode($getUser->getBody(), true);
        // $passAPI = $userData['user']['passwordd'];

        // dd($passAPI);


        $requestData = [
            'currentPassword'       => $request->input('currentPass'),
            'newPassword'           => $request->input('newPass'),
            // 'newPasswordconfirm'    => $request->input('confirmNewPass'),
        ];

        // // Kondisi 1: Jika currentPassword tidak sama dengan yang ada pada endpoint api
        // if ($requestData['currentPassword'] !== $passAPI) {
        //     return redirect()->route('changepassword')->with('error', 'Password lama salah');
        // }

        // // Kondisi 2: Jika newPassword tidak sama dengan newPasswordConfirm
        // if ($requestData['newPassword'] !== $requestData['newPasswordconfirm']) {
        //     return redirect()->route('changepassword')->with('error', 'Password baru dengan konfirmasi password baru tidak sama');
        // }

        // // Kondisi 3: Jika currentPassword sama dengan newPassword
        // if ($requestData['currentPassword'] === $requestData['newPassword']) {
        //     return redirect()->route('changepassword')->with('error', 'Password baru tidak boleh sama dengan password lama');
        // }

        try {
            $response = $client->put('http://127.0.0.1:8001/api/user/change-password', [
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
                return redirect()->route('changepassword')->with('success', 'Password updated successfully');
            } else {
                // Handle errors, e.g., display an error message
                return redirect()->route('changepassword')->with('error', 'Failed to update Password');
            }
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            // Handle exception, e.g., log the error or return a custom response
            $response = $e->getResponse();
            $result = json_decode((string)$response->getBody(), true);
            // return dd($result);
            return redirect()->back()->with('error', 'Edit Profile Failed, Please Try Again');
        }

        return redirect()->route('changepassword');
    }
}
