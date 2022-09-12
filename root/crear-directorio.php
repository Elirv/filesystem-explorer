<?php
$msg = null;

if(isset($_POST["directorio"])){
    $carpeta = htmlspecialchars($_POST["carpeta"]);
    $ruta = htmlspecialchars($_POST["ruta"]);
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


// session_start();
// //Receive image data
// $archivo = $_FILES['fileToUpload'] ['tmp_name'];
// $nombre = $_FILES['fileToUpload'] ['name'];
// $tipo = $_FILES['fileToUpload'] ['type'];
// $tamano = $_FILES['fileToUpload'] ['size'];

// $destino = "root/" . $nombre;

// $subido = move_uploaded_file($archivo, $destino);

// if($subido){
//     echo "subido exitosamente <br/>";
//     echo "<img src='root/" . $nombre ."'>";
// }else{
//     echo "no subido";
// }

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
    <h3>Crear directorios con PHP</h3>
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
        <!-- <a href="close_session.php">Sign off</a>
    <input type="search">
    <!-- <p>Welcome <?php echo "$myUser"; ?> </p> -->
    <!-- <p>Welcome</p> -->

    <!-- <form class="" action="datosImg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload Image" name="submit"> --> -->
    </form>




    
</body>
</html>










<?php



?>

