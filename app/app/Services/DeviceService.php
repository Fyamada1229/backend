<?php

namespace App\Services;

use App\Models\Device;

class DeviceService
{
    public function getData()
    {
        return Device::all();
    }

    public function store($request, ?Device $device = null)
    {
        if ($device === null) {
            $device = new Device();
        }
        $device->fill($request)->save();

        return $device;
    }
}