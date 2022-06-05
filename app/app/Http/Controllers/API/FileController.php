<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function upload(Request $req)
    {
        $result = $req->file('file')->store('apiDocs');
        return ["result" => $result];
    }
}