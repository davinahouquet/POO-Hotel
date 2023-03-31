<?php

class Chambre{
    private int $_numChambre;
    private int $_nbLit;
    private float $_prix;
    private bool $_wifi;
    private bool $_statut;
    private Hotel $_hotel;
    private array $_reservations;
    private bool $_isReserved;
//pour les booléen, if true = afficher (ex logo wifi) si false = ne rien afficher
    public function __construct(int $numChambre, int $nbLit, float $prix, bool $wifi, Hotel $hotel){
        $this->_numChambre = $numChambre;
        $this->_nbLit = $nbLit;
        $this->_prix = $prix;
        $this->_wifi = $wifi;
        $this->_statut = true;
        $this->_hotel = $hotel;
        $hotel->addChambre($this);
        // $chambre->addReservations();
        $this->_reservations =[];
        $this->_isReserved = false;
    }
    
    public function getNumChambre()
    {
        return $this->_numChambre;
    }

    public function setNumChambre(int $numChambre)
    {
        $this->_numChambre = $numChambre;

        return $this;
    }
 
    public function getNbLit()
    {
        return $this->_nbLit;
    }

    public function setNbLit(int $nbLit)
    {
        $this->_nbLit = $nbLit;

        return $this;
    }
    
    public function getPrix()
    {
        return $this->_prix;
    }

    public function setPrix(int $prix): self
    {
        $this->_prix = $prix;

        return $this;
    }
    
    public function getWifi()
    {
        return $this->_wifi;
    }

    public function setWifi(string $wifi): self
    {
        $this->_wifi = $wifi;

        return $this;
    }
   
    public function getStatut()
    {
        return $this->_statut;
    }
    
    public function setStatut(string $statut)
    {
        $this->_statut = $statut;

        return $this;
    }
   
    public function getHotel()
    {
        return $this->_hotel;
    }

    public function setHotel(Hotel $hotel): self
    {
        $this->_hotel = $hotel;

        return $this;
    }
    public function getIsReserved() : bool {
        return $this->_isReserved;
    }

    public function setIsReserved(bool $reserved){
        $this->_isReserved = $reserved;
    }
    
    public function addReservations(Reservation $_reservations){
        $this->_reservations[] = $_reservations;
    }

    public function __toString()
{
    $wifi = ($this->_wifi)? "oui" : "non";
    return $this->_numChambre." (".$this->_nbLit." lits - ".$this->_prix." € - Wifi : $wifi)";
}

}
?>