<?php

include_once("models/empleado.php");
include_once("conexion.php");
conexion::crearInstancia();
class empleadosControl
{
    public function crear()
    {
        if ($_POST) {
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $fecha = $_POST["fecha"];
            Empleado::crear($nombre, $correo, $fecha);
            header("location:./?controller=empleados&action=inicio");
        }
        include_once("views/empleados/crear.php");
    }

    public function inicio()
    {
        $empleados = Empleado::consultar();
        include_once("views/empleados/inicio.php");
    }

    public function borrar()
    {
        $id = $_GET['id'];
        Empleado::borrar($id);
        header("location:./?controller=empleados&action=inicio");
    }

    public function editar()
    {
        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::editar($id, $nombre, $correo);
            header("location:./?controller=empleados&action=inicio");
        }

        $id = $_GET['id'];
        $empleado = (Empleado::buscar($id));
        include_once("views/empleados/editar.php");
    }

    public function carta()
    {
        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::editar($id, $nombre, $correo);
            header("location:./?controller=empleados&action=inicio");
        }

        $id = $_GET['id'];
        $empleado = (Empleado::buscar($id));
        include_once("views/empleados/carta.php");
    }
}
