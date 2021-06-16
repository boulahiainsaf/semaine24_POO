<?PHP
require "Agence.classe.php";
class Employe extends  Agence
{
    private $_nom;
   private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_nom_ag;
    private  $_enfant_0_10;
    private  $_enfant_11_15;
    private $_enfant_16_18;


    public function setNom($sNom)
    {
        $this->_nom = $sNom;
    }

    public function setPrenom($sPrenom)
    {
        $this->_prenom = $sPrenom;
    }

    public function setDateEmbauche($sDatEmbauche)
    {

        $this->_dateEmbauche = DateTime::createFromFormat('d/m/Y', $sDatEmbauche);
    }

    public function setFonction($sFonction)
    {
        $this->_fonction = $sFonction;

    }

    public function setSalaire($sSalaire)
    {
        $this->_salaire = $sSalaire;

    }

    public function setService($sService)
    {
        $this->_service = $sService;

    }

    public function setEnfant_0($sEnfant_0_10)
    {
        $this->_enfant_0_10 = $sEnfant_0_10;

    }


    public function setEnfant_11($sEnfant_11_15)
    {
        $this->_enfant_11_15 = $sEnfant_11_15;

    }

    public function setEnfant_16($sEnfant_16_18)
    {
        $this->_enfant_16_18 = $sEnfant_16_18;

    }
// Accesseur : renvoie la valeur d'un attribut

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function getFonction()
    {
        return $this->_fonction;

    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function getEnfant_0()
    {
        return $this->_enfant_0_10;
    }
    public function getEnfant_11()
    {
        return $this->_enfant_11_15;
    }
    public function getEnfant_16()
    {
        return $this->_enfant_16_18;
    }
//Méthode pour savoir combien d'année un salarié est dans l'entreprise


    public function getAnciennete()
    {
        $todaye = new datetime();
        $dat_embauche = $this->getDateEmbauche();
        $year = $todaye->format('Y') - $dat_embauche->format('Y');
        return ($year);


    }

    public function calculerPrime()
    {
        $prime = (0.05 * $this->_salaire) + ( ($this->getAnciennete()) *( 0.02 *($this->_salaire)));
        $today = new datetime();
        if (($today->format('D') == 31) && ($today->format('M') == 11)) {
            echo "votre prime de " . $prime . "  a été envoyé à la banque .";

        }
        return $prime;
    }
    public function  chequevacance(){
        if ($this->getAnciennete()>1){
            if ($this->_enfant_0_10 = true){
                $cheque1=$this->_enfant_0_10*20;
                $nbrcheque1=$this->_enfant_0_10;
            }
            if($this->_enfant_11_15 =true){
                $cheque2=$this->_enfant_11_15*30;
                $nbrcheque2=$this->_enfant_11_15;
            }
            if ($this->_enfant_16_18=true){
                $cheque3=$this->_enfant_16_18*50;
                $nbrcheque3=$this->_enfant_16_18;
            }
            $nbrcheque=$nbrcheque1+$nbrcheque2+$nbrcheque3;
            $cheque=$cheque1+$cheque2+$cheque3;
            echo "Vous avez le droit de :".$nbrcheque." cheque(s).";
            echo "Le montant totale des cheques vaccances est :".$cheque." EURO";
        }else {
            $cheque=0;
            echo "Vous n'avez pas le droit d'avoir des cheque vacance ";
        }

        return $cheque;
        return $nbrcheque;

    }



}

?>