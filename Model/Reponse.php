<?php
class Reponse {
    private $idReponse;
    private $text;
    private $idReclamation;

    function __construct($text, $idReclamation) {
        $this->text = $text;
        $this->idReclamation = $idReclamation;
    }

    function getIdReponse() {
        return $this->idReponse;
    }

    function setIdReponse($idReponse): void {
        $this->idReponse = $idReponse;
    }

    function getText() {
        return $this->text;
    }

    function setText($text): void {
        $this->text = $text;
    }

    function getIdReclamation() {
        return $this->idReclamation;
    }

    function setIdReclamation($idReclamation): void {
        $this->idReclamation = $idReclamation;
    }
}
?>
