<?php

    class Producto
    {
        private $db;
        private $productos;
        private $id;


        public function __construct()
        {
            $this->db = Conectar::conexion();
            $this->productos = array();
            $this->id = null;
        }

        public function listar()
        {
            $sql = "SELECT * FROM producto";
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
                $this->productos[] = $row;
            }
            return $this->productos;
        }
    }



?>