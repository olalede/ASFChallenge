<?php
    session_start();

    require '../secured/database.php';

    session_destroy();
    header('location:../login.php?logout=success');
?>