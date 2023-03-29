<?php

class Reservation
{
    private Client $_client;
    private Hotel $_hotel;
    private Chambre $_chambre;
    private DateTime $_dateArrivee;
    private DateTime $_dateDepart;
    // private float $_prix

//Créer un count array pour afficher le nb de réservation
// Créeer méthode qui calcule le prix total

    public function __construct(Client $client, Chambre $chambre, string $dateArrivee, string $dateDepart)
    {
        $this->_client = $client;
        $this->_hotel = $chambre->getHotel();
        $this->_chambre = $chambre;
        $this->_dateArrivee = new DateTime ($dateArrivee);
        $this->_dateDepart = new DateTime ($dateDepart);
        // $this->_hotel = $this->_chambre->addPrix($this);
        // $this->_chambre = [];
        // $this->_hotel = $this->_chambre->getHotel()
        //changer le status de la chambre à reservé
    }
    /**
     * Get the value of client
     */ 
    public function getClient()
    {
        return $this->_client;
    }

    /**
     * Set the value of client
     *
     * @return  self
     */ 
    public function setClient(Client $client)
    {
        $this->_client = $client;

        return $this;
    }

    /**
     * Get the value of chambre
     */ 
    public function getChambre()
    {
        return $this->_chambre;
    }
    /**
     * Set the value of chambre
     *
     * @return  self
     */ 
    public function setChambre(Chambre $chambre)
    {
        $this->_chambre = $chambre;

        return $this;
    }
    /**
     * Get the value of dateArrivee
     */ 
    public function getDateArrivee() : string
    {
        return "du " .$this->_dateArrivee->format("d-m-Y")." au ".$this->_dateDepart->format("d-m-Y");
    }

    /**
     * Set the value of dateArrivee
     *
     * @return  self
     */ 
    public function setDateArrivee(DateTime $dateArrivee)
    {
        $this->_dateArrivee = $dateArrivee;

        return $this;
    }

    /**
     * Get the value of dateDepart
     */
    public function getDateDepart()
    {
        return $this->_dateDepart->format("d-m-Y");
    }

    /**
     * Set the value of dateDepart
     */
    public function setDateDepart(DateTime $dateDepart): self
    {
        $this->_dateDepart = $dateDepart;

        return $this;
    }

    //Méthode Réservation d'un client
    // public function afficherReservationClient(array $chambre){
    //     $result = "Reservations de " .$this->_client."<br>"; 
    //     foreach($chambre as $chambres){
    //         echo count($chambres). "RESERVATIONS";
    //     }
    // }
    
    //Créer un count array pour afficher le nb de réservation =/= de la méthode pour compter le nombre de chambres réservées


    //Méthode qui calcule le prix total (prix de la chambre * nb de jours de réservation)
    // public function afficherprixTotal($duree){
    //     $result = $this->getChambre()->getPrix() * $duree;
    //     return "Total : " .$result. "€";
    // }

    public function afficherReservationHotel(){
        $result = $this->_client. " - Chambre".$this->getChambre(). " -" .$this->getDateArrivee(). "<br>";
        return $result;
    }
}
?>
