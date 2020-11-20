<?php 

    class PedidoController
    {
        public function __construct()
        {
            require_once "models/Pedido.php";
        }

        public function index()
        {
            $pedido = new Pedido();
            require_once "views/pedidos/index.php";
        }

        public function store()
        {
            $valor = $_POST['precioTotal'];
            $idCarroCompras = $_POST['id'];

            $pedido = new Pedido();
            $pedido->insert($valor,$idCarroCompras);

            $this->index();
        }
    }

?>