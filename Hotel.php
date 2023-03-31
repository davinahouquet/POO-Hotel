<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_chambres;
    private array $_reservations;
    // private array $_chambre;

    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_chambres = [];
        $this->_reservations = [];
        // $this->_chambre = [];
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }
    public function getAdresse()
    {
        return $this->_adresse;
    }
    public function setAdresse(string $adresse): self
    {
        $this->_adresse = $adresse;

        return $this;
    }
    public function getNbChambres() : array
    {
        return $this->_chambres;
    }

    public function setNbChambres(array $chambres)
    {
        $this->_chambres = $chambres;

        return $this;
    }
    public function __toString()
    {
        return $this->_nom;
    }
    public function addChambre(Chambre $chambres)
    {
        $this->_chambres[] = $chambres;
    }
    //Méthode pour ajouter des réservations au tableau de réservations
    public function addReservations(Reservation $_reservations){
        $this->_reservations[] = $_reservations;
    }
    //Getter et setter de l'array reservationsHotel
    public function getReservations() : array{
        return $this->_reservations;
    }
    //Méthode pour afficher l'Hôtel
    public function afficherHotel()
    {
        $result = $this->getnom() . " " . $this->getadresse();
        return $result . "<br>";
    }

    //Méthode pour afficher le nombre de chambre dans l'hôtel
    public function afficherNbChambres()
    {
        $result = "Nombre de chambres :" . count($this->_chambres);

        return $result. "<br>";
    }

    //Méthode pour compter le nombre de chambres réservées
    public function afficherNbChambresReservees()
    {
        $result =  count($this->_reservations);
        return "Nombre de chambre(s) réservée(s) :" .$result."<br>";
    }

    //Méthode pour afficher le nombre de chambres dispos
    public function afficherNbChambresDispos()
    {
        $result = count($this->_chambres) - count($this->_reservations);
        return "Nombre de chambre(s) disponible(s):".$result."<br><br>";
    }
   //Méthode pour afficher les réservations d'un hôtel
   public function afficherReservations() : string {
    $result = "<br>Réservations de l'Hôtel ".$this->_nom." <br><br> ";
    if(empty($this->_reservations)){
        $result .= "Aucune réservation<br>";
       } else {
        echo count($this->_reservations)." réservations<br>";
        foreach ($this->_reservations as $reservation){
            $result .= $reservation->getClient()." - Chambre " .$reservation->getChambre()->getNumChambre()." - ".$reservation->getDateArrivee()." au ".$reservation->getDateDepart(). "<br><br>";
       }
    }
    return $result;
}

public function afficherStatut(){
    foreach($this->_chambres as $chambre){
        if($chambre->getIsReserved()){
        echo " La chambre " .$chambre->getNumChambre()." est déjà réservée.<br><br>";
    }   else {
        echo "La chambre " .$chambre->getNumChambre()." est disponible<br><br>";
}
}

}
public function etatChambres() {
    $result = $this->_nom." <br>";
    foreach($this->_chambres as $chambre) {
        $statut = ($chambre->getIsReserved()) ? " Réservée " : " Disponible ";
        $wifi = ($chambre->getWifi()) ? " oui " : "";
        $result .=  "Chambre ".$chambre->getNumChambre().$chambre->getPrix()."€ Wifi : ".$wifi." ".$statut."<br>";
    }
    return $result;
}
}
?>