<?php
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $genre = $_POST['genre'];
    $annee = $_POST['annee'];
    $statut = $_POST['statut'];

    $sql = "INSERT INTO Livres (titre, auteur, genre, annee, statut) VALUES (:titre, :auteur, :genre, :annee, :statut)";
    
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindParam(':annee', $annee, PDO::PARAM_INT);
    $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "<script>alert('Livre ajouté avec succès !');
        window.location.href = 'formAjout.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l\'ajout du livre');
        header('Location: formAjout.php');
        </script>";
    }
}

?>