<?php
include 'bd.php';

// Vérifier si un ID de livre est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations du livre via son ID
    $sql = "SELECT * FROM Livres WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $livre = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si le livre n'existe pas, afficher un message d'erreur
    if (!$livre) {
        echo "<script>alert('Livre introuvable'); window.location.href = 'formModif.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Aucun livre sélectionné'); window.location.href = 'formModif.php';</script>";
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier le livre : <?php echo htmlspecialchars($livre['titre']); ?></h2>
        <form action="modifLivres.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $livre['id']; ?>">
            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" 
                value="<?php echo htmlspecialchars($livre['titre']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="auteur" class="form-label">Auteur</label>
                <input type="text" class="form-control" id="auteur" name="auteur" 
                value="<?php echo htmlspecialchars($livre['auteur']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" 
                value="<?php echo htmlspecialchars($livre['genre']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="annee" class="form-label">Année</label>
                <input type="number" class="form-control" id="annee" name="annee" 
                value="<?php echo htmlspecialchars($livre['annee']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut</label>
                <select class="form-select" id="statut" name="statut" required>
                    <option value="Disponible" <?php echo ($livre['statut'] == 'Disponible') ? 'selected' : ''; ?>>Disponible</option>
                    <option value="Emprunté" <?php echo ($livre['statut'] == 'Emprunté') ? 'selected' : ''; ?>>Emprunté</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
</body>
</html>
