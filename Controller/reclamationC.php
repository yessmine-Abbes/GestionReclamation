<?php
include_once("../../config.php");
include("../../Model/Reclamation.php");

class ReclamationC {
    function ajouterReclamation($reclamation) {
        $sql = "INSERT INTO reclamations (description, idClient, etat, date , subject) 
                VALUES (:description, :idClient, :etat, :date , :subject)";
        $db = new config();
        $conn = $db->getConnexion();
        try {
            $query = $conn->prepare($sql);
            $query->execute([
                'description' => $reclamation->getDescription(),
                'idClient' => $reclamation->getIdClient(),
                'etat' => $reclamation->getEtat(),
                'date' => $reclamation->getDate(),
                'subject' => $reclamation->getSubject()

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function afficherReclamations() {
        $sql = "SELECT * FROM reclamations";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function supprimerReclamation($idReclamation) {
        // First, delete all responses related to the reclamation
        $sqlResponses = "DELETE FROM reponse WHERE id_reclamation = :id_reclamation";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            // Delete all responses
            $query = $db->prepare($sqlResponses);
            $query->execute(['id_reclamation' => $idReclamation]);
    
            // Now, delete the reclamation itself
            $sqlReclamation = "DELETE FROM reclamations WHERE idReclamation = :idReclamation";
            $queryReclamation = $db->prepare($sqlReclamation);
            $queryReclamation->execute(['idReclamation' => $idReclamation]);
            
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    

    function recupererReclamation($idReclamation) {
        $sql = "SELECT * FROM reclamations WHERE idReclamation = :idReclamation";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(['idReclamation' => $idReclamation]);
            $reclamation = $query->fetch();
            return $reclamation;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function updateReclamation($reclamation, $idReclamation)
    {
        try {
            $conn = new Config();
            $db = $conn->getConnexion();
            $query = $db->prepare(
                "UPDATE reclamations SET 
                    subject = :subject,
                    description = :description,
                    date = :date,
                    etat = :etat
                 WHERE idReclamation = :idReclamation"
            );
            $query->execute([
                'subject' => $reclamation->getSubject(),
                'description' => $reclamation->getDescription(),
                'date' => $reclamation->getDate(),
                'etat' => $reclamation->getEtat(),
                'idReclamation' => $idReclamation
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function updateReclamationStatus($idReclamation) {
        $sql = "UPDATE reclamations SET etat = :etat WHERE idReclamation = :idReclamation";
        $conn = new config();
        $db = $conn->getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'etat' => 'Answered',
                'idReclamation' => $idReclamation
            ]);
            echo "Reclamation status updated to 'Answered' successfully.";
        } catch (PDOException $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }
    


    function getReclamationStats() {
        $stats = [];
        $conn = new config();
        $db = $conn->getConnexion();
        
        try {
            // Total number of reclamations
            $sqlTotal = "SELECT COUNT(*) as total FROM reclamations";
            $queryTotal = $db->query($sqlTotal);
            $stats['totalReclamations'] = $queryTotal->fetch()['total'];
    
            // Number of pending reclamations
            $sqlPending = "SELECT COUNT(*) as pending FROM reclamations WHERE etat = 'Pending'";
            $queryPending = $db->query($sqlPending);
            $stats['pendingReclamations'] = $queryPending->fetch()['pending'];
    
            // Number of answered reclamations
            $sqlAnswered = "SELECT COUNT(*) as answered FROM reclamations WHERE etat = 'Answered'";
            $queryAnswered = $db->query($sqlAnswered);
            $stats['answeredReclamations'] = $queryAnswered->fetch()['answered'];
    
            // Total number of responses
            $sqlResponses = "SELECT COUNT(*) as totalResponses FROM reponse";
            $queryResponses = $db->query($sqlResponses);
            $stats['totalResponses'] = $queryResponses->fetch()['totalResponses'];
    
            // Number of reclamations this week
            $sqlThisWeek = "SELECT COUNT(*) as thisWeek FROM reclamations 
                            WHERE WEEK(date) = WEEK(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())";
            $queryThisWeek = $db->query($sqlThisWeek);
            $stats['thisWeekReclamations'] = $queryThisWeek->fetch()['thisWeek'];
    
            // Number of reclamations last week
            $sqlLastWeek = "SELECT COUNT(*) as lastWeek FROM reclamations 
                            WHERE WEEK(date) = WEEK(CURRENT_DATE()) - 1 AND YEAR(date) = YEAR(CURRENT_DATE())";
            $queryLastWeek = $db->query($sqlLastWeek);
            $stats['lastWeekReclamations'] = $queryLastWeek->fetch()['lastWeek'];
            
        } catch (PDOException $e) {
            die('Erreur: ' . $e->getMessage());
        }
    
        return $stats;
    }
    
}
?>
