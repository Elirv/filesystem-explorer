<?php

$lista = null;
$directorio = opendir("archivos/");
while($elemento = readdir($directorio)){
    if ($elemento != '.' && $elemento != '..'){
    if (is_dir("archivos/" . $elemento)){
        $lista = $lista . "<li><a href='archivos/$elemento' target='_blank'</a>$elemento/</li>";
        // echo"hola";
    }else{
        $lista = $lista . "<li><a href='archivos/$elemento' target='_blank'</a>$elemento</li>";
        // echo"adios";
    }
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
    <h1>Listar archivos y carpetas de un directorio</h1>
    <h3>Listado de archivos y carpetas del directorio</h3>
    <ul><? echo $lista ?></ul>
</body>
</html>