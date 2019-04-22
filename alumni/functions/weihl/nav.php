<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php

include('secured/database.php');

    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>

<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
        <title>Alumnis</title>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>  

        <body>
        
        <style>
.navbar {
  background-color: #4f2c1d;

  
} 
</style>
            <div class="container">
          
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                        <a href=welcome.php><img src="img/logo.png" class="navbar-brand" alt=""></a>
                           	        
                    </div>
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="home.php"><i classs="fa fa-home"></i><b>Home</b></a>	
                            <a class="navbar-brand" href="https://wrld.mp/5fba1ab"><i classs="fa fa-home"></i><b>Map Direction</b></a>        
                    </div>
                <form class="navbar-form navbar-left" role="search" method="post" autocomplete="off" action="search_profile.php">
                    <div class="form-group">
                        <input type="text" class="search form-control" id="searchbox" placeholder="Search" name="search-form"/><br />
                        <div id="display"></div>
				    </div> 
                </form>
                 
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['user_firstname'];?> <?php echo $row['user_lastname'];?><strong class="caret"></strong></a>                  
                        <ul class="dropdown-menu">
                            <li>
                                <a href="alumni_account.php"><i class="fa fa-map-marker"></i> My Profile</a>
                                <a href="edit_profile.php"><i class="fa fa-edit"></i> Edit Profile</a>
                                <a href="all_alumni.php"><i class="fa fa-map-marker"></i>View All Alumni</a>
                                <a href="validations/validate_logout.php"><i class="fa fa-mail-reply"></i> Logout</a>
                            </li>
                        </ul>
                    </li>	

                   
  
             
  
    </nav>
    <br><br>
 </div>
 
 </body>
</html>
<?php


    }

?>
