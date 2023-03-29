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
    public function getPrenom()
    {
        return $this->_prenom;
    }
    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;

        return $this;
    }
    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom(string $nom)
    {
        $this->_nom = $nom;

        return $this;
    }
    public function __toString()
    {
        return $this->getPrenom()." " .$this->getNom();
    }
}
?>