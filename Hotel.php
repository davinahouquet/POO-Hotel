<?php

 class Hotel{
    private string $_adresse;
    private int $_nbChambres;
    private int $_nbChambresReservees;
    private int $_nbChambresDispo;
 
    public function __construct(string $adresse, int $nbChambres, int $_nbChambresReservees, int $_nbChambresDispo){
        $this->_adresse = $adresse;
        $this->_nbChambres = $nbChambres;
        $this->_nbChambresReservees = $_nbChambresReservees;
        $this->_nbChambresDispo = $_nbChambresDispo;
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
    public function setAdresse($adresse): self
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
    public function setNbChambres($nbChambres)
    {
        $this->_nbChambres = $nbChambres;

        return $this;
    }

    /**
     * Get the value of _nbChambresReservees
     */ 
    public function get_nbChambresReservees()
    {
        return $this->_nbChambresReservees;
    }

    /**
     * Set the value of _nbChambresReservees
     *
     * @return  self
     */ 
    public function set_nbChambresReservees($_nbChambresReservees)
    {
        $this->_nbChambresReservees = $_nbChambresReservees;

        return $this;
    }

    /**
     * Get the value of _nbChambresDispo
     */ 
    public function get_nbChambresDispo()
    {
        return $this->_nbChambresDispo;
    }

    /**
     * Set the value of _nbChambresDispo
     *
     * @return  self
     */ 
    public function set_nbChambresDispo($_nbChambresDispo)
    {
        $this->_nbChambresDispo = $_nbChambresDispo;

        return $this;
    }
}