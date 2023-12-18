<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LokerController extends Controller
{
    public function loker(Request $request)
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
        // return view('event', $viewData);
        return view('loker', [
            'title'=> 'Loker',
            "username" => "Fatih",
            "post_time" => "Recenly",
            "image" => "assets/images/dummy/loker.jpg",
            "profile_image" => "assets/images/silverash-profile.svg",
            "caption" => "[LOKER BOGOR KOTA] Terupdate dan Terpercaya
            Bagikan info lowongan kerja ini kepada keluarga, teman, sahabat, dan orang yang membutuhkan info lowongan pekerjaan
            PERHATIKAN :
            - Untuk info lebih lanjut, silakan hubungi kontak atau langsung datang ke alamat yang tertera
            - Hindari dan laporkan ke admin jika ada lowongan pekerjaan dengan modus Travel /penggantian biaya akomodasi selama test berlangsung
            - Hindari memberikan sejumlah uang/transfer kepada pihak tertentu yang mengatasnamakan perusahaan
            - Cek selalu Website resmi perusahaan tersebut
            - Waspada terhadap lowongan pekerjaan penipuan seperti MLM atau sejenisnya dengan imbalan Gaji besar
            - Silahkan DM kepada admin kami jika dirasa lowongan pekerjaan yang kami posting tersebut mencurigakan",
            "upvotes"=> "20 Upvotes",
            "comments"=> "3 Comments",
            'token' => $tokenValue,
            'result' => $userData, // Data dari API
        ]);
    }
}
