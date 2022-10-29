<?php

namespace App\model;

use App\MySql;

class UserModel
{
    
    public static function getUserByEmail ($email)
    {
        $query  = MySql::connect()->prepare("SELECT * FROM exampleMVC.users WHERE email = ?");
        $query->execute(array($email));
        $result = $query->fetch();
        return isset($result) ? $result : false;
    }

    public static function register ($name, $email, $pass)
    {
        $register = MySql::connect()->prepare("INSERT INTO exampleMVC.users VALUES (null, ?, ?, ?)");
        $register->execute(array($name, $email, $pass));
    }

}