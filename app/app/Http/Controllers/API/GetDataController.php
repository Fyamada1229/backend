<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\GetDataService;
use App\Models\Device;

class GetDataController extends Controller
{
    function gataData(GetDataService $service)
    {
        $getData = $service->getData();
        return $getData->find(1);
    }
}