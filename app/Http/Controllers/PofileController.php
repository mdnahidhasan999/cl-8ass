<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PofileController extends Controller
{
    public function index($id)
    {
        $name = "Donal Trump";
        $age = "75";

        // Add variables to $data as an associative array
        $data =[
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        
        // Set cookie variables
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookie = cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);

        // Return the response with $data, status-code, and cookie
        return response($data)->cookie($cookie)->setStatusCode(200);
}
}