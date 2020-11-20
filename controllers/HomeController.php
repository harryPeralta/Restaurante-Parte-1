<?php

    class HomeController
    {
        public function __construct()
        {
            require_once "models/Producto.php";
        }

        public function index()
        {
            $data["titulo"] =  "Sazón del Aprendiz";
            require_once "views/home/index.php";
        }


        
    }
  ?>  