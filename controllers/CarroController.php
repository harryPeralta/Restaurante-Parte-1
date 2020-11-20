<?php

    class CarroController
    {
        public function __construct()
        {
            require_once "models/Carro.php";
            
        }
        public function index()
        {
            $carros = new Carro();
            $data["carros"] = $carros->listar();

            require_once "views/carros/index.php";
        }

        //Guardar el registro
        public function store()
        {
            //Recibir los datos a guardar
            
            $identificadorProducto = $_POST ['identificador'];
            $precioTotal  = $_POST['precio'];

            $carro = new Carro();
            $carro->insert($identificadorProducto, $precioTotal);

            $this->index();
        }
        
        
        public function delete($id)
        {
            $carro = new Carro();
            $carro->delete($id);
            $this->index();
        }
        
    }


?>