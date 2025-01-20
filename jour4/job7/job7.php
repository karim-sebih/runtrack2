
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison ASCII</title>
</head>
<body>
    <form method="post">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required>
        <br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required>
        <br>
        <button type="submit">Afficher la maison</button>
    </form>

    <?php
    if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
        // Récupérer les valeurs saisies
        $largeur = (int)$_POST['largeur'];
        $hauteur = (int)$_POST['hauteur'];

        // Vérification des valeurs minimales
        if ($largeur < 2 || $hauteur < 2) {
            echo "Largeur et hauteur doivent être supérieures ou égales à 2.";
            return;
        }

        echo "<pre>";

        // Dessiner le toit 
        for ($i = 0; $i < $largeur; $i++) {
            for ($j = 0; $j < $largeur * 2 - 1; $j++) {
                if ($i == 0 && $j == $largeur - 1) {
                    // Placer un seul `^` au sommet
                    echo "^";
                } elseif ($j == $largeur - 1 - $i) {
                    echo "/";
                } elseif ($j == $largeur - 1 + $i) {
                    echo "\\";
                } elseif ($j > $largeur - 1 - $i && $j < $largeur - 1 + $i) {
                    echo "_"; 
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }

        // Dessiner la base (rectangle)
        for ($i = 0; $i < $hauteur; $i++) {
            for ($j = 0; $j < $largeur * 2 - 1; $j++) {
                if ($j == 0 || $j == $largeur * 2 - 2) {
                    echo "|";
                } elseif ($i == $hauteur - 1) {
                    echo "_"; // Bas de la maison
                } else {
                    echo " "; // Espace intérieur
                }
            }
            echo "\n";
        }

        echo "</pre>";
    }
    ?>
</body>
</html>
