<?php

require_once("animaux.php");

class Oiseaux extends Animaux {
    protected $peuxVoler;
    protected $estEnVol;

    public function __construct($nom, $taille, $poids, $alimentation, $peuxVoler) {
        parent::__construct($nom, $taille, $poids, $alimentation);
        $this->peuxVoler = $peuxVoler;
        $this->estEnVol = false;
    }

    public function presentation() {
        $basePresentation = parent::presentation();
        $peutVolerStr = $this->peuxVoler ? "Oui" : "Non";
        $enVolStr = $this->estEnVol ? "Oui" : "Non";
        return "{$basePresentation}, Peut voler: {$peutVolerStr}, En vol: {$enVolStr}";
    }

    public function envoler() {
        if ($this->peuxVoler) {
            $this->estEnVol = true;
            return "{$this->nom} s'envole.";
        }
        return "{$this->nom} ne peut pas voler.";
    }
      
    public function atterir() {
        if ($this->peuxVoler && $this->estEnVol) {
            $this->estEnVol = false;
            return "{$this->nom} atterrit.";
        }
        return "{$this->nom} ne peut pas atterrir.";
}

}
?>