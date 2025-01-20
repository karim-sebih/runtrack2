<?php

// Déclaration de la chaîne
$str = "Les choses que l'on Possède finissent par nous posséder.". "<br>";
echo $str;
// Détermination de la longueur de la chaîne 
$length = 0;
while (isset($str[$length])) {
    $length++;
}

// Parcourir la chaîne à l'envers
$reversedStr = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

// Affichage de la chaîne inversée
echo $reversedStr;

?>