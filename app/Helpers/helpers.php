<?php
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;



if (!function_exists('prePrint')) {
    function prePrint($arrData, $exit = TRUE)
    {
        echo "<pre>";
        print_r($arrData);
        if ($exit === TRUE) {
            die();
        }
    }
}





