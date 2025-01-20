<?php

// Déclaration de la chaîne
$str = "I'm sorry Dave I'm afraid I can't do that";

// Tableau contenant les voyelles (minuscule et majuscule)
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

// Parcourir la chaîne
for ($i = 0; isset($str[$i]); $i++) {
    // Compare chaque caractère avec le tableau des voyelles
    foreach ($voyelles as $voyelle) {
        if ($str[$i] == $voyelle) {
            // Afficher le caractère s'il est une voyelle
            echo $str[$i];
            break; // Pas besoin de continuer à vérifier une fois la voyelle trouvée
        }
    }
}

?>
