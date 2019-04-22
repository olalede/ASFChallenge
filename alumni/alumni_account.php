<?php include 'validations/validate.php' ?> 
<?php include 'validations/validate_session.php' ?>
<?php include 'functions/jadgwiga/headFunc.php' ?>
<?php include 'functions/weihl/nav.php' ?> 
<?php include 'functions/jadgwiga/styleFunc.php' ?>


<?php 
    $current_user = $_SESSION['user_username'];
    $profile_username=$rws['user_username'];
?>
 

<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
 
<div class="profile">
<div class="row clearfix">
	<div class="col-md-12 column">
<div>
    <center>
        <img src="alumniFiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-thumbnail" align="center" width="150"">
         <br>
            <div class="btn-group">
             <a href="http://www.facebook.com/sharer.php?u=<?php echo $url ?> &t=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?> " alt="Share this profile on Facebook" title="Share on Facebook" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-facebook"></i></button></a>
            <a href="http://twitter.com/share?text=<?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?>&url=<?php echo $url ?>" alt="Tweet This Post" title="Tweet about the profile" target="_blank"><button type="button" class="btn btn-default"><i class="fa fa-twitter"></i></button></a>
            <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&url=<?php echo $url ?>" alt="Share this profile on Google+" title="Share on Google+" target="_blank" ><button type="button" class="btn btn-default"><i class="fa fa-google-plus"></i></button></a>
</div>
     </center>

                
        <h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
        <h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
        <br>
     <div class="panel-group white" id="panel-profile">
    <div class="panel panel-default white">
        <div class="panel-heading white">
        <center>
    <a class="panel-title" data-toggle="collapse" data-parent="#panel-profile" href="#panel-element-info">Details</a>
        </center>
    </div>
                
    <div id="panel-element-info" class="panel-collapse collapse in">
    <div class="panel-body">
    <div class="col-md-4 column">
    <p class="text-center profile-title"></i> Basic</p>
     <hr>


<?php
    if ($rws['user_shortbio']){
?>   
                                    
    <div class="col-md-4">
     <p class="profile-details"></i> Bio</p>
    </div>
     <div class="col-md-8">
   <p><?php echo $rws['user_shortbio'];?></p>
    </div>


<?php } ?>


<?php
    if ($rws['user_city']){
?>   

    <div class="col-md-4">
    <p class="profile-details"></i> City</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_city'];?></p>
    </div>


<?php } ?>

<?php
    if ($rws['user_state']){
?>   

    <div class="col-md-4">
    <p class="profile-details"></i> State</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_state'];?></p>
    </div>


<?php } ?>

<?php
    if ($rws['user_country']){
?>   

    <div class="col-md-4">
    <p class="profile-details"></i> Country</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_country'];?></p>
    </div>


<?php } ?>
<?php
    if ($rws['user_email']){
?>   


    <div class="col-md-4">
    <p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
    </div>
    <div class="col-md-8">                                    
    <p><?php echo $rws['user_email'];?></p>
    </div>


<?php } ?>
<?php
    if ($rws['user_major']){
?>   

    <div class="col-md-4">
    <p class="profile-details"></i> Major</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_major'];?></p>
    </div>
<?php } ?>
<?php
    if ($rws['user_graduate']){
?>   
    <div class="col-md-4">
    <p class="profile-details"></i> Graduate Year</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_graduate'];?></p>
    </div>
<?php } ?>
<?php
    if ($rws['user_profession']){
?>   
    <div class="col-md-4">
    <p class="profile-details"></i> Profession</p>
    </div>
    <div class="col-md-8">
    <p><?php echo $rws['user_profession'];?></p>
    </div>
<?php } ?>
    </div>
         </div>
    </div>
 </div>
                </div>
            </div>
		</div>
	</div>
</div>