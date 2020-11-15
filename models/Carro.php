<?php 
    class Carro
    {
        private $db;
        private $carros;
        private $identificador;

        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->carros = array();
            $this->identificador = null;
        }

        public function listar()
        {
            $sql =  "SELECT * " .
                    "FROM carro " .
                    "JOIN producto " .
                    "ON carro.indentificadorProducto = producto.identificador";
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

        public function insert($id, $identificadorProducto, $precioTotal)
        {
            $this->identificador = $id;
            $sql = "INSERT INTO carro (identificadorProducto, precioTotal) VALUES ( $id, $identificadorProducto, $precioTotal)"; 
            $this->db->query($sql); 
        }
        
        public function delete ($id)
        {
            $sql = "DELETE FROM carro WHERE id = $id";
            $resultado = $this->db->query($sql);
        }
        
    }

?>