<?php

    class MenuController
    {
        public function __construct()
        {
            require_once "models/menu.php";
        }
        public function menu()
        {
            $productos = new Producto();
            $data["productos"] = $productos->listar();
            $data["titulo"] = "productos";
            require_once "views/menu/index.php";
        }
    }
  ?>  