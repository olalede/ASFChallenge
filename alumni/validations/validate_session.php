<?php
//session_start();
    require 'secured/database.php';
    
    if(!$_SESSION['user_username']){
        header("location:login.php?session=notset");
    }
?>