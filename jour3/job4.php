<?php

// Déclaration de la chaîne
$str = "Dans l'espace, personne ne vous entend crier";

// Initialisation du compteur
$compteur = 0;

// Parcourir la chaîne caractère par caractère
while (isset($str[$compteur])) {
    $compteur++;
}

// Affichage du résultat
echo "Le nombre de caractères dans la chaîne est : $compteur";

?>
