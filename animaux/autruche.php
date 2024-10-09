<?php


require_once("animaux.php");

class Autruche extends Oiseaux {
   
    public function __construct($nom, $taille, $poids, $alimentation) {
        parent::__construct($nom, $taille, $poids, $alimentation, false);
    }

    public function presentation() {
        $basePresentation = parent::presentation();
        return "{$basePresentation}, C'est une autruche.";
    }
}


?>