<?php
class Avis {
    private $idAvis;
    private $contenu;
    private $rate;
    private $date;
    private $idClient;

    function __construct($contenu, $rate, $date, $idClient) {
        $this->contenu = $contenu;
        $this->rate = $rate;
        $this->date = $date;
        $this->idClient = $idClient;
    }

    function getIdAvis() {
        return $this->idAvis;
    }

    function setIdAvis($idAvis): void {
        $this->idAvis = $idAvis;
    }

    function getContenu() {
        return $this->contenu;
    }

    function setContenu($contenu): void {
        $this->contenu = $contenu;
    }

    function getRate() {
        return $this->rate;
    }

    function setRate($rate): void {
        $this->rate = $rate;
    }

    function getDate() {
        return $this->date;
    }

    function setDate($date): void {
        $this->date = $date;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function setIdClient($idClient): void {
        $this->idClient = $idClient;
    }
}
?>
