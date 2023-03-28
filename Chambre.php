<?php

class Chambre{
    private int $_numChambre;
    private int $_nbLit;
    private float $_prix;
    private bool $_wifi;
    private bool $_statut;
    private Hotel $_hotel;
//pour les booléen, if true = afficher (ex logo wifi) si false = ne rien afficher
    public function __construct(int $numChambre, int $nbLit, float $prix, bool $wifi, Hotel $hotel){
        $this->_numChambre = $numChambre;
        $this->_nbLit = $nbLit;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_statut = true;
        $this->_hotel = $hotel;
    }
    /**
     * Get the value of numChambre
     */ 
    public function getNumChambre()
    {
        return $this->_numChambre;
    }

    /**
     * Set the value of numChambre
     *
     * @return  self
     */ 
    public function setNumChambre(int $numChambre)
    {
        $this->_numChambre = $numChambre;

        return $this;
    }
    /**
     * Get the value of nbLit
     */ 
    public function getNbLit()
    {
        return $this->_nbLit;
    }

    /**
     * Set the value of nbLit
     *
     * @return  self
     */ 
    public function setNbLit(int $nbLit)
    {
        $this->_nbLit = $nbLit;

        return $this;
    }
    /**
     * Get the value of prix
     */
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * Set the value of prix
     */
    public function setPrix(int $prix): self
    {
        $this->_prix = $prix;

        return $this;
    }
    /**
     * Get the value of wifi
     */
    public function getWifi()
    {
        return $this->_wifi;
    }

    /**
     * Set the value of wifi
     */
    public function setWifi(string $wifi): self
    {
        $this->_wifi = $wifi;

        return $this;
    }
    /**
     * Get the value of statut
     */ 
    public function getStatut()
    {
        return $this->_statut;
    }
    /**
     * Set the value of statut
     *
     * @return  self
     */ 
    public function setStatut(string $statut)
    {
        $this->_statut = $statut;

        return $this;
    }
    /**
     * Get the value of hotel
     */
    public function getHotel()
    {
        return $this->_hotel;
    }

    /**
     * Set the value of hotel
     */
    public function setHotel(Hotel$hotel): self
    {
        $this->_hotel = $hotel;

        return $this;
    }

    public function afficherChambre($wifi){
        $result = $this->getnumChambre(). " " .$this->getnbLit()." " .$this->getprix(). "€";
        if($wifi == true){
            $result .= "📶<br>";
        } else {
            $result .= " ";
        }
    }
    //pour les booléen, if true = afficher (ex logo wifi) si false = ne rien afficher
    
    //Méthode pour afficher le statut
    public function afficherStatut(bool $statut){
        if($statut == true){
            echo $statut = "Disponible";
        } else {
            echo $statut = "Reservée";
        }
}
}
?>