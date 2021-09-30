<?php


    class conexion{
        private static $instancia=NULL;

        public static function crearInstancia(){
            if(!isset(self::$instancia)){
                $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                //Conexión del servidor - Descomentar si se va usar o comentarlo si no
                self::$instancia = new PDO('pgsql:host=ec2-34-233-187-36.compute-1.amazonaws.com;dbname=ddo0bpjqjsglth', 'nypxktxwsrhlsd', '93a5dca7ec63568b7bb53794cf776a699070d6b6468e9f70eb06c5c5f8a369d1', $opcionesPDO); 
                
                //Conexión local - Descomentar si se va usar o comentarlo si no
                // self::$instancia = new PDO('pgsql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);
                
            }
            return self::$instancia;
        }
    }

?>
