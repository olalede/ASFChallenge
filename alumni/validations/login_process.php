<?php
    session_start();
    	
    $_SESSION['last_acted_on'] = time();
    if(isset($_REQUEST['login_button'])||$_REQUEST['auto']==1){
        require '../secured/database.php';


        $errmsg_arr = array();
        $errflag = false;

        $username=  mysqli_real_escape_string($database,$_REQUEST['user_username']);
        $password=  mysqli_real_escape_string($database,$_REQUEST['user_password']);


        if($username == '') {
            $errmsg_arr[] = 'Username missing';
            $errflag = true;
        }
        if($password == '') {
            $errmsg_arr[] = 'Password missing';
            $errflag = true;
        }
        if($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: validate_login.php");
            exit();
        } 
         
        $sql="SELECT * FROM user WHERE user_username='$username'";
        $result=  mysqli_query($database,$sql) or die(mysqli_errno($database));
        $trws= mysqli_num_rows($result);


        if($trws==1){
            $rws=  mysqli_fetch_assoc($result);
            $_SESSION['user_username']=$rws['user_username'];

            if(password_verify($password,$rws['user_passwword'])){
                $errmsg_arr[] = 'password not found';
            }
            $_SESSION['user_password']=$rws['user_password'];
            header("location:../alumni_account.php?user_username=$username&request=login&status=success");    
        }
        else {
            $errmsg_arr[] = 'username and password not found';
            $errflag = true;
            if($errflag) {
                $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
                session_write_close();
             header("location: ../validations/validate_login.php");
              $errmsg_arr[] = 'username and password not found';
                exit();
            }
           
        }
    }
?>