<?php

    class HomeController
    {
        public function __construct()
        {
            
        }

        public function index()
        {
            $data["titulo"] =  "Sazón del Aprendiz";
            require_once "views/home/index.php";
        }
        
    }
  ?>  