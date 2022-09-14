<?php
function Eliminar($ruta){
    foreach(glob($ruta . "/*") as $elemento){
        if (is_dir($elemento)){
            Eliminar($elemento);
        } else{
            unlink($elemento);

        }
    }
    rmdir($ruta);

}

$msg = null;

if(isset($_POST["eliminar"])){
    $ruta = htmlspecialchars($_POST["ruta"]);
    if(is_dir($ruta)){
        Eliminar($ruta);
        $msg = "Congratulations! The directory been deleted";
    }else{
        $msg = "The directory not exits";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong <?php echo $msg ?>></strong>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
        <label>What do you want to delete?</label>
        <input type="text"  name="ruta">
        <input type="hidden" name="eliminar">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html> -->

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
        <img class="logoPanel" src="./assets/img/cloudSimpsons.png" alt="" width="60" height="60">
        
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
                <a class="btn btn-light" href="ficheros/creation.php" role="button">NEW+</a>
            </li>
            <li>
            <div id="liveAlertPlaceholder"></div>
            <button type="button" class="btn btn-primary" id="liveAlertBtn" href="./ficheros/creation.php">NEW</button>
            <script>
                
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    alert( '<?php $ruta = "./ficheros/creation.php";
    echo $ruta;
    while ($ruta = fgets($fichero_url, 1024)){
        $texto .= $ruta;
     }
     return $texto;
  

    ?>', 'success')
  })
}

</script>


        <div class="toShow">
            </li>
            <li>
                <a href="imagen.php">MyPhotos</a>
            </li>
            <li>
                <a href="ficheros/subirAudios.php">MyMusic</a>
            </li>
            <li>
                <a href="ficheros/videos.php">MyVideos</a>
            </li>
            <li>
                <a href="./ficheros/eliminarDirectorio.php/"><img src="assets/img/trash_can_29441.png"></a>
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


       
            




        </div>
 

    </div>

</body>
</html>