<?php
class Lecteurk7{

private $play;
private $stop;
private $forward;
private $reward;
private $eject;
private $k7;


// public function getPlay(){
//     return $this->play;
// }

// public function setPlay(){
//     $this->play=$play ;
// }

// public function getStop(){
//     return $this->stop;
// }

// public function setStop(){
//     $this->stop=$stop ;
// }

public function getForward(){
    return $this->forward;
}

public function setForward(){
    $this->forward=10 ;
}

public function getK7(){
    return $this->k7;
}

public function setK7(){
    $this->k7=$k7 ;
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