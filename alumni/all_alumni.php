<?php include 'validations/validate.php' ?>     
<?php include 'validations/validate_session.php' ?>
<?php include 'functions/jadgwiga/headFunc.php' ?>
<?php include 'functions/weihl/nav.php' ?>   


    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">



<?php
    include 'secured/database.php';
    $current_user = $_SESSION['user_username'];
    $sql = "SELECT * FROM user WHERE user_username != '$current_user' order by user_id desc";
    $result = mysqli_query($database,$sql) or die(mysqli_error($database));
    while($rws = mysqli_fetch_array($result)){ 
?>



    <div class="col-md-4 column">
        <div class="panel-group" id="panel-<?php echo $rws['user_id']; ?>">
            <div class="panel panel-default">
                <div id="panel-element-<?php echo $rws['user_id']; ?>" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="col-md-6 column">
                            <img src="alumniFiles/avatars/<?php echo $rws['user_avatar'];?>" name="aboutme" class="img-thumbnail" align="center" width="150">                                  
    </div>
                                                                                
                                                                                
    <div class="col-md-6 column">
        <h2><span><a href="profile.php?user_username=<?php echo $rws['user_username'];?>"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></a></span></h2>
    </div>
        </div>
            </div>
               </div>
                    </div>
                        </div>


 <?php } ?>                    


    </div>
        </div>
            </div>
                </div>