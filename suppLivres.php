<?php
include 'bd.php';

// Vérifier si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer le livre via l'ID
    $sql = "DELETE FROM Livres WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécuter la requête de suppression
    if ($stmt->execute()) {
        echo "<script>alert('Livre supprimé avec succès !');window.location.href = 'formSupp.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de la suppression du livre');window.location.href = 'formSupp.php';</script>";
    }
}
?>


