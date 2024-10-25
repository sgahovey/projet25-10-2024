<?php
include 'bd.php';

// Récupérer tous les livres
$sql = "SELECT * FROM Livres";
$result = $db->query($sql);
?>

<head>
    <title>Gestion de Bibliothèque</title>
    <!-- Lien vers le CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers le JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
        <h1 class="text-center">Administration de la Bibliothèque</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="formAjout.php">Insérer un livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="formModif.php">Modifier un livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formSupp.php">Supprimer un livre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container mt-5">
        <h2>Liste des Livres</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Genre</th>
                    <th>Année</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['titre']); ?></td>
                    <td><?php echo htmlspecialchars($row['auteur']); ?></td>
                    <td><?php echo htmlspecialchars($row['genre']); ?></td>
                    <td><?php echo htmlspecialchars($row['annee']); ?></td>
                    <td><?php echo htmlspecialchars($row['statut']); ?></td>
                    <td>
                        <!-- Lien vers modifAdmin.php avec l'ID du livre -->
                        <a href="modifAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Modifier</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
