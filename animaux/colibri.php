<?php
require_once("oiseaux.php");

class Colibri extends Oiseaux {
    public function __construct($nom, $taille, $poids, $alimentation) {
        parent::__construct($nom, $taille, $poids, $alimentation, true);
    
    }

    
    public function presentation() {
        $basePresentation = parent::presentation();
        return "{$basePresentation}, C'est un colibri.";
    }
}

?>