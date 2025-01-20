<?php

// Déclaration de la chaîne
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Calculer la longueur de la chaîne s
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Initialisation de la nouvelle chaîne
$newStr = "";

// Parcourir la chaîne pour effectuer les décalages
for ($i = 0; $i < $length; $i++) {
    if (isset($str[$i + 1])) {
        // Remplacer le caractère actuel par le suivant
        $newStr .= $str[$i + 1];
    } else {
        // Remplacer le dernier caractère par le premier
        $newStr .= $str[0];
    }
}

// Afficher la chaîne transformée
echo $newStr;

?>