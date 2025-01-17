<?php
// Initialisation du compteur
$counter = 0;

// Parcours de la superglobale $_POST pour compter les arguments
foreach ($_POST as $key => $value) {
    // Vérification si l'argument existe (isset)
    if (isset($value)) {
        $counter++;
    }
}

// Affichage du nombre d'arguments $_POST
echo "Le nombre d'arguments POST est : " . $counter;
var_dump($counter )
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test POST</title>
</head>
<body>

<form action="job3.php" method="POST">
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
