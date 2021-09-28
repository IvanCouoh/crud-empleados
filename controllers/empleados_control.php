<?php

include_once("models/empleado.php");
include_once("conexion.php");

conexion::crearInstancia();

class empleadosControl{
    public function crear(){
        if($_POST){
            $nombre=$_POST["nombre"];
            $correo=$_POST["correo"];
            $fecha=$_POST["fecha"];
            Empleado::crear($nombre,$correo,$fecha);
        }

        include_once("views/empleados/crear.php");

    }
    
    public function inicio(){

        $empleados=Empleado::consultar();
        include_once("views/empleados/inicio.php");
    }
}

?>