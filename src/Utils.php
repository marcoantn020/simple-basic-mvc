<?php

namespace App;

class Utils
{
    
    public static function redirect ($url)
    {
        echo '<script>window.location.href="'.$url.'"</script>';
        die();
    }

    
    public static function alert ($message)
    {
        echo '<script>alert("'.$message.'")</script>';
    }
}