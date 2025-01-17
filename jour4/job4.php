<?php
// Vérification s'il y a des arguments GET
if (!empty($_POST)) {
    // Début du tableau HTML
    echo "<table border='1'>";
    echo "<tr><th>Argument</th><th>Valeur</th></tr>";

    // Parcours de la superglobale $_GET pour afficher les arguments et valeurs
    foreach ($_POST as $key => $value) {
        if (isset($value)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>"; // Affichage de l'argument
            echo "<td>" . htmlspecialchars($value) . "</td>"; // Affichage de la valeur
            echo "</tr>";
        }
    }

    // Fin du tableau HTML
    echo "</table>";
} else {
    echo "Aucun argument  Post n'a été passé.";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test POST</title>
</head>
<body>

<form action="job4.php" method="Post">
    <label for="arg1">Argument 1:</label>
    <input type="text" id="arg1" name="arg1"><br><br>

    <label for="arg2">Argument 2:</label>
    <input type="text" id="arg2" name="arg2"><br><br>

    <label for="arg3">Argument 3:</label>
    <input type="text" id="arg3" name="arg3"><br><br>

    <input type="submit" value="Envoyer">
</form>

</body>
</html>
