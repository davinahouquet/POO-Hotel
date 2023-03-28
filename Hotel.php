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
        $result =  count($this->_reservations);
        return "Nombre de chambres réservées :" .$result."<br>";
    }

    //Méthode pour afficher le nombre de chambres dispos
    public function afficherNbChambresDispos()
    {
        $result = count($this->_nbChambres) - count($this->_reservations);
        return "Nombre de chambres disponibles:".$result."<br><br>";
    }
}
