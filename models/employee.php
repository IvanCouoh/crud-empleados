<?php

class User
{
    public $id;
    public $nombre;
    public $correo;
    public $fecha;

    // public function addData($id, $nombre, $correo, $fecha){
    //     if($id != '' && $nombre != '' && $correo != '' && $fecha != ''){
    //         print 'Datos validos';
    //         return ( $this->correo = $correo);
    //     } else {
    //         print 'Todos los datos deben ser llenados';
    //     }
    // }

    public function testEmpleado($id, $nombre, $correo, $fecha)
    {
        if (
            filter_var(strlen($id)) > 0 &&
            filter_var(strlen($nombre)) > 0 &&
            filter_var(strlen($correo)) > 0 &&
            filter_var($correo, FILTER_VALIDATE_EMAIL) == $correo &&
            filter_var(strlen($fecha)) > 0
        ) {
            print 'Datos correctos';
            return $this->$id = $id;
            return $this->$nombre = $nombre;
            return $this->$correo = $correo;
            return $this->$fecha = $fecha;
        } else {
            print 'Todos los datos deben ser llenados';
        }
    }

    // public function setId($id)
    // {
    //     if (filter_var(1, FILTER_VALIDATE_INT) != $id) {
    //         print 'Id valido';
    //         return $this->id = $id; 
    //     } else {
    //         print 'Id invalido';
    //     }
    // }
}
