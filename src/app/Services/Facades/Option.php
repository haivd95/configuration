<?php

namespace VCComponent\Laravel\Config\Services\Facades;

use Illuminate\Support\Facades\Facade;

class Option extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'option';
    }
}
