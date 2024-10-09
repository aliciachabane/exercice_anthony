<?php
require_once("animaux.php");

class Lion extends Felins {
    public function __construct($nom, $taille, $poids, $alimentation) {
        parent::__construct($nom, $taille, $poids, $alimentation);
    }

    public function presentation() {
        $basePresentation = parent::presentation();
        return "{$basePresentation},";
    }
}

