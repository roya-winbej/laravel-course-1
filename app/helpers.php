<?php

if (!function_exists('assetsCss')) {
    function assetsCss($path)
    {
        return url('/css/'.$path);
    }
}

if (!function_exists('assetsJS')) {
    function assetsJS($path)
    {
        return url('/js/'.$path);
    }
}