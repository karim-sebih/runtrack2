<?php

function toLeetSpeak($str) {
    // Définition de la table de conversion
    $leetMap = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'O' => '0', 'o' => '0',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }

    // Conversion en leet speak
    $leetStr = '';
    for ($i = 0; $i < $length; $i++) {
        // Vérifier si le caractère existe dans la table de conversion
        if (isset($leetMap[$str[$i]])) {
            $leetStr .= $leetMap[$str[$i]]; // Remplacement par le caractère leet
        } else {
            $leetStr .= $str[$i]; // Conserver le caractère original
        }
    }

    return $leetStr;
}

// Exemple d'utilisation
$chaine = "abcdefghijklmnopqrstuvwxz";
$resultat = toLeetSpeak($chaine);
echo $resultat;

?>
