<?php
// Démarrage de la session (aucune fonction système interdite ici)
$cookie_name = "prenom"; // Nom du cookie à utiliser

// Gestion de la soumission du formulaire
if (isset($_POST['connexion']) && isset($_POST['prenom']) && $_POST['prenom'] !== '') {
    $prenom = htmlspecialchars($_POST['prenom']); // Sécurisation des données
    $_COOKIE[$cookie_name] = $prenom; // Simulation d'ajout du cookie
}

// Gestion de la déconnexion
if (isset($_POST['deco'])) {
    unset($_COOKIE[$cookie_name]); // Simulation de suppression du cookie
}

// Affichage dynamique
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <?php if (!isset($_COOKIE[$cookie_name])): ?>
        <!-- Formulaire de connexion -->
        <form method="post" action="">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php else: ?>
        <!-- Message de bienvenue et déconnexion -->
        <p>Bonjour <?= htmlspecialchars($_COOKIE[$cookie_name]); ?> !</p>
        <form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?php endif; ?>
</body>
</html>
