<?php
include 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Récupérer l'ID du livre
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $genre = $_POST['genre'];
    $annee = $_POST['annee'];
    $statut = $_POST['statut'];

    // Préparer la requête de mise à jour
    $sql = "UPDATE Livres SET titre = :titre, auteur = :auteur, genre = :genre, annee = :annee, statut = :statut WHERE id = :id";
    $stmt = $db->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $stmt->bindParam(':genre', $genre, PDO::PARAM_STR);
    $stmt->bindParam(':annee', $annee, PDO::PARAM_INT);
    $stmt->bindParam(':statut', $statut, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécuter la mise à jour et rediriger
    if ($stmt->execute()) {
        echo "<script>alert('Livre modifié avec succès !'); window.location.href = 'formModif.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de la modification du livre'); window.location.href = 'modifAdmin.php?id=$id';</script>";
    }
}
?>
