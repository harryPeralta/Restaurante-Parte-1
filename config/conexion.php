<?php

class Conectar
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost","root","","restaurante");
        if(!$conexion)
        {
            die("Conexion fallida" . mysqli_connect_error());
        }
        return $conexion;
    }
}

?>