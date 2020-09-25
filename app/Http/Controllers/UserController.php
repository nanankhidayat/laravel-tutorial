<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function index()
//     {
//         return view('user');
//     }
// } -- memanggil user view dari controller

// class UserController extends Controller
// {
//     public function index()
//     {
//         $name = 'Bambang';
//         return view('user', compact('name'));
//     } 
// } -- passing single data ke user view

class UserController extends Controller
{
    public function index()
    {
        $name = 'Bambang';
        $user = array(
            "name" => "Basuki",
            "email" => "basuki@gmail.com",
            'alamat' => 'Kampung Utan Selatan',
            'kode pos' => '123456'
        );
        return view(
            'user',
            compact('name', 'user')
        );
    }
}
