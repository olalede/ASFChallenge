<?php 

session_start();

if( isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 30*60) ){
    session_unset();
    session_destroy(); 
    header('Location: login.php');
    }
    else{
    session_regenerate_id(true);
    $_SESSION['last_acted_on'] = time();
    }

?>
<?php include 'validations/validate.php' ?>
<?php include 'validations/validate_session.php' ?>
<?php include 'functions/jadgwiga/headFunc.php' ?>
<?php include 'functions/weihl/nav.php' ?>   


    <div class="container">
	   <div class="no-gutter row"> 
           <div class="col-md-12">
               <div class="panel panel-default" id="sidebar">
                   <div class="panel-body">   
<?php     
     
    $sql = "SELECT * FROM user where user_username='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
?>    


<?php include 'functions/carol/profile_form.php' ?>


                   </div>
               </div>
           </div>
        </div>
    </div>