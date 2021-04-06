<?php

class Equipe {

    private $id;
    private $nom;
    private $logo;
    private $nbPoint;
    private $nbButPris;
    private $nbButInscrits;

    /**
     * Equipe constructor.
     * @param $id
     * @param $nom
     * @param $logo
     * @param $nbPoint
     * @param $nbButPris
     * @param $nbButInscrits
     */
    public function __construct($id = null, $nom, $logo, $nbPoint = null, $nbButPris = null, $nbButInscrits = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->logo = $logo;
        $this->nbPoint = $nbPoint;
        $this->nbButPris = $nbButPris;
        $this->nbButInscrits = $nbButInscrits;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getNbPoint()
    {
        return $this->nbPoint;
    }

    /**
     * @param mixed $nbPoint
     */
    public function setNbPoint($nbPoint)
    {
        $this->nbPoint = $nbPoint;
    }

    /**
     * @return mixed
     */
    public function getNbButPris()
    {
        return $this->nbButPris;
    }

    /**
     * @param mixed $nbButPris
     */
    public function setNbButPris($nbButPris)
    {
        $this->nbButPris = $nbButPris;
    }

    /**
     * @return mixed
     */
    public function getNbButInscrits()
    {
        return $this->nbButInscrits;
    }

    /**
     * @param mixed $nbButInscrits
     */
    public function setNbButInscrits($nbButInscrits)
    {
        $this->nbButInscrits = $nbButInscrits;
    }


}
