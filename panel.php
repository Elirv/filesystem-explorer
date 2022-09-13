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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="header"> 
        <a href="">User Panel</a>
        <div class="logout">
         <a href="" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="">a</a>
            </li>
            <li>
                <a href="">b</a>
            </li>
            <li>
                <a href="">c</a>
            </li>
            <li>
                <a href="">d</a>
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
        <p>This is an example</p>
        <input type="text">
    </div>
    


<?php
$goPrueba = "prueba.php";
if(isset($_SESSION["user"])){
    include_once($goPrueba);
  

}else{
    header("location: inicio.php");
}

?>

<br>

</body>
</html>