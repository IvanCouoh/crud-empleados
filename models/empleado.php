<?php

class Empleado{

    public $id;
    public $nombre;
    public $correo;
    public $fecha;
    public function __construct($id,$nombre,$correo,$fecha){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
        $this->fecha=$fecha;
    }

    public static function consultar(){
        $listaEmpleados=[];
        $BDconexion= conexion::crearInstancia();
        $sql=$BDconexion->query("select * from empleados");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[]= new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo'],$empleado['fecha']);
        }

        return $listaEmpleados;
    }

    public static function crear($nombre, $correo, $fecha){

        $BDconexion= conexion::crearInstancia();
        $sql=$BDconexion->prepare("Insert Into empleados (nombre, correo, fecha) values(?,?,?)");
        $sql->execute(array($nombre,$correo,$fecha));

    }

    public static function borrar($id){
        $BDconexion= conexion::crearInstancia();
        $sql=$BDconexion->prepare("delete from empleados where id=?");
        $sql->execute(array($id));
    }

    public static function buscar($id){
        $BDconexion= conexion::crearInstancia();
        $sql=$BDconexion->prepare("select * from empleados where id=?");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new Empleado($empleado['id'],$empleado['nombre'],$empleado['correo'],$empleado['fecha']);

         



    }




}

?>