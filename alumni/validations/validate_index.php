<?php
    require 'secured/database.php';
    
    if(isset($_SESSION['user_username'])) {
        header("location: alumni_account.php");
    }
?>