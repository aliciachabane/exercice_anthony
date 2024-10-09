<?php

require_once("pateserie.php");

class Eclair extends Patisserie {
   protected $saveurCreme;
   protected $saveurGlacage;
   protected $longueur;

     public function __construct($saveurCreme, $saveurGlacage, $longueur) {
     $this->saveurCreme = $saveurCreme;
     $this->saveurGlacage = $saveurGlacage;
     $this->longueur = $longueur;
 } 
   
     public function getchangerGlacage($newGlacage){
      return $this->saveurCreme = $newGlacage;
   }

 
     public function getchangerCreme($newCreme){
      return $this->saveurGlacage = $newCreme;
  
   }
      
     public function affichage(){
        echo"<br>Creme:".$this->saveurCreme;
        echo"<br>Glacage:".$this->saveurGlacage;
        echo"<br>Longueur:".$this->longueur;
    }


}

?>