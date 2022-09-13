<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear y escribir ficheroscon php</h1>
    <strong> <? echo $msg ?> </strong>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <table>
        <tr>
            <td>Nombre del archivo</td>
            <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
            <td>Extensión del archivo:</td>
            <td>
                <select name="extension">
                    <option value=".txt">.txt</option>
                    <option value=".html">.html</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Contenido del archivo:</td>
            <td><textarea name="contenido" cols="30" rows="10"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="escribir">
    <input type="submit" value="Crear archivo">
    </form>
</body>
</html>


<?php

$msg = null;

if(isset($_POST["escribir"])){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $extension = htmlspecialchars($_POST["extension"]);
    $contenido = $_POST["contenido"];

    $ruta = "archivos/" . $nombre . $extension;
    $manejador = fopen($ruta, 'w');
    if(fwrite($manejador, $contenido)){
        $msg = "Enhorabuena archivo creado con éxito";
        $msg = "Puedes verlo en ...<a href='$ruta' target='_blank'>$ruta</a>";
        
    }else{
        $msg = "Ha ocurrido un error al crear el fichero";
    }

    fclose($manejador);
}

?>