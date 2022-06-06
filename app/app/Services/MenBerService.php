<?php

namespace App\Services;

use App\Models\Device;

class MenBerService
{
    public function getData()
    {
        return Device::all();
    }
}