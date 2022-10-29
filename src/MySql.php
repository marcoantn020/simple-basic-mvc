<?php

namespace App;

use PDO;

class MySql
{
    private static $pdo;
    
    public static function connect ()
    {
        if(self::$pdo == null) {
            try {
                self::$pdo = new \PDO('mysql:host='.HOST.';dbaname='.DB, USER, PASS, array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ));
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
            } catch (\Exception $e) {
                echo 'Erro ao conectar';
                error_log($e->getMessage());
            }
        }
        return self::$pdo;
    }
}