<?php

session_start();

$myUser = "eli";
$myPwd = "123"; 

if($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd){
    $_SESSION["user"] = $_POST["user"];
    header("Location: ./panel.php");
   
    
    
}else{
    header("Location: ./inicio.php"); 
}



?>