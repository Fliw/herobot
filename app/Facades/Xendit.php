<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Xendit extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'xendit';
    }
}
