<?php

$str = "I'm sorry Dave I'm afraid I can't do that".

$voyelles = "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    // Vérifier si le caractère courant est une voyelle
    if (strpos($voyelles, $str[$i]) !== false) {  //vérifie si le caractère actuel $str[$i] est présent dans la liste $voyelles.
       //i le résultat n'est pas false, alors c'est une voyelle, et le caractère est affiché.
        echo $str[$i] ;
    }
}

?>