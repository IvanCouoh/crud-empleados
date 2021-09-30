<?php


  class conexion{
    private static $instancia=NULL;
    public static function crearInstancia(){

      $contraseña = "94c6227b24adf1b10eb41688c7bf1de3bcf2c0b0a6de1663413dbf30288c64da";
      $usuario = "fepkmiqjprcoyn";
      $nombreBaseDeDatos = "dmi6jhcel19ej";
      $rutaServidor = "ec2-54-161-189-150.compute-1.amazonaws.com";
      $puerto = "5432";

      if(!isset(self::$instancia)){
        $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        //Conexión del servidor - Descomentar si se va usar o comentarlo si no
        self::$instancia = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
        
        //Conexión local - Descomentar si se va usar o comentarlo si no
        // self::$instancia = new PDO('mysql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);
          
      }
      return self::$instancia;
    }
  }

?>