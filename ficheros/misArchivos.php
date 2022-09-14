<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="misArchivos.php" method='post' enctype="multipart/form-data">
<input type="file" name="fileTxt"/><br><br>
<input type="submit" value="Upload"/>
</form>


</body>
</html>

<?php 

$name= $_FILES['fileTxt']['name'];
$tmp_name= $_FILES['fileTxt']['tmp_name'];
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name)) {
    $path= 'root/userFolder/';
    if (empty($name)){
        echo "Please choose a file";
    }else if (!empty($name)){
        if (($fileextension !== "txt") && ($fileextension !== "pdf") && ($fileextension !== "doc")&& ($fileextension !== "docx")){
        echo "The file extension is not valid";
    }else if (($fileextension == "txt") || ($fileextension == "pdf") || ($fileextension == "doc")|| ($fileextension == "docx")){
        if (move_uploaded_file($tmp_name, $path.$name)) {
        echo 'Uploaded!';
        }
    }   
    }
}


?>