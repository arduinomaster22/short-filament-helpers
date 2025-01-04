<?php


namespace ManojHortulanus\ShortFilamentHelpers\Facades;

use Illuminate\Support\Facades\Facade;

/**

 * @method static \ManojHortulanus\ShortFilamentHelpers\ShortFilamentHelpers dumpVars(mixed $vars = null)
 * @see \ManojHortulanus\ShortFilamentHelpers\ShortFilamentHelpers
 */

class ShortFilamentHelpers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ManojHortulanus\ShortFilamentHelpers\ShortFilamentHelpers::class;
    }
}
