<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return 'Hi from home controller';
    // }

    public function index($name)
    {
        return 'Hi this is home controller ' . $name;
    }
}
