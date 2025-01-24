<?php
$servname = 'localhost';
$dbname = 'jour10';
$user = 'root';
$pass = '';



$pdo = new PDO("mysql:host=localhost;dbname=jour10;charset=utf8","root","");

$req = $pdo->prepare("SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE `sexe` = 'feminin'");
$req->execute();
$pdo = $req->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

<table>
    <thead>
        <tr>
            
            <th>Prénom</th>
            <th>Nom</th>
            <th>Naissance</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($pdo as $array){
echo "<tr>
<td> {$array['prenom']}</td>
<td> {$array['nom']}</td>
<td> {$array['naissance']}</td>
</tr>";
}
?>



    </tbody>
</table>
</body>
</html>