<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table stlye="width:100%">
        <tr>
            <td style="width:50%">
            <form method="GET">
                    Tool Diameter: <br>
                        <input type="checkbox" name="Diameter" value=.25 checked> .25<br>
                        <input type="checkbox" name="Diameter" value=.375 checked> 3/8<br>
                        <input type="checkbox" name="Diameter" value=.5 checked> 1/2<br><br>



<br><button>Filter</button><br>
                </form>
            </td>
            <td style="width:50%">
                <style type="text/css">
                    td
                    {
                    padding:0 50px 0 50px;
                    }
                </style>
<?php
            //while (true){     
            if ($_GET['Diameter'] == .375) {
              echo 'test = true';
            }
            else {
              echo "false";
            }
?>
            </td>
        </tr>
    </table>
</body>
</html> -->
<!-- <?php
$dir = "ficheros/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
?> -->
<?php
$dir = "ficheros/archivos/";
 
// Abre un directorio conocido, y procede a leer el contenido
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "nombre archivo: $file : tipo archivo: " . filetype($dir . $file) . "\n";
        }
        closedir($dh);
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
    <h1>hola</h1>
    <p><?php echo scandir($dir,1)?></p>
</body>
</html>