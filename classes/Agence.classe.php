<?php
class Agence
{
    private $_nom_ag;
    private $_adresse_ag;
    private $_codePostal_ag;
    private $_Ville_ag;
    private $_restau_ag;

    // Mutateur : définit/modifie la valeur passée en argument à l'attribut
    public function setNom($sNom)
    {
        return $this->_nom_ag = $sNom;
    }


    public function setAdresse($sAdresse)
    {
        return $this->_adresse_ag = $sAdresse;
    }

    public function setcodepostal($sCodePostal)
    {
        return $this->_codePostal_ag = $sCodePostal;
    }

    public function setVille($sVille)
    {
        return $this->_Ville_ag = $sVille;
    }
    public function setRestau($sVille)
    {
        return $this->_restau_ag = $sVille;
    }


    // Accesseur : renvoie la valeur d'un attribut

    public function getNom()
    {
        return $this->_nom_ag;
    }

    public function getAdresse()
    {
        return $this->_adresse_ag;
    }

    public function getCodePostal()
    {
        return $this->_codePostal_ag;
    }

    public function getVille()
    {
        return $this->_Ville_ag;
    }
    public function getResteau()
    {
        return $this->_restau_ag ;
    }
    public function ticketrestau (){
        if ($this->_restau_ag = true){
            echo "Restauration sur site";
        }
        else
        {
            echo "Tickets restaurants";
        }
    }
}
?>




