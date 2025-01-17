<?php
// Vérification si le champ 'nombre' est défini
if (isset($_GET['nombre'])) {
    // Récupération de la valeur entrée
    $nombre = $_GET['nombre'];

    // Vérification si c'est un nombre entier sans utiliser de fonctions système supplémentaires
    if ($nombre == (int)$nombre) { // Conversion implicite et vérification
        // Vérification si le nombre est pair ou impair
        if ($nombre % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    } else {
        echo "Veuillez entrer un nombre valide.";
    }
} else {
    echo "Veuillez remplir le champ du formulaire.";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification Pair ou Impair</title>
</head>
<body>

<form action="job6.php" method="GET">
    <label for="nombre">Entrez un nombre :</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <input type="submit" value="Vérifier">
</form>

</body>
</html>
