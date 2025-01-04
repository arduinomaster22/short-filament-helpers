<?php

namespace ManojHortulanus\ShortFilamentHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ManojHortulanus\ShortFilamentHelpers\ShortFilamentHelpers
 */
class ShortFilamentHelpers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ManojHortulanus\ShortFilamentHelpers\ShortFilamentHelpers::class;
    }
}
