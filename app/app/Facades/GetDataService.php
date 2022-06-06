<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class GetDataService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'GetDataService';
    }
}