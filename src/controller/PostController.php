<?php

namespace App\controller;

use App\service\PostService;
use App\Utils;
use App\view\MainView;

class PostController
{
    public function index ()
    {
        if(!$_SESSION["login"]) {
            Utils::alert("Faça login para acessar essa pagina");
            Utils::redirect(PATH_URL);
        }

        if(isset($_POST["register-post"])) {
            $post = new PostService();
            $post->create($_POST["name"], $_POST["post"]);
        }

        MainView::render("post");
    
    }
}