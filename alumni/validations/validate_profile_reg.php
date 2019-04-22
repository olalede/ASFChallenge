<?php
    session_start();


    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);

    if(isset($_POST)){
        require '../secured/database.php';
        session_start();
        $Destination = '../alumniFiles/avatars';

        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }

        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }

        
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];


        $user_city=$_REQUEST['user_city'];
        $user_state=$_REQUEST['user_state'];
        $user_graduate=$_REQUEST['user_graduate'];
        $user_profession=$_REQUEST['user_profession'];
        $user_major=$_REQUEST['user_major'];
        $user_country=$_REQUEST['user_country'];

        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password'];

        $user_cpassword=$_REQUEST['$user_cpassword'];


        $hashed_password = password_hash($user_password,PASSWORD_BCRYPT);
        $hashed_cpassword = password_hash($user_cpassword,PASSWORD_BCRYPT);

        $sql3="UPDATE user SET user_firstname='$user_firstname',user_lastname='$user_lastname', user_city='$user_city', user_state='$user_state', user_country='$user_country',user_graduate='$user_graduate',user_profession='$user_profession',user_major='$user_major',user_email='$user_email',user_password='$hashed_password',user_cpassword='$hashed_cpassword',user_avatar='$NewImageName', WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];


        $sql4="INSERT INTO user (user_firstname,user_lastname,user_city,user_state,user_country,user_graduate,user_profession,user_major,user_email,user_password,user_avatar) VALUES ('$user_firstname','$user_lastname','$user_city','$user_state','$user_country','$user_graduate','$user_profession','$user_major','$user_email','$hashed_password','$NewImageName') WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update_bio.php?user_username=$user_username&current_user=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update_bio.php?user_username=$user_username&current_user=$user_username");
        }  
    }    
?>