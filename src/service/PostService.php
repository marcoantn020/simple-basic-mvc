<?php

namespace App\service;

use App\model\PostsModel;
use App\Utils;

class PostService
{
    public function create ($name, $post)
    {

        if(strlen($name) < 5) {
            Utils::alert("Nome deve ter no mininmo 5 caracters");
            Utils::redirect(PATH_URL.'post');
        }

        if(strlen($post) > 255) {
            Utils::alert("post deve ter 255 caracteres ou menos");
            Utils::redirect(PATH_URL.'post');
        }
        PostsModel::register($name, $post);
        Utils::alert("Cadastro concluido.");
        Utils::redirect(PATH_URL);
    }
}