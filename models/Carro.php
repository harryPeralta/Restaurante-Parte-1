<?php 
    class Carro
    {
        private $db;
        private $carros;
        private $identificacion;
        // Variable para el numero del carro, que sea publica para que cuando se accione el botón finalizar pedido 
        // esta se aumente en 1 y así mismo poder diferencias los carros. 

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->carros = array();  
            $this->identificacion =null;
        }

        

        public function listar()
        {
            $sql =  "SELECT * FROM carro" ;
            $resultado = $this->db->query($sql);
            if(!$resultado)
            {
                echo "Lo sentimos este sitio está experimentndo problemas.\n\n";

                echo "Eror: La ejecución de la consulta falla debido a :\n";
                echo "Query : " . $sql . "\n";
                echo "Errno" . $mysqli->errno . "\n" ;
                echo "Error" . $mysqli->error . "\n" ;
                exit;
            }
            while ($row = $resultado->fetch_assoc())
            {
                $this->carros[] = $row;
            }
            return $this->carros;
        }
        

        public function insert($identificadorProducto, $precioTotal)
        {
            $sql = "INSERT INTO carro (numeroCarro, identificadorProducto, precioTotal) VALUES (1, $identificadorProducto, $precioTotal)"; 
            $this->db->query($sql); 
        }
        
        public function delete ($id)
        {
            $sql = "DELETE FROM carro WHERE id = $id";
            $resultado = $this->db->query($sql);
        }
        
    }

?>