<?php
 if(isset($_GET)){
    if (isset($_GET["nom"]))

    var_dump(value: $_GET . "<br>") ;
    echo $_GET ["nom"] ;
    foreach($_GET as $key => $value){
        echo $key . ":" . $value ;
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
<form action="index.php" method ="get">
    <input type="text" name="nom">
    <input type="text" name="prenom">
    <input type="submit" value="submit">
</form>
</main>
</body>
</html>