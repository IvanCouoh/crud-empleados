<?php

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase {


    /** @test **/
    public function Comprobar_las_consultas_por_Http()
    {

        $BDconexion= conexion::crearInstancia();

        $cliente = new GuzzleHttp\Client();

        $res = $BDconexion->query("select * from empleados where id = 1");

        $data = json_decode($res -> getBody(), true);

        $this -> assertArrayHasKey('id', $data);
        $this -> assertArrayHasKey('nombre', $data);
    }

    public function testFailure()
    {
        $this->assertIsString(null);
    }
}