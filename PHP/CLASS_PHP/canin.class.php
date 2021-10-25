<?php

class Canin extends Animal{

public function balade(){

    return "Class : ".__CLASS__." : Je me promene !";

}

}

class Loup extends Canin{

public function faitBruit(){

    return "Class : ".__CLASS__." : HAAAAAouuuuuuuuuuu !!!";

}

public function mange(){

    return "Class : ".__CLASS__." : Je mange de la viande";

}

}

class Chien extends Canin{

    public function faitBruit(){
    
        return "Class : ".__CLASS__." : Whouuuuufffff !!";
    
    }
    
    public function mange(){
    
        return "Class : ".__CLASS__." : Je mange de la patée";
    
    }
    
    }

?>