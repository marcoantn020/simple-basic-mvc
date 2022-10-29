<?php

namespace App\controller;

use App\MySql;
use App\service\UserService;
use App\Utils;
use App\view\MainView;

class HomeController
{
    public function index ()
    {
        if(isset($_GET["loggout"])) {
            UserService::loggout();
        }

        if(isset($_SESSION["login"])) {
            MainView::render("home");
        } else {
            if(isset($_POST["login"])) {
                $user = new UserService();
                $user->login($_POST["email"], $_POST["pass"]);
            }

            MainView::render("login");
        }
    }
}