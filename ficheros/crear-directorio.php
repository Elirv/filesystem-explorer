<?php
$msg = null;

if(isset($_POST["directorio"])){
    $carpeta = htmlspecialchars($_POST["carpeta"]);
    // $ruta = htmlspecialchars($_POST["ruta"]);
    $ruta = 'root/userFolders/';
    $directorio = $ruta . $carpeta;

    if(!is_dir($directorio)){

        $crear = mkdir($directorio, 0777, true);

        if($crear){
            $msg = "El directorio se ha creado";
        }else{
            $msg = "Ha ocurrido un error";
        }

    }else{
        $msg = "El directorio ya existe";
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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/838d940042.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- <h3>Crear directorios con PHP</h3> -->
    <p><?php echo $msg ?></p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <table>
        <tr>
            <td>Directorio/s:</td>
            <td><input type="text" name="carpeta"></td>
        </tr>
        <tr>
            <td>Guardar en la ruta:</td>
            <td><input type="text" name="ruta"></td>
        </tr>
        <input type="hidden" name="directorio">
        <input type="submit" value="Crear">
    </table>

    </form>
    
</body>
</html>