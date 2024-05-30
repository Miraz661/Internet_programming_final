<?php
    session_start();
    if(!isset($_SESSION["Uname"])){
        header("Location: login.php");
        exit();
    }
?>
