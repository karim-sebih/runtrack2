<?php

// Déclaration de la chaîne
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

// Parcourir la chaîne avec une boucle
for ($i = 0; $i < strlen($str); $i += 2) {
    // Afficher le caractère à l'index courant
    echo $str[$i];
}

?>