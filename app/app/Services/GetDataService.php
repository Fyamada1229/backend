<?php

namespace App\Services;

use App\Models\Device;

class GetDataService
{
    public function getData()
    {
        return Device::all();
    }
}