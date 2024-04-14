<?php

namespace Dotmarn\Oracle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dotmarn\Oracle\Oracle
 */
class Oracle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dotmarn\Oracle\Oracle::class;
    }
}
