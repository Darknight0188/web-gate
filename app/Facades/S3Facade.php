<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class S3Facade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'App\Support\Aws\S3';
    }
}
