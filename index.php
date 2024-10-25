<?php
require "bd.php";
?>
<!DOCTYPE html>
<html lang="fr">
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
                            <a class="nav-link" href="formAjout.php">Insérer un livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formModif.php">Modifier un livre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formSupp.php">Supprimer un livre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div
        class="table-responsive"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Année</th>
                    <th scope="col">Statut</th>

                </tr>
            </thead>
            <tbody>
<?php
$sql = "SELECT * FROM Livres";
  $result = $db->query($sql);

        while ($row = $result->fetch()) {
            echo "<tr>";
            echo "<td scope='row'>" . htmlspecialchars($row['titre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['auteur']) . "</td>";
            echo "<td>" . htmlspecialchars($row['genre']) . "</td>";
            echo "<td>" . htmlspecialchars($row['annee']) . "</td>";
            echo "<td>" . htmlspecialchars($row['statut']) . "</td>";
            echo "</tr>";
        }
?>
            </tbody>
        </table>
    </div>
    

</body>
</html>
