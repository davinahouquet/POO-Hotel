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
    public function getPrenom()
    {
        return $this->_prenom;
    }
 
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
 
    public function getNom()
    {
        return $this->_nom;
    }
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

    //Méthode pour afficher les réservations d'un client
    public function reservationsClient(){
        $result = "<h3>Réservations de " .$this. "</h3><br>";
        echo count($this->_reservations);
        foreach($this->_reservations as $reservation){
           $result .= "$reservation réservations<br>";
        }
        return $result;
    }

    public function afficherPrixTotal(){
    $total = 0;
    foreach($this->_reservations as $resa) {
        $total += $resa->getNbJours() * $resa->getChambre()->getPrix();
    }
    return "Total : $total €<br/>";
}
}
?>