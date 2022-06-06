<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DeviceaaaService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DeviceService';
    }
}