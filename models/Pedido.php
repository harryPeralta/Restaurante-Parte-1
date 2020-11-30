<?php  

    class Pedido
    {
        private $db;
        private $pedidos;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->pedidos = array();
        }

        public function insert($valor, $idCarroCompras)
        {
             
            if(isset($_SESSION["numeroDocumento"]))
            {
                if(isset($_SESSION["rol"]))    
                {
                    if($_SESSION["rol"] == 'Cliente')
                    {
                        $numeroDocumento = $_SESSION["numeroDocumento"];
                        $sql = "INSERT INTO pedido (valor, estado, numeroDocumentoCliente, idCarroCompras) VALUES ($valor, 'solicitado', '$numeroDocuento', $idCarroCompras)"; 
                        $this->db->query($sql);                       
                    }    
                }
            }
            else
            {
                $sql = "INSERT INTO pedido (valor, estado, numeroDocumentoCliente, idCarroCompras) VALUES ($valor, 'solicitado', '1005815552', $idCarroCompras)";
                $this->db->query($sql); 
            }
        }
    }

?>