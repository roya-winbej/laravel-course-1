<?php

if (!function_exists('theme')) {
    function assetsCss($path)
    {
        return url('/css/'.$path);
    }
}