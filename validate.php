<?php

session_start();

$myUser = "eli";
$myPwd = "123"; 

if($_POST["user"] == $myUser && $_POST["pwd"] == $myPwd){
    $_SESSION["user"] = $_POST["user"];
    header("Location: ./panel.php");
    echo "welcme" . $myUser;
    
    
}else{
    header("Location: ./inicio.php"); 
}



?>