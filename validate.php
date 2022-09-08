<?php

session_start();

// print_r($_POST);
// echo $_POST["user"];
// echo $_POST["pwd"]
$myUser = "blabla@bbbb.com";
$myPwd = "123456";#esto en realidad estará en una base de datos 

if($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd){
    // echo "Correct";#si es correcto que nos vaya a panel
    $_SESSION["user"] = $_POST["user"];
    header("Location: ./04.panel.php");
}else{
    // echo "Incorrect";   #si es incorrecto que nos vaya a index
    header("Location: ./02.index.php"); 
}



?>