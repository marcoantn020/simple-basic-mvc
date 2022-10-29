<?php

namespace App\controller;

use App\MySql;
use App\service\UserService;
use App\Utils;
use App\view\MainView;

class RegisterController
{
    public function index ()
    {
        if(isset($_POST["register"])) {
           $service = new UserService();
           $service->create($_POST["name"], $_POST["email"], $_POST["pass"]);
        }

        MainView::render("register");
    }
}