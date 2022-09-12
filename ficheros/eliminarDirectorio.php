<?php
function Eliminar($ruta){
    foreach(glob($ruta . "/*") as $elemento){
        if (is_dir($elemento)){
            Eliminar($elemento);
        } else{
            unlink($elemento);

        }
    }
    rmdir($ruta);

}

$msg = null;

if(isset($_POST["eliminar"])){
    $ruta = htmlspecialchars($_POST["ruta"]);
    if(is_dir($ruta)){
        Eliminar($ruta);
        $msg = "Congratulations! The directory been deleted";
    }else{
        $msg = "The directory not exits";
    }
}
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
    <strong <?php echo $msg ?>></strong>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label>Ruta del directorio</label>
        <input type="text"  name="ruta">
        <input type="hidden" name="eliminar">
        <input type="submit" value="Delete">

    </form>
</body>
</html>