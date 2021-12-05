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

        //valita la existencia de un correo
        $this->assertEquals($user->setEmail(email:'javier@gmail.com'), 'javier@gmail.com');
        
        //valita la existencia de un id
        $this->assertEquals($user->setId(id:3), 3);
    }
}
