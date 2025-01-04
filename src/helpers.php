<?php

if (!function_exists('filamentdd')) {
    function filamentdd(mixed $vars): never
    {
        ob_clean();
        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        dd($vars);
    }
}
