<?php
include_once("../../config.php");
include("../../Model/Reponse.php");

class ReponseC {
    function ajouterReponse($reponse) {
        $sql = "INSERT INTO reponse (text, id_reclamation) 
                VALUES (:text, :id_reclamation)";
        $db = new config();
        $conn = $db->getConnexion();
        try {
            $query = $conn->prepare($sql);
            $query->execute([
                'text' => $reponse->getText(),
                'id_reclamation' => $reponse->getIdReclamation()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficherReponsesParReclamation($idReclamation) {
        $sql = "SELECT * FROM reponse WHERE id_reclamation = :id_reclamation";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_reclamation' => $idReclamation]);
            $reponses = $query->fetchAll();
            return $reponses;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

	function getResponseByReclamationId($idReclamation) {
        $sql = "SELECT * FROM reponse WHERE id_reclamation = :id_reclamation LIMIT 1"; 
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['id_reclamation' => $idReclamation]);
            $response = $query->fetch(PDO::FETCH_ASSOC); 
            return $response;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
?>
