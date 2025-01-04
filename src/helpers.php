<?php

use ManojHortulanus\ShortFilamentHelpers\Facades\ShortFilamentHelpers;

if (! function_exists('filamentdd')) {
    function filamentdd(mixed $vars): never
    {
        ShortFilamentHelpers::dumpVars($vars);
    }
}
