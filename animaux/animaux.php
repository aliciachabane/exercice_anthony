<?php

class Animaux {
    protected $nom;
    protected $taille;
    protected $poids;
    protected $alimentation; // carnivore, herbivore, omnivore

    public function __construct($nom, $taille, $poids, $alimentation) {
        $this->nom = $nom;
        $this->taille = $taille;
        $this->poids = $poids;
        $this->alimentation = $alimentation; // Validation à faire si besoin
    }

    public function presentation() {
        return "Nom: {$this->nom}, Taille: {$this->taille}, Poids: {$this->poids}, Alimentation: {$this->alimentation}";
    }
}

?>