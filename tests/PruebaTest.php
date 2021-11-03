<?php

use PHPUnit\Framework\TestCase;

class PruebaTest extends TestCase {


    /** @test **/
    public function Comprobar_las_consultas_por_Http()
    {
        $cliente = new GuzzleHttp\Client();

        $res = $cliente->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

        $data = json_decode($res -> getBody(), true);

        $this -> assertArrayHasKey('userId', $data);
        $this -> assertArrayHasKey('title', $data);
    }

    public function testFailure()
    {
        $this->assertIsString(null);
    }
}