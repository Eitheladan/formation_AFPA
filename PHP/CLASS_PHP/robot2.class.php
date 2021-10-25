<?php

// class Robot simple
class Robot{


    public function greet(){
        return 'Hello !';
    }
}

//Android enfant de robot

class Android extends Robot
{
    public function greet(){

        return 'Hi';
    }

}


// Override de méthode, la méthode greet() est redéfinie.


$robot= new Robot();
echo $robot->greet(); //Hello


$android = new Android();
echo $android->greet(); //Hi

?>