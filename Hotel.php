<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_nbChambres;
    private array $_reservations;


    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_nbChambres = [];
        $this->_reservations = [];
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
        return $this->_nbChambres;
    }

    public function setNbChambres(array $nbChambres)
    {
        $this->_nbChambres = $nbChambres;

        return $this;
    }
    public function __toString()
    {
        return $this->getnom();
    }
    public function addChambre(Chambre $nbChambres)
    {
        $this->_nbChambres[] = $nbChambres;
    }
    //Méthode pour ajouter des réservations au tableau de réservations
    public function addReservations(Reservation $_reservations){
        $this->_reservations[] = $_reservations;
    }
    //Getter et setter de l'array reservationsHotel
    public function getReservations() : array{
        return $this->_reservations;
    }
    public function setReservations(Reservation $reservations){
        array_push($this->_reservations, $reservations);
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
        $result = "Nombre de chambre(s) :" . count($this->_nbChambres);

        return $result. "<br>";
    }

    //Méthode pour compter le nombre de chambres réservées
    public function afficherNbChambresReservees()
    {
        $result =  count($this->_reservations);
        return "Nombre de chambres réservées :" .$result."<br>";
    }

    //Méthode pour afficher le nombre de chambres dispos
    public function afficherNbChambresDispos()
    {
        $result = count($this->_nbChambres) - count($this->_reservations);
        return "Nombre de chambres disponibles:".$result."<br><br>";
    }
   //Méthode pour afficher les réservations d'un hôtel
   public function afficherReservations() : string {
    $result = "Réservations de l'Hôtel ".$this->getNom()." <br> ";
    if(empty($reservationsHotel)){
        $result .= "Aucune réservation<br>";
       } else {
        echo count($this->_reservations)." réservations<br>";
        foreach ($this->_reservations as $reservation){
            $result .= $reservation->getClient()." - Chambre " .$reservation->getChambre()->getNumChambre()." - du".$reservation->getDateArrivee()->format("d-m-Y")." au ".$reservation->getDateDepart()->format("d-m-Y"). "<br>";
       }
    }
    return $result;
}
}
?>