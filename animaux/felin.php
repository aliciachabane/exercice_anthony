<?php
require_once("animaux.php");

class Felins extends Animaux {
    public function __construct($nom, $taille, $poids, $alimentation) {
        parent::__construct($nom, $taille, $poids, $alimentation);
    }

    public function chasser() {
        $this->poids += 5;
        return "{$this->nom} chasse!";
    }

    public function presentation() {
        $basePresentation = parent::presentation();
        return "{$basePresentation}, C'est un félin.";
    }
}

?>