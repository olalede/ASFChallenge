<?php
    session_start();
    
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);

    if(isset($_POST)){
        require '../secured/database.php';

        session_start();

        
        $user_shortbio=$_REQUEST['user_shortbio'];
        $sql3="UPDATE user SET user_shortbio='$user_shortbio' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $sql4="INSERT INTO user (user_shortbio) VALUES ('$user_shortbio') WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");

        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit_profile.php?user_username=$user_username");
        }

        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit_profile.php?user_username=$user_username");
        }  
    }    
?>