<?php
class Lecteurk7{

private $forward;
private $reward;
private $k7;

public function __construct($k7){

    $this->k7 = $k7;
}

public function getK7(){
    return $this->k7;
}

public function setK7(){
    $this->k7=$k7 ;
}

public function getForward(){
    return $this->forward;
}

public function setForward(){
    $this->forward=10 ;
}

public function getReward(){
    return $this->reward;
}

public function setReward(){
    $this->reward=10 ;
}

public function Play(){
    return ("La La La Lala Lalalalala La La Lala etc...");
}

public function Stop(){
    return ("stop");
}

public function Reward(){
    return ("<<");
}

public function Forward(){
    return (">>");
}

public function Eject(){
    return ("Eject");
}

}

?>