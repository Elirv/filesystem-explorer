<!DOCTYPE html>
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
            <form method="POST">
                    What do you want to create? <br>
                        <input type="radio" name="Creation" value="File" required> File<br>
                        <input type="radio" name="Creation" value="Directory" required>Directory<br>
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
            if ($_POST['Creation'] === "File") {
              
              include_once "crear-directorio.php";
            }
            else {
                include_once "directorios.php";
            }
            
?>
            </td>
        </tr>
    </table>
</body>
</html>
