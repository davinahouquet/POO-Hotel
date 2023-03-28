<?php

class Client{
    private string $_prenom;
    private string $_nom;

    public function __construct(string $prenom, string $nom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
    }

    /**
     * Get the value of nom
     */ 
    public function getprenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->_nom = $nom;

        return $this;
    }
}
?>