<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

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
            <div id="liveAlertPlaceholder"></div>
            
        <div class="toShow">
            </li>
            <li>
                <a href="./imagen.php">MyPhotos</a>
            </li>
            <li>
                <a href="./subirAudios.php">MyMusic</a>
            </li>
            <li>
                <a href="./videos.php">MyVideos</a>
            </li>
            <li>
                <a href="./eliminarDirectorio.php/"><img src="../assets/img/trash_can_29441.png"></a>
            </li>
        </ul>
    </aside>
    
    <aside class="right">
        <ul>
            <li>
                <a href="">x</a>
            </li>
            <li>
                <a href="">y</a>
            </li>
            <li>
                <a href="">z</a>
            </li>
            <li>
                <a href="">d</a>
            </li>
        </ul>
    </aside>
    <div class="content">
        <h1>
            Admin Panel
        </h1>
        <h2>What do you want to create?</h2>
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
    </div>
</body>
</html>
