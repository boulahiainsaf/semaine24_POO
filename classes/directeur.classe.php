<?php
require "Employe.classe.php";
class Directeur extends Employe{
    private $_fonction="Derecteur";
    private $_salaire;

    public function calculerPrime(){
        $prime = ((0.07 * $this->_salaire) + ($this->getAnciennete() *  (0.03 * $this->_salaire)));
        $today = new datetime();
        if (($today->format('D') == 31) && ($today->format('M') == 11)) {
            echo "votre prime de " . $prime . "  a été envoyé à la banque .";
        }
        return $prime;
    }

}


?>