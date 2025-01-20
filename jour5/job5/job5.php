<?php
function occurrences($str, $char) {
    $count = 0; // Compteur d'occurrences
    $index = 0; // Index pour parcourir la chaîne

    
    while (isset($str[$index])) {
        // Comparer le caractère actuel avec $char
        if ($str[$index] === $char) {
            $count++;
        }
        
        $index++;
    }

    
    return $count;
}


$str = "Bonjour";
$char = "o";
echo "Le nombre d'occurrences de '$char' dans '$str' est : " . occurrences($str, $char);
?>
