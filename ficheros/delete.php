<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>What do you want to delete?</h2>

    <form action="delete.php" method="post">
    <fieldset>
        <legend>Select:</legend>

        <select name="delete" id="">
            <option value="File">File</option>
            <option value="Directory">Directory</option>
        </select>
        <input type="submit" name="deletetNew">

  

        </fieldset>
    </form>
    <?php
if(isset($_POST["deleteNew"])){
    if ($_POST["delete"] !="File"){
       
        header("Location: eliminarDirectorio.php");
    } else{
        header("Location: eliminarDirectorio.php");
    }
}



?>
 </form>
</body>
</html>




