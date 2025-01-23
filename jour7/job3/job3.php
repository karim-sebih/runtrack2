<?php
// Démarrer la session pour pouvoir utiliser les variables de session
session_start();

// Si le formulaire est soumis, ajoutez le prénom à la session
if (isset($_POST['submit']) && !empty($_POST['prenom'])) {
    // Initialiser ou ajouter le prénom à la liste des prénoms
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = array();
    }
    $_SESSION['prenoms'][] = $_POST['prenom'];
}

// Si le bouton "reset" est cliqué, réinitialisez la session
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de prénoms</title>
</head>
<body>
    <h2>Ajouter un prénom</h2>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="POST">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
        <button type="submit" name="submit">Ajouter</button>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <h3>Liste des prénoms :</h3>
    <?php
    // Afficher la liste des prénoms
    if (isset($_SESSION['prenoms']) && !empty($_SESSION['prenoms'])) {
        echo "<ul>";
        foreach ($_SESSION['prenoms'] as $prenom) {
            echo "<li>" . htmlspecialchars($prenom) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Aucun prénom ajouté.</p>";
    }
    ?>
</body>
</html>
