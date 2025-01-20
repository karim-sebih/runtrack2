<?php


$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


for ($i = 0; isset($str[$i]); $i += 2) {
    echo $str[$i];
}
//La boucle commence à l'index 0 (le premier caractère).

//La condition isset($str[$i]) vérifie que l'index $i correspond à un caractère existant dans la chaîne (évite les erreurs en cas d'accès hors des limites).

//L'incrémentation $i += 2 permet de sauter un caractère à chaque itération, parcourant ainsi un caractère sur deux.
?>