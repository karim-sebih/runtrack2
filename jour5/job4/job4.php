<?php
function calcule($nombre1, $operation, $nombre2) {
    // Vérification du type d'opération
    if ($operation === "+") {
        return $nombre1 + $nombre2;
    } elseif ($operation === "-") {
        return $nombre1 - $nombre2;
    } elseif ($operation === "*") {
        return $nombre1 * $nombre2;
    } elseif ($operation === "/") {
       
        if ($nombre2 == 0) {
            return "Erreur : Division par zéro impossible.";
        }
        return $nombre1 / $nombre2;
    } elseif ($operation === "%") {
        
        if ($nombre2 == 0) {
            return "Erreur : Modulo par zéro impossible.";
        }
        return $nombre1 % $nombre2;
    } else {
        return "Erreur : Opération non reconnue.";
    }
}

// Exemple d'utilisation
echo calcule(10, "+", 5); // Affichera 15
echo "<br>";
echo calcule(10, "-", 5); // Affichera 5
echo "<br>";
echo calcule(10, "*", 5); // Affichera 50
echo "<br>";
echo calcule(10, "/", 5); // Affichera 2
echo "<br>";
echo calcule(10, "%", 3); // Affichera 1
echo "<br>";
echo calcule(10, "/", 0); // Affichera une erreur
?>
