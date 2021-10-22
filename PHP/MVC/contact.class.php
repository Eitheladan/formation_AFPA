<?php

// autoloader

class Contact{

    // datas
    private $email;
// methodes
    public function  __construct($email){

        $this->email=$email;
    }
    public function  getEmail(){

        return $this->email;
    }
}


?>