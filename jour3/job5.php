<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compter Voyelles et Consonnes</title>
</head>
<body>
    <?php
    $str = "On n est pas le meilleur quand on le croit mais quand on le sait";
 echo $str ;
    // Initialisation du dictionnaire
    $dic = [
        "voyelles" => 0,
        "consonnes" => 0,
    ];

    // Liste des voyelles
    $voyelles = "aeiouyAEIOUY";

    // Parcourir la chaîne
    $i = 0;
    while (isset($str[$i])) {
        $char = $str[$i];

        // Vérifier si c'est une lettre (ni espace, ni ponctuation)
        if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
            // Vérifier si le caractère est une voyelle
            $isVoyelle = false;
            $j = 0;
            while (isset($voyelles[$j])) {
                if ($char === $voyelles[$j]) {
                    $isVoyelle = true;
                    break;
                }
                $j++;
            }

            // Incrémenter le compteur approprié
            if ($isVoyelle) {
                $dic["voyelles"]++;
            } else {
                $dic["consonnes"]++;
            }
        }
        $i++;
    }
    ?>

    <!-- Affichage des résultats dans un tableau HTML -->
    <table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
