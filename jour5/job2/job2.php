<?php
function bonjour($jour) {
    // Vérification de la valeur du paramètre $jour
    if ($jour == true) {
        echo "Bonjour". "<br>";
    } elseif ($jour == false) {
        echo "Bonsoir";
    } 
}

bonjour(true);  
bonjour(false); 
?>
