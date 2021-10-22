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

}


// programme test
$android = new Android();
echo $android->greet();
// Hello!
// Héritage Typique
?>