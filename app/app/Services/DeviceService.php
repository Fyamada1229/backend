<?php

namespace App\Services;

use App\Models\Device;

class DeviceService
{
    public function getData()
    {
        return Device::all();
    }
}