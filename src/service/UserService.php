<?php

namespace App\service;

use App\model\UserModel;
use App\MySql;
use App\Utils;

class UserService
{
    public function create ($name, $email, $pass)
    {

        if(strlen($name) < 5) {
            Utils::alert("Nome deve ter no mininmo 5 caracters");
            Utils::redirect(PATH_URL.'register');
        }


        if(UserModel::getUserByEmail($email)) {
            Utils::alert("E-mail ja esta cadastrado!");
            Utils::redirect(PATH_URL.'register');
        }

        // if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     Utils::alert("E-mail invalido");
        //     Utils::redirect(PATH_URL.'register');
        // }

        if(strlen($pass) < 5) {
            Utils::alert("Senha deve ter no mininmo 5 caracters");
            Utils::redirect(PATH_URL.'register');
        }

        $pass = md5($pass);
        UserModel::register($name, $email, $pass);
        
        Utils::alert("Cadastro concluido.");
        Utils::redirect(PATH_URL);
    }

    public function login ($email, $pass) {
        $user = UserModel::getUserByEmail($email);
        if(!isset($user)) {
            Utils::alert("Não existe usuario com esse E-mail e/ou Password");
            Utils::redirect(PATH_URL);
        } else {
            if($user->pass == md5($pass)) {
                $_SESSION["login"] = $user->email;
                $_SESSION["name"] = explode(" ", $user->name)[0];
                Utils::alert("Usuario logado com sucesso");
                Utils::redirect(PATH_URL);
            } else {
                Utils::alert("Não existe usuario com esse E-mail e/ou Password");
                Utils::redirect(PATH_URL);
            }
        }
    }

    public static function loggout()
    {
        session_unset();
        session_destroy();
        Utils::redirect(PATH_URL);
    }
}