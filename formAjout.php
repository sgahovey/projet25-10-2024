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
                            <a class="nav-link active" href="formAjout.php">Insérer un livre</a>
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

        <!-- Section pour Insérer un livre -->
        <section id="inserer" class="mt-5">
            <h2>Insérer un livre</h2>
            <form action="ajoutLivres.php" method="post">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="titre" name="titre" required>
                </div>
                <div class="mb-3">
                    <label for="auteur" class="form-label">Auteur</label>
                    <input type="text" class="form-control" id="auteur" name="auteur" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" required>
                </div>
                <div class="mb-3">
                    <label for="annee" class="form-label">Année</label>
                    <input type="number" class="form-control" id="annee" name="annee" required>
                </div>
                <div class="mb-3">
                    <label for="statut" class="form-label">Statut</label>
                    <select class="form-select" id="statut" name="statut">
                        <option value="Disponible">Disponible</option>
                        <option value="Emprunté">Emprunté</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter le livre</button>
            </form>
        </section>
    </div>
</body>
</html>
