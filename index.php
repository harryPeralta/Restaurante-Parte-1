<?php

    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/conexion.php";
   
    if(isset($_GET['control'])) 
    {
        
        $controlador = cargarControlador($_GET['control']);
        
        if(isset($_GET['action'])) 
        {
            
            if(isset($_GET['identificacion']))
            {
                cargarAccion($controlador, $_GET['action'], $_GET['identificacion']);
            }

            else if(isset($_GET['codigo']))
            {
                cargarAccion($controlador, $_GET['action'], $_GET['codigo']);
            }
            
            else
            {

                cargarAccion($controlador, $_GET['action']);
            }
        }
        else{
            
            $controlador =  cargarControlador(CONTROLADOR_PRINCIPAL);
        }
    }
    else
    {
        
        $controlador =  cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion($controlador, ACCION_PRINCIPAL);
    }
?>

