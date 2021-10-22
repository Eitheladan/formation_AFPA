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

        $greeting= parent::greet();
        return $greeting. 'from android';
    }

}


// Override de méthode, la méthode greet() est redéfinie.


$android = new Android();
echo $android->greet();

?>