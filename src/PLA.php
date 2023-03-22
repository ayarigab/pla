<?php

namespace Ayarigab\Pla;

use Illuminate\Support\Facades\Facade;

class Pla extends Facade
{
    /**
     * Get the binding in the IoC container.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pla';
    }
}