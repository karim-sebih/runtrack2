<?php
session_start();

$_SESSION["nbvisites"] = 1;


echo"<pre>";
var_dump(value:$_SESSION);
echo"</pre>";
if (!isset($_SESSION["nbvisitses"])){
    
    $_SESSION["nbvisites"] =1 ;}
    else{
        $_SESSION["nbvisistes"]++;
    }
if(isset($_POSt["reset"])){
    session_destroy();
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
    <form action="job1.php" method="post">
        <input type="submit" value="reset"name="reset">

    </form>
</body>
</html>