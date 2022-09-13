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
 <!-- <form action="creation.php" method="post">
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
        <input type="submit" name="nameSubmit">

    </fieldset> -->
    <form action="creation.php" method="post">
    <fieldset>
        <legend>Select:</legend>

        <select name="creation" id="">
            <option value="File">File</option>
            <option value="Directory">Directory</option>
        </select>
        <input type="submit" name="submitNew">

  

        </fieldset>
    </form>
    <?php
if(isset($_POST["submitNew"])){
    if ($_POST["creation"] !="File"){
       
        header("Location: crear-directorio.php");
    } else{
        header("Location: crear-archivos.php");
    }
}



?>
 </form>
</body>
</html>




