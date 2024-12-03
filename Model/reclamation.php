<?php
class Reclamation {
    private $idReclamation;
    private $description;
    private $idClient;
    private $etat;
    private $date;
    private $subject;


    function __construct($description, $idClient, $etat, $date , $subject) {
        $this->description = $description;
        $this->idClient = $idClient;
        $this->etat = $etat;
        $this->date = $date;
        $this->subject = $subject;
    }

    function getIdReclamation() {
        return $this->idReclamation;
    }

    function setIdReclamation($idReclamation): void {
        $this->idReclamation = $idReclamation;
    }


    
    function getSubject() {
        return $this->subject;
    }

    function setSubject($subject): void {
        $this->subject = $subject;
    }


    function getDescription() {
        return $this->description;
    }

    function setDescription($description): void {
        $this->description = $description;
    }

    function getIdClient() {
        return $this->idClient;
    }

    function setIdClient($idClient): void {
        $this->idClient = $idClient;
    }

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat): void {
        $this->etat = $etat;
    }

    function getDate() {
        return $this->date;
    }

    function setDate($date): void {
        $this->date = $date;
    }
}
?>
