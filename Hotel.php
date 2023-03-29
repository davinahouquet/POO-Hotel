<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private array $_nbChambres;
    private array $_reservationsHotel;


    public function __construct(string $nom, string $adresse)
    {
        $this->_nom = $nom;
        $this->_adresse = $adresse;
        $this->_nbChambres = [];
        $this->_reservationsHotel = [];
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom(string $nom)
    {
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
    public function __toString()
    {
        return $this->getnom();
    }
    public function addChambre(Chambre $nbChambres)
    {
        $this->_nbChambres[] = $nbChambres;
    }
    public function addReservationsHotel(Reservation $_reservationsHotel){
        return $this->_reservationsHotel;
    }
    //Getter et setter de l'array reservationsHotel
    public function getReservationsHotel() : array{
        return $this->_reservationsHotel;
    }
    public function setReservationsHotel(Reservation $reservationsHotel){
        array_push($this->_reservationsHotel, $reservationsHotel);
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

    //Méthode pour compter le nombre de chambres réservées + retourner le nombre de chambres disponibles
    public function afficherNbChambresReservees()
    {
        $result =  count($this->_reservationsHotel);
        return "Nombre de chambres réservées :" .$result."<br>";
    }

    //Méthode pour afficher le nombre de chambres dispos
    public function afficherNbChambresDispos()
    {
        $result = count($this->_nbChambres) - count($this->_reservationsHotel);
        return "Nombre de chambres disponibles:".$result."<br><br>";
    }
   //Méthode pour afficher les réservations d'un hôtel
   public function afficherReservationsHotel() : string {
    $result = "Réservations de l'Hôtel ".$this->getNom()." <br> ";
    if(empty($reservationsHotel)){
        $result .= "Aucune réservation<br>";
       } else {
        echo count($this->_reservationsHotel)." réservations<br>";
        foreach ($this->_reservationsHotel as $reservation){
        $result .= $reservation->getClient()." - Chambre " .$reservation->getChambre()->getNumChambre()." - du".$reservation->getDateArrivee()->format("d-m-Y")." au ".$reservation->getDateDepart()->format("d-m-Y"). "<br>";
       }
    }
    return $result;
}
}
?>