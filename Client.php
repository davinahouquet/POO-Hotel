<?php

class Client{
    private string $_prenom;
    private string $_nom;
    private array $_reservations;

    public function __construct(string $prenom, string $nom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_reservations = [];
    }

    /**
     * Get the value of nom
     */ 
    public function getPrenom()
    {
        return $this->_prenom;
    }
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }
    public function getReservations() : array {
        return $this->_reservations;
    }
    public function setReservations(array $reservations){
        $this->_reservations = $reservations;
    }
    public function __toString()
    {
        return $this->_prenom." " .$this->_nom;
    }
    public function addReservations(Reservation $reservations) {
        $this->_reservations[] = $reservations;
    }

}
?>