<?php

include_once("conexion.php");
conexion::crearInstancia();
class PagesControl{
    public function inicio(){
        include_once("views/pages/inicio.php");
    }
    public function error(){
        include_once("views/pages/error.php");
        
    }

    public function editar(){
        include_once("views/pages/editar.php");

    }

}

?>