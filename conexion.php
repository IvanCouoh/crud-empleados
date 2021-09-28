<?php


    class conexion{
        private static $instancia=NULL;

        public static function crearInstancia(){
            if(!isset(self::$instancia)){
                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                //Conexión del servidor - Descomentar si se va usar o comentarlo si no
                /* self::$instancia = new PDO('mysql:host=localhost;dbname=id17666837_empleados', 'id17666837_javier', 'UuWeSoa1~]6/*s4J', $opcionesPDO); */
                
                //Conexión local - Descomentar si se va usar o comentarlo si no
                self::$instancia = new PDO('mysql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);
                
            }
            return self::$instancia;
        }
    }

?>
