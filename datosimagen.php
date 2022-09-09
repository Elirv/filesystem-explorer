<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datosimagen.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td>
            <label for="imagen">Imagen</label>
        </td>
        <td><input type="file" name="imagen" size="20">
        </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><input type="submit" value="Enviar Imagen"></td>
        </tr>
    </table>

    </form>
</body>
</html>



<?php

#recibimos los datos de la imagen

#rescatar la informacion de la $_FILES

$nombre_imagen = $_FILES["imagen"]["name"];
$tipo_imagen = $_FILES["imagen"]["type"];
$tamaño_imagen = $_FILES["imagen"]["size"];

#dónde le indicamos, dónde queremos guardar la imagen

#ruta de la carpeta destino:
$carpeta_destino =$_SERVER['DOCUMENT_ROOT'] . '/htdocs/server_variables/';
#primero se guarda en una carpeta temporal, pasarla de ahi a la nuestra:
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);

?>