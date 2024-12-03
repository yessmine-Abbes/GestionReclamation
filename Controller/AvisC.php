<?php
include_once("../../config.php");
include("../../Model/Avis.php");

class AvisC {
    function ajouterAvis($avis) {
        $sql = "INSERT INTO avis (contenu, rate, date, idClient) 
                VALUES (:contenu, :rate, :date, :idClient)";
        $db = new config();
        $conn = $db->getConnexion();
        try {
            $query = $conn->prepare($sql);
            $query->execute([
                'contenu' => $avis->getContenu(),
                'rate' => $avis->getRate(),
                'date' => $avis->getDate(),
                'idClient' => $avis->getIdClient()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficherAvis() {
        $sql = "SELECT * FROM avis";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerAvis($idAvis) {
        $sql = "DELETE FROM avis WHERE idAvis = :idAvis";
        $conn = new config();
        $db = $conn->getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idAvis', $idAvis);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererAvis($idAvis) {
        $sql = "SELECT * FROM avis WHERE idAvis = :idAvis";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['idAvis' => $idAvis]);
            $avis = $query->fetch();
            return $avis;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
?>
