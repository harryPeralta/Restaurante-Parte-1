<?php

    class MenuController
    {
        public function __construct()
        {
            require_once "models/Menu.php";
        }

        public function inicio()
        {
            $data["titulo"] =  "Sazón del Aprendiz";
            require_once "views/menu/inicio.php";
        }
        
        public function menu()
        {
            $productos = new Producto();
            $data["productos"] = $productos->listar();
            $data["titulo"] =  "Menú";
            require_once "views/menu/index.php";
        }

    }
  ?>  