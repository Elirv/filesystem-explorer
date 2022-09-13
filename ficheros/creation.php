<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>What do you want to create?</h2>
 <form action="creation.php" method="post">
    <fieldset>
        <legend>Select:</legend>

        <div>
        <input type="radio" id="newFile" name="creation" value="File"
                checked>
        <label for="file">File</label>
        </div>

        <div>
        <input type="radio" id="newDirectory" name="creation" value="Directory">
        <label for="directory">Directory</label>
        </div>

    </fieldset>

    <?php

if ($_POST["value" !="File"]){
    include_once "crear-directorio.php";
} else{
    include_once "directorios.php";
}


?>
 </form>
</body>
</html>




