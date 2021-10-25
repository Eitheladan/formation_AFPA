<?php

require_once("animal.class.php");

class Felin extends Animal{

    public function balade(){

        return "Class : ".__CLASS__." : je me balade";
    }

}

class Lion extends Felin{

    public function faitBruit(){

        return "Class : ".__CLASS__." : <br><img src='".$this->image."'> <br>Je suis un ".$this->nom." et je fais Rooooooaaaaaarrr !!";

    }

    public function mange(){
        
        return "Class : ".__CLASS__." : Je mange de la viande !!";

    }
}

class Tigre extends Felin{

        public function faitBruit(){
    
            return "Class : ".__CLASS__." : Je suis un ".$this->nom." et je fais Grrrrrr !!";
    
        }

        public function mange(){

            return "Class : ".__CLASS__." : Hmmmmmm charal !!";
    
        }

}


class Chat extends Felin{

    public function faitBruit(){

        return "Je suis un ".$this->nom." et je fais Miaou !! !!";

    }

    public function mange(){

        return "Je mange des croquettes";

    }

}

?>