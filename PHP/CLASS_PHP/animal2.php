<?php

interface Animal {

    public function breath();
    public function eat();
    
}

class Dog implements Animal{


    public function bark(){
        return 'wof';
    }

    public function breath()
    {
        return 'breathing';
    }

    public function eat()
    {
        return 'eating';
    }
}

$dog = new Dog;
echo $dog->breath()."<br>";
echo $dog->bark()."<br>";
echo $dog->eat();

?>