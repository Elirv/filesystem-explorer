<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="nuevoIntento.php" method="post">
    Tratamiento
        <input type="radio" name="trato" value="h" /> Sr.
        <input type="radio" name="trato" value="m“ /> Sra. <br />
        Su Apellido:
        <input type="text" name="apellido" />
        <input type="submit" value="Enviar" />
    </form>


</body>
</html>

<?php
if ($trato=="h") {
echo "Hola Señor $apellido";}
else {
echo "Hola Señora $apellido";}
?>

