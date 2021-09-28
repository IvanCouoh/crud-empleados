<?php

class Empleado{

    public static function crear($nombre, $correo, $fecha){

        $BDconexion= conexion::crearInstancia();
        $sql=$BDconexion->prepare("Insert Into empleados (nombre, correo, fecha) values(?,?,?)");
        $sql->execute(array($nombre,$correo,$fecha));

    }

}

?>