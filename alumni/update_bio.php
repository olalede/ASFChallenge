<?php 

session_start();

if( isset($_SESSION['last_acted_on']) && (time() - $_SESSION['last_acted_on'] > 30*60) ){
    session_unset(); // unset $_SESSION variable for the run-time
    session_destroy(); // destroy session data in storage
    header('Location: login.php');
    }
    else{
    session_regenerate_id(true);
    $_SESSION['last_acted_on'] = time();
    }


include 'secured/database.php'; 
include 'functions/jadgwiga/headFunc.php'; 
?>


        <div class="container" style="padding-top:100px;">
            <div class="no-gutter row">             
                <div class="col-md-12">
                     <center><h2 style="color:#65aeee;">Fill Up the details below to Continue</h2></center>
              	     <div class="panel panel-default" id="sidebar">
                        <div class="panel-body">
<?php



    $user_username = $_SESSION['user_username'];
    $sql = "SELECT * FROM user where user_username='$user_username'";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database)); 
    $rws = mysqli_fetch_array($result);
?> 


<?php include 'functions/carol/bio_form.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>