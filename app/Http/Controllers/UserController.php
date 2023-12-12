<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
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
