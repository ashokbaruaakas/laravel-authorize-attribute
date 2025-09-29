<?php

namespace Ashok\Authorize\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ashok\Authorize\Authorize
 */
class Authorize extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Ashok\Authorize\Authorize::class;
    }
}
