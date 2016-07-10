<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class CSVOperationFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'csvOperationHandler';
    }
}