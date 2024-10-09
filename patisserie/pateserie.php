<?php

class Patisserie{

    protected $poids;
    protected $note;
    protected $prix;

    public function __construct($poids, $note, $prix) {
        $this->poids = $poids;
        $this->note = $note;
        $this->prix = $prix;
    }

    public function presentation(){
        echo"<br>Poids :" .$this->poids;
        echo"<br>Note:" .$this->note;
        echo"<br>prix :" .$this->prix;
    }

    public function getPoids($poids){
        return $this->poids;
    }

    public function setPoids($poids){
        if ($poids > 0) {
            $this->poids = $poids;
        } else { 
            echo "Le poids doit etre positif";
        }
    }

    public function getNote($note){
        return $this->note;
    }

    public function setNote($note) {
        if ($note >= 0 && $note <=5) {
            $this->note = $note;
        } else { 
            echo "La note a brulé";
        }
    }

    public function getPrix($prix){
        return $this->prix;
    }

    public function setprix($prix) {
        if ($prix > 0) {
            $this->prix = $prix;
        } else {
            echo "Il y a pas de gateau qui pese moins de 0 kilos";
        }
    }

}

?>