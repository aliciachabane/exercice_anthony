<?php

require_once("pateserie.php"); 

class Religieuse extends Patisserie {
    protected $saveurPremierBoule;
    protected $saveurDeuxiemeBoule;
    protected $supplementChantille = false; 

    public function afficherReligieuse() {
        echo "<br>Crème: " . $this->saveurPremierBoule;
        echo "<br>Glacage: " . $this->saveurDeuxiemeBoule;
        echo "<br>Chantilly: " . ($this->supplementChantille ? "Oui" : "Non");
    }

    public function getModifierPremiereBoule($newBoule) {
        $this->saveurPremierBoule = $newBoule;
    }

    public function getModifierDeuxiemeBoule($newBoule2) {
        $this->saveurDeuxiemeBoule = $newBoule2;


 }

 public function getChantille() {
        return $this->supplementChantille;
    }

    public function setChantille() {
        
        if ($this->supplementChantille==false) {
            echo "Vous avez déjà un supplément de chantilly.";
        }else{
            echo"va si donne la chantilly";
        }

    }
}

?>
