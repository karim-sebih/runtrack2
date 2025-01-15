<?php

$str = "Dans l'espace, personne ne vous entend crier";


// Compteur pour le nombre de caractères
$compteur = 0;

// Parcourir la chaîne
for ($i = 0; isset($str[$i]); $i++) {
    $compteur++;
}

// Afficher le résultat
echo "Le nombre de caractères dans la chaîne est : $compteur";

?>