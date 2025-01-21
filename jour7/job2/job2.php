<?php

setcookie('nbvisites', 1);
echo $_COOKIE['nbvisites'];


echo"<pre>";
var_dump($_COOKIE);
echo"</pre>";


if (!isset($_COOKIE["nbvisites"])){
    
    $_COOKIE["nbvisites"] =1 ;}
    else{
        $_COOKIE["nbvisites"]++;
    }


if(isset($_POST["reset"])){
    setcookie('resterco');
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
    <form action="job2.php" method="post">
        <input type="submit" value="reset"name="reset">

    </form>
</body>
</html>