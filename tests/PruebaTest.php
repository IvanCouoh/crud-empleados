<?php

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase
{


    /** @test **/
    public function Comprobar_las_consultas_por_Http()
    {

        $nombre = "javier";
        $BDconexion= conexion::crearInstancia();
        $res=$BDconexion->query("select * from empleados where id=2");

        $data = json_decode($res->getBody(), false);

        $this->assertArrayHasKey('id', $data);
        $this->assertArrayHasKey('nombre', $data);
        $cliente = new GuzzleHttp\Client();

        $res = $cliente->array([
            $correo = "javier@gmail.com"
        ]);
    }

    public function testFailure()
    {
        $this->assertIsString(null);
    }
}
