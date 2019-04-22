<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    require 'secured/database.php';
    $user_username=$_SESSION['user_username'];
?>