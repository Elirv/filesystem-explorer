<?php

session_start();
session_destroy();
header("location: 02.index.php");

?>