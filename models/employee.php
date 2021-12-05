<?php

class User
{
    public $correo;
    public $id;

    public function setEmail($email)
    {
        if (filter_var('javier@gmail.com', FILTER_VALIDATE_EMAIL) == $email) {
            print 'Email valido';
            return $this->correo = $email; 
        } else {
            print 'Email invalido';
        }
    }

    public function setId($id)
    {
        if (filter_var(1, FILTER_VALIDATE_INT) != $id) {
            print 'Id valido';
            return $this->id = $id; 
        } else {
            print 'Id invalido';
        }
    }
}

?>