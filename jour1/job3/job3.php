<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tableau des Variables PHP</h1>
    <?php
    // Déclaration des variables
    $booleanVar = true;
    $integerVar = 42;
    $stringVar = "Bonjour";
    $floatVar = 3.14;

    // Création d'un tableau des variables
    $variables = [
        ["type" => "boolean", "nom" => "booleanVar", "valeur" => $booleanVar ? 'true' : 'false'],
        ["type" => "integer", "nom" => "integerVar", "valeur" => $integerVar],
        ["type" => "string", "nom" => "stringVar", "valeur" => $stringVar],
        ["type" => "float", "nom" => "floatVar", "valeur" => $floatVar],
    ];
    ?>

    <!-- Génération du tableau HTML -->
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $variable): ?>
                <tr>
                    <td><?= htmlspecialchars($variable["type"]) ?></td>
                    <td><?= htmlspecialchars($variable["nom"]) ?></td>
                    <td><?= htmlspecialchars($variable["valeur"]) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>