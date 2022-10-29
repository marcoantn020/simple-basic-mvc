<?php

namespace App\model;

use App\MySql;

class PostsModel
{
    public static function selectAll ()
    {
        $select = MySql::connect()->prepare("SELECT * FROM exampleMVC.posts;");
        $select->execute();
        return $select->fetchAll();
    }

    public static function register ($name, $post)
    {
        $register = MySql::connect()->prepare("INSERT INTO exampleMVC.posts VALUES (null, ?, ?)");
        $register->execute(array($name, $post));
    }

}