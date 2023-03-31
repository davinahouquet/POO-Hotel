<?php

class Reservation
{
    private Client $_client;
    private Hotel $_hotel;
    private Chambre $_chambre;
    private DateTime $_dateArrivee;
    private DateTime $_dateDepart;
    // private float $_prix

    public function __construct(Client $client, Chambre $chambre, string $dateArrivee, string $dateDepart)
    {
        $this->_client = $client;
        $this->_chambre = $chambre;
        $chambre->addReservations($this);
        $this->_dateArrivee = new DateTime ($dateArrivee);
        $this->_dateDepart = new DateTime ($dateDepart);
        $hotel = $chambre->getHotel();
        $hotel->addReservations($this);
        $client->addReservations($this);
        // $chambre->setIsReserved(true);
    }

    public function getClient() : Client
    {
        return $this->_client;
    }

    public function setClient(Client $client)
    {
        $this->_client = $client;

        return $this;
    }
    public function getChambre() : Chambre
    {
        return $this->_chambre;
    }
    public function setChambre(Chambre $chambre)
    {
        $this->_chambre = $chambre;

        return $this;
    }
    public function getDateArrivee() : string
    {
        return "du " .$this->_dateArrivee->format("d-m-Y")." au ".$this->_dateDepart->format("d-m-Y");
    }
    public function setDateArrivee(DateTime $dateArrivee)
    {
        $this->_dateArrivee = $dateArrivee;

        return $this;
    }

    public function getDateDepart()
    {
        return $this->_dateDepart->format("d-m-Y");
    }
    public function setDateDepart(DateTime $dateDepart): self
    {
        $this->_dateDepart = $dateDepart;

        return $this;
    }

    public function __toString()
    {
        return $this->_chambre->getHotel().$this->_chambre. $this->_dateArrivee->format("d-m-Y")." au ".$this->_dateDepart->format("d-m-Y");  ;
    }
    

    
    public function afficherStatut(){

        if($this->_chambre->getIsReserved()){
            $this->_chambre->setIsReserved(true);
            echo " La chambre " .$this->getChambre()->getNumChambre()." est réservé par ".$this->_client." du ".$this->_dateArrivee." au ".$this->_dateDepart ."<br>";
    } else {
        echo "La chambre " .$this->getChambre()->getNumChambre()." est disponible !<br>";
            $this->_chambre->setIsReserved(false);
    }
    }

    //Méthode qui calcule le prix total (prix de la chambre * nb de jours de réservation)
    // public function afficherprixTotal($duree){
    //     $result = $this->getChambre()->getPrix() * $duree;
    //     return "Total : " .$result. "€";
    // }

}
?>
