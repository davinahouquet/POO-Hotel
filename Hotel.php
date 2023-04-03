<link rel="stylesheet" href="style.css">

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
        $result = "<h2>".$this->getnom() . "</h2> " . $this->getadresse();
        return $result. "<br>";
    }

    //Méthode pour afficher le nombre de chambre dans l'hôtel
    public function afficherNbChambres()
    {
        $result = "Nombre de chambres : " . count($this->_chambres);

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
    $result = "<br><h3>Réservations de l'Hôtel ".$this->_nom."</h3><br><br> ";
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
        echo " La chambre " .$chambre->getNumChambre()." est déjà réservée.<br>";
    }   else {
        echo "La chambre " .$chambre->getNumChambre()." est disponible<br>";
}
}

}
public function etatChambres() {
    $result = "<h3>Statuts des chambres de <strong>$this</strong></h3>";
    // https://getuikit.com/docs/table
    $result .= "<table class='uk-table uk-table-striped'>
                    <thead>
                        <tr>
                            <th>Chambre</th>
                            <th>Prix</th>
                            <th>Wifi</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>";
    foreach($this->_chambres as $chambre) {
        $statut = ($chambre->getIsReserved()) ? "<td width='100px' bgcolor='#ea5165';'>Réservée</style></td>" : "<td color='white' bgcolor='#c1ff69'>Disponible</td>";
        $wifi = ($chambre->getWifi()) ? " 📶 " : "";
        $result .=  "<tr>
                        <td>Chambre</th> ".$chambre->getNumChambre()."</td>
                        <td>".$chambre->getPrix()." €</td>
                        <td>  ".$wifi."</td>".$statut;
    }
    return $result."</tbody></table>";
}
}
?>