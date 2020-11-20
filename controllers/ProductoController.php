<?php

    class ProductoController
    {
        public function __construct()
        {
            require_once "models/Producto.php";
            require_once "models/Carro.php";
        
        }

        public function index()
        {
            $productos = new Producto();
            $data["productos"] = $productos->listar();
            $data["titulo"] =  "Menú";
            require_once "views/productos/index.php";
        }
    }
  ?>  