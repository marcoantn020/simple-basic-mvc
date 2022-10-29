<?php

namespace App\view;

class MainView
{
    
    public static function render ($filename)
    {
        include("pages/".$filename.".php");
    }
}