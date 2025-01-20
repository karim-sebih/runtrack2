<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
</head>
<body>
    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>
        <br>
        <label for="transformation">Transformation :</label>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br>
        <button type="submit">Transformer</button>
    </form>

    <?php
    // Fonction pour appliquer la transformation "gras"
    function gras($str) {
        $result = '';
        $word = '';
        $length = 0;

        while (isset($str[$length])) {
            $length++;
        }

      
        for ($i = 0; $i <= $length; $i++) {
            // Ajouter les mots aux résultats
            if ($i == $length || $str[$i] == ' ') {
                if (isset($word[0]) && $word[0] >= 'A' && $word[0] <= 'Z') {
                    $result .= '<b>' . $word . '</b>';
                } else {
                    $result .= $word;
                }
                if ($i < $length) {
                    $result .= ' ';
                }
                $word = '';
            } else {
                $word .= $str[$i];
            }
        }
        return $result;
    }

    // Fonction pour appliquer le chiffrement César
    function cesar($str, $decalage = 2) {
        $result = '';
        $length = 0;


        while (isset($str[$length])) {
            $length++;
        }

        // Appliquer le décalage à chaque caractère
        for ($i = 0; $i < $length; $i++) {
            $char = $str[$i];
            if (($char >= 'a' && $char <= 'z') || ($char >= 'A' && $char <= 'Z')) {
                $isUpper = $char >= 'A' && $char <= 'Z';
                $asciiOffset = $isUpper ? 65 : 97;
                $newChar = chr((ord($char) - $asciiOffset + $decalage) % 26 + $asciiOffset);
                $result .= $newChar;
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    // Fonction pour appliquer la transformation "plateforme"
    function plateforme($str) {
        $result = '';
        $word = '';
        $length = 0;

        
        while (isset($str[$length])) {
            $length++;
        }

  
        for ($i = 0; $i <= $length; $i++) {
            // Ajouter les mots transformés aux résultats
            if ($i == $length || $str[$i] == ' ') {
                $wordLength = 0;

                // Calculer la longueur du mot
                while (isset($word[$wordLength])) {
                    $wordLength++;
                }

                if ($wordLength > 1 && isset($word[$wordLength - 2]) && isset($word[$wordLength - 1]) && $word[$wordLength - 2] == 'm' && $word[$wordLength - 1] == 'e') {
                    $result .= $word . '_';
                } else {
                    $result .= $word;
                }
                if ($i < $length) {
                    $result .= ' ';
                }
                $word = '';
            } else {
                $word .= $str[$i];
            }
        }
        return $result;
    }

    // Traitement du formulaire
    if (isset($_POST['str']) && isset($_POST['transformation'])) {
        $str = $_POST['str'];
        $transformation = $_POST['transformation'];
        $result = '';

        // Appliquer la transformation sélectionnée
        if ($transformation == 'gras') {
            $result = gras($str);
        } elseif ($transformation == 'cesar') {
            $result = cesar($str);
        } elseif ($transformation == 'plateforme') {
            $result = plateforme($str);
        }


        echo "<p>Résultat :</p>";
        echo "<p>$result</p>";
    }
    ?>
</body>
</html>
