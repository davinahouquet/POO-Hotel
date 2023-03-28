<?php

class Reservation
{
    private Client $_client;
    private Hotel $_hotel;
    private Chambre $_chambre;
    private DateTime $_dateArrivee;
    private DateTime $_dateDepart;

//Créer un count array pour afficher le nb de réservation
// Créeer méthode qui calcule le prix total

    public function __construct(Client $client, Chambre $chambre, DateTime $dateArrivee, DateTime $dateDepart)
    {
        $this->_client = $client;
        $this->_hotel = $this->_chambre->getHotel();
        $this->_chambre = $chambre;
        $this->_dateArrivee = $dateArrivee;
        $this->_dateDepart = $dateDepart;
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
    public function getDateArrivee()
    {
        return $this->_dateArrivee;
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
        return $this->_dateDepart;
    }

    /**
     * Set the value of dateDepart
     */
    public function setDateDepart(DateTime $dateDepart): self
    {
        $this->_dateDepart = $dateDepart;

        return $this;
    }
}
