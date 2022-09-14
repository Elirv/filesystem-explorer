<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/838d940042.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header"> 
        <img class="logoPanel" src="../assets/img/cloudSimpsons.png" alt="" width="60" height="60">
        
        <div class="logout">
            <a href="close_session.php" class="btn btn-primary">Logout</a>
        </div>

        
        <form class="buscador" action="index.html" method="post"> 
          <input class="search" id="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 700; height:30px" type="text" name="" value="" placeholder="&#xf002;">
        </form>
      </div>
   
        
    </header>

    <aside>
        
        
        <ul>
            <li>
                <a class="btn btn-light" href="./creation.php" role="button">NEW+</a>
            </li>
            <li>
                 <a href="../imagen.php">MyPhotos</a> <!--no consigo entrar -->
            </li>
            <li>
                <a href="./subirAudios.php">MyMusic</a>
            </li>
            <li>
                <a href="./videos.php">MyVideos</a>
            </li>
            <li>
                <a href="./ficheros/eliminarDirectorio.php/"><img src="../assets/img/trash_can_29441.png"></a>
            </li>
        </ul>
    </aside>
    
    <aside class="right">
        <ul>
        <?php $thefolder = "../ficheros/root/music/";
        if ($handler = opendir($thefolder)) {
	echo "<ol>";
    while (false !== ($file = readdir($handler))) {
            echo "<li>$file</li>";
    }
    echo "</ol>";
    closedir($handler);
}
?>
        </ul>
    </aside>

    <div class="content">
        <h1>
            Admin Panel
        </h1>

        <div class="toShow">
        <form action="subirAudios.php" method='post' enctype="multipart/form-data">
<input type="file" name="filemp3"/><br><br>
<input type="submit" value="Upload"/>
</form>
        </div>

</body>
</html>

<?php 

$name= $_FILES['filemp3']['name'];
$tmp_name= $_FILES['filemp3']['tmp_name'];
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);


if (isset($name)) {
    $path= 'root/music/';
    if (empty($name)){
        echo "Please choose a file";
    }else if (!empty($name)){
        if (($fileextension !== "mp3") && ($fileextension !== "ogg") && ($fileextension !== "webm")){
        echo "The file extension must be .mp3, .ogg, or .webm in order to be uploaded";
    }else if (($fileextension == "mp3") || ($fileextension == "ogg") || ($fileextension == "webm")){
        if (move_uploaded_file($tmp_name, $path.$name)) {
        echo 'Uploaded!';
        }
    }   
    }
}


?>
<?php
session_start();
?>
