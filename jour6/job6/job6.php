<?php
// Gestion du style sélectionné
$selectedStyle = 'style1.css'; // Style par défaut
if (isset($_POST['style'])) {
    $selectedStyle = $_POST['style'] . '.css';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer de style</title>
    <!-- Inclusion du style sélectionné -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($selectedStyle); ?>">
</head>
<body>
    <form method="post">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php if ($selectedStyle == 'style1.css') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if ($selectedStyle == 'style2.css') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if ($selectedStyle == 'style3.css') echo 'selected'; ?>>Style 3</option>
        </select>
        <br><br>
        <button type="submit">Appliquer le style</button>
    </form>
</body>
</html>

