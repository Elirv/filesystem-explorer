<?php
$msg = null;
if(isset($_POST["directorio"])){
    $carpeta = htmlspecialchars($_POST["carpeta"]);
    $ruta = htmlspecialchars($_POST["ruta"]);
    $directorio = $ruta.$carpeta;

    if(!is_dir($directorio)){
        $crear = mkdir($directorio, 0777, true);
        if($crear){
            $msg = "The directory has been created";
        }else{
            $msg = "Something is wrong";
        }
    }else{
        $msg = "The directory exits";
    }
}
copy("creardirectorios.php");


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
    <h3>Crear directorios</h3>
    <strong><?php echo $msg ?></strong>
    <form method="post" action="<?php echo $_SERVER["PHP"]?>">
        <table>
            <tr>
                <td>Directorio/s: </td>
                <td><input type="text" name="carpeta"></td>
            </tr>
            <tr>
                <td>Guarda en la ruta: </td>
                <td><input type="text" name="ruta"></td>
            </tr>
            <input type="hidden" name="directorio">
            <input type="submit" value="Crear">
        </table>
    </form>
</body>
</html>