<?php include 'validations/validate.php' ?> 
<?php include 'functions/jadgwiga/headFunc.php' ?>
<?php include 'functions/weihl/nav.php' ?> 
<?php include 'functions/jadgwiga/styleFunc.php' ?>

<script>
  $.growl("<?php echo $dialogue; ?> ", {
  animate: {
    enter: 'animated zoomInDown',
    exit: 'animated zoomOutUp'
            }								
});
</script>


<?php 
    $current_user = $_SESSION['user_username'];
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $profile_username=$rws['user_username'];
?>

<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>

<div class="profile">
	<div class="row clearfix">
     <div>
        <center>
            <img src="alumniFiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive profile-avatar">
        </center>

    <h1 class="text-center profile-text profile-name"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
    <h2 class="text-center profile-text profile-profession"><?php echo $rws['user_profession'];?></h2>
    <br>
    <div class="panel-group white" id="panel-profile">
    <div class="panel panel-default">
    <div id="panel-element-info" class="panel-collapse collapse in">
        <div class="panel-body">
            <div class="col-md-8 column">
            <p class="text-center profile-title">Basic</p>
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
    if ($rws['user_major']){
?>   

<div class="col-md-4">
      <p class="profile-details"></i> Major</p>
    </div>
    <div class="col-md-8">
      <p><?php echo $rws['user_major'];?></p>
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