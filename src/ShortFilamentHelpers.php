<?php

namespace ManojHortulanus\ShortFilamentHelpers;

use Illuminate\Support\Facades\Storage;

class ShortFilamentHelpers
{
    public function dumpVars($vars)
    {
        ob_clean();
        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        dd($vars);
    }
}
