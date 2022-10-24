<?php

if (!function_exists('dd_if')) {

    /**
     * Dump the passed variables and end the script if the first argument is true.
     * @param mixed $condition
     * @param mixed ...$args
     * @return void|never
     */
    function dd_if($condition, ...$args)
    {
        if ($condition) {
            dd(...$args);
        }
    }
}
