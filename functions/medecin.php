<?php
require_once("../config/config.php");
global $con;
if (isset($_POST["editMedecin"])) {
    extract($_POST);
    if (!empty($nom_prenom) && !empty($adresse) && !empty($structure) && !empty($email) && !empty($telephone)) {
        try {
            $stmt = $con->prepare("UPDATE medecin SET nom_prenom=?, adresse=?, structure=?, email=?, telephone=? WHERE id_med=?");
            $res = $stmt->execute([$nom_prenom, $adresse, $structure, $email, $telephone, $id_med]);

            var_dump([$nom_prenom, $adresse, $structure, $email, $telephone, $id_med]);
            if ($res) {
                header('Location: ../index.php');
                exit();
            } else {
                // La mise à jour a échoué
                echo "Échec de la mise à jour.";
            }
        } catch (\Throwable $th) {
            // Une erreur est survenue lors de l'exécution de la requête
            echo "Erreur : " . $th->getMessage();
        }
    } else {
        // Certains champs sont vides
        echo "Veuillez remplir tous les champs.";
    }
} else if (isset($_GET['delete_nurse'])) {
    extract($_GET);
    try {
        $stmt = $con->prepare("DELETE FROM medecin  WHERE id_med=?");
        $res = $stmt->execute([$delete_nurse]);

        if ($res) {
            header('Location: ../index.php');
            exit();
        } else {
            // La mise à jour a échoué
            echo "Échec de la mise à jour.";
        }
    } catch (\Throwable $th) {
        // Une erreur est survenue lors de l'exécution de la requête
        echo "Erreur : " . $th->getMessage();
    }
} else if (isset($_POST['addMedecin'])) {
    extract($_POST);
    if (!empty($nom_prenom) && !empty($adresse) && !empty($structure) && !empty($email) && !empty($telephone)) {
        try {
            $stmt = $con->prepare("INSERT INTO medecin (structure,nom_prenom,adresse,telephone,email,date_1ere_rdv, statut, remarque) VALUE (?,?,?,?,?,?,?,?)");
            $res = $stmt->execute([$structure, $nom_prenom, $adresse, $telephone, $email, $date, $statut, $remarque]);

            if ($res) {
                var_dump([$nom_prenom, $adresse, $structure, $email, $telephone, $statut, $remarque, $date]);
                header('Location: ../index.php');
                exit();
            } else {
                // La mise à jour a échoué
                echo "Échec de la mise à jour.";
            }
        } catch (PDOException $e) {
            // Une erreur est survenue lors de l'exécution de la requête
            var_dump($e->getMessage());
        }
    } else {
        // Certains champs sont vides
        echo "Veuillez remplir tous les champs.";
    }
}
