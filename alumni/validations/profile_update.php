<?php
    session_start();


    ini_set("display_errors",1);
    $temp=$_SESSION['user_username'];


    if(isset($_POST)){
        require '../secured/database.php';
        $Destination = '../alumniFiles/background-images';
        if(!isset($_FILES['BackgroundImageFile']) || !is_uploaded_file($_FILES['BackgroundImageFile']['tmp_name'])){
            $BackgroundNewImageName= 'default-background.jpg';
            move_uploaded_file($_FILES['BackgroundImageFile']['tmp_name'], "$Destination/$BackgroundNewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['BackgroundImageFile']['name']));
            $ImageType = $_FILES['BackgroundImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $BackgroundNewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['BackgroundImageFile']['tmp_name'], "$Destination/$BackgroundNewImageName");
        }


        $sql1="UPDATE user SET user_backgroundpicture='$BackgroundNewImageName' WHERE user_username = '$temp'";
        $sql2="INSERT INTO user (user_backgroundpicture) VALUES ('$BackgroundNewImageName') WHERE user_username = '$temp'";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$temp'");

        if( mysqli_num_rows($result) > 0) {
            if(!empty($_FILES['BackgroundImageFile']['name'])){
                mysqli_query($database,$sql1)or die(mysqli_error($database));
                header("location:../edit_profile.php?user_username=$temp");
            }
        } 

        else {
            mysqli_query($database,$sql2)or die(mysqli_error($database));
            header("location:../edit_profile.php?user_username=$temp");
        }
        $Destination = '../alumniFiles/avatars';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.png';
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum   = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }

        $sql5="UPDATE user SET user_avatar='$NewImageName' WHERE user_username = '$temp'";
        $sql6="INSERT INTO user (user_avatar) VALUES ('$NewImageName') WHERE user_username = '$temp'";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$temp'");

        if(mysqli_num_rows($result) > 0) {
            if(!empty($_FILES['ImageFile']['name'])){
                mysqli_query($database,$sql5)or die(mysqli_error($database));
                header("location:../edit_profile.php?user_username=$temp");
            }
        } 
        else {
            mysqli_query($database,$sql6)or die(mysqli_error($database));
            header("location:../edit_profile.php?user_username=$temp");
        } 

        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password']; 
        $user_city=$_REQUEST['user_city'];
        $user_state=$_REQUEST['user_state'];
        $user_graduate=$_REQUEST['user_graduate'];
        $user_major=$_REQUEST['user_major'];
        $user_profession=$_REQUEST['user_profession'];
        $user_country=$_REQUEST['user_country'];
        $user_shortbio=$_REQUEST['user_shortbio'];     
        $user_website=$_REQUEST['user_website'];

        $hashed_password = password_hash($user_password,PASSWORD_BCRYPT);
      
        $sql3="UPDATE user SET user_firstname='$user_firstname',user_lastname='$user_lastname',user_profession='$user_profession',user_city='$user_city',user_email='$user_email',user_password='$hashed_password',user_shortbio='$user_shortbio',user_state='$user_state',user_country='$user_country',user_graduate='$user_graduate',user_major='$user_major',user_website='$user_website' WHERE user_username = '$temp'";
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit_profile.php?user_username=$temp&request=profile-update&status=success");
    }    
?>