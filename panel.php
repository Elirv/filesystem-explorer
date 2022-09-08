<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>OK</h4>
<?php
if(isset($_SESSION["user"])){
    echo "Correct";#aqui esta bien
}else{
    header("location: 02.index.php");#no tiene permiso
}

?>
<!-- cerrar sesión -->
<br>
<a href="05.close_session.php">Sign off</a>
</body>
</html>