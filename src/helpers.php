<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \Spinzar\Language\Language
     */
    function language()
    {
        return app('language');
    }
}
