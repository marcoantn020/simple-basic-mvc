<?php 
    
    namespace App;

use function PHPSTORM_META\type;

    class Application
    {
        private $controller;

        private function setApp() 
        {
           $loadName = "App\controller\\";
           $url      = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        
           if($url[1] == "") {
                $loadName .= "Home";
           }else {
                $loadName .= ucfirst(strtolower($url[1]));
           }

           $loadName .= "Controller";
           
           if(class_exists($loadName)) {
               $this->controller = new $loadName();
            } else {
                require "view/pages/404.php";
                die();
            }
        }

        public function run ()
        {
            $this->setApp();
            $this->controller->index();
        }
    }

?>