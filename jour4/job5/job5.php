<?php
// Vérification si le formulaire a été soumis
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Récupération des données du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Comparaison des données (sans fonctions système supplémentaires)
    if ($username =="John" && $password =="Rambo") {
        echo "c’est pas ma guerre";
    } else {
        echo "votre pire cauchemar";
    }
} else {
    echo "Veuillez remplir le formulaire.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>

<form action="job5.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Se connecter">
</form>

</body>
</html>