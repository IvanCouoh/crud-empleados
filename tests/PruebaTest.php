<?php

use PHPUnit\Framework\TestCase;

include './models/employee.php';

class PruebaTest extends TestCase
{
    /** @test **/
    public function Comprobar_las_consultas_por_Http()
    {
        $user = new User();

        // $user->email('javiergmail.com');

        // $this->assertEquals($user->addData(id: 1, nombre: 'javier', correo: 'javier@gmail.com', fecha: '2021-12-10'), 1, 'javier', 'javiergmail.com', '2021-12-10');

        //valita la existencia de un correo
        $this->assertEquals($user->testEmpleado(
            id: 1, 
            nombre: 'Javier',
            correo: 'javier@gmail.com',
            fecha: '2021-12-10'
        ), 
        1);

        //valita la existencia de un id
        // $this->assertEquals($user->setId(id:2), 2);
    }
}
