<?php
    session_start();
    include '../secured/database.php';
    
    if(isset($_POST['signup_button'])){

        $user_email=$_POST['user_email'];
        $user_firstname=$_POST['user_firstname'];
        $user_lastname=$_POST['user_lastname'];
        $user_city=$_POST['user_city'];
        $user_country=$_POST['user_country'];
        $user_state=$_POST['user_state'];
        $user_graduate=$_POST['user_graduate'];
        $user_profession=$_POST['user_profession'];
        $user_major=$_POST['user_major'];
        $user_shortbio=$_POST['user_shortbio'];
        $user_avatar=$_POST['user_avatar'];
        $user_username=$_POST['user_username'];
        $user_password=$_POST['user_password'];
        $user_cpassword=$_POST['user_cpassword'];
        
        $hashed_password = password_hash($user_password,PASSWORD_BCRYPT);
        $hashed_cpassword = password_hash($user_cpassword,PASSWORD_BCRYPT);
        
        $sql="INSERT INTO user(user_firstname,user_lastname,user_email,user_city,user_state,user_country,user_graduate,user_profession,user_major,user_shortbio,user_username,user_password,user_cpassword,user_joindate,user_avatar) VALUES('$user_firstname','$user_lastname','$user_email','$user_city','$user_state','$user_country','$user_graduate','$user_profession','$user_major','$user_shortbio','$user_username','$hashed_password','$hashed_cpassword',CURRENT_TIMESTAMP,'$user_avatar')";
        
        mysqli_query($database,$sql) or die(mysqli_error($database));
       
        $_SESSION['user_username'] = $user_username;
       
        header('Location: ../alumni_account.php?user_username='.$user_username);

    }
?>
