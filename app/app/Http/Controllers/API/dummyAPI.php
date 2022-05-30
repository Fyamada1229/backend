<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{

    function getData()
    {
        return ['name' => 'yamada', 'email' => 'yamada@gmail.com', 'address' => 'Kanagawa'];
    }
}