<?php

 class Hotel{
    private string $_nom;
    private string $_adresse;
    private array $_nbChambres;

 
    public function __construct(string $nom, string $adresse){
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_nbChambres = [];
        //Créer une méthode pour compter le nb de chambres reservees et dispos
    }
    public function getNom(){
        return $this->_nom;
    }
    public function setNom(string $nom){
        $this->_nom = $nom;
    }
    /**Getter et setter classe Hôtel :
     * Get the value of adresse
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * Set the value of adresse
     */
    public function setAdresse(string $adresse): self
    {
        $this->_adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of nbChambres
     */ 
    public function getNbChambres()
    {
        return $this->_nbChambres;
    }

    /**
     * Set the value of nbChambres
     *
     * @return  self
     */ 
    public function setNbChambres(array $nbChambres)
    {
        $this->_nbChambres = $nbChambres;

        return $this;
    }
    //Méthode pour compter le nombre de chambres réservées
    public function afficherNbChambresReservees($nbChambres, $nbChambresReservees){
        $result = $nbChambres - $nbChambresReservees;
        return $result;
    }

    //Méthode pour compter le nombre de chambres disponibles
    public function afficherNbChambre (){
        $result = count($this->getNbChambres());
        return $result;
    }
 
}