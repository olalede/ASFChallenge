<?php

include ('secured/database.php');
include ('function.php');

$uemail = $_GET['user_email'];
$token = $_GET['token'];

$userID = UserID($uemail); 
$verifytoken = verifytoken($userID, $token);

if(isset($_POST['submit']))
{
	$new_password = $_POST['new_password'];
	$new_password = md5($new_password);
	$retype_password = $_POST['retype_password'];
	$retype_password = md5($retype_password);
	
	if($new_password == $retype_password)
	{
		$update_password = mysqli_query($database, "UPDATE user SET user_password = '$new_password' WHERE user_id = $userID");
		if($update_password)
		{
				mysqli_query($database, "UPDATE recovery_keys SET valid = 0 WHERE userID = $userID AND token ='$token'");
				$msg = 'Your password has changed successfully. Please login with your new passowrd.';
				$msgclass = 'bg-success';
		}
	}else
	{
		 $msg = "Password doesn't match";
		 $msgclass = 'bg-danger';
	}
	
}

?>

<!DOCTYPE html>
<html
><head>
<title>Forgot Password</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css">    
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
    <script src="jquery.min.js"></script>


<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">


</head>
<body>
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
    
    
.select-boxes{text-align: center;}
select {
    background-color: #F5F5F5;
    border: 1px double #15a6c7;
    color: #1d93d1;
    font-family: Georgia;
    font-weight: bold;
    font-size: 14px;
    height: 39px;
    padding: 7px 8px;
    width: 250px;
    outline: none;
    margin: 10px 0 10px 0;
}
select option{
    font-family: Georgia;
    font-size: 14px;
}
/* Basic reset */
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	
	/* Better text styling */
	font: bold 14px Arial, sans-serif;
}

/* Finally adding some IE9 fallbacks for gradients to finish things up */

/* A nice BG gradient */
html {
	height: 100%;
	background: white;
	background: radial-gradient(circle, #fff 20%, #ccc);
	background-size: cover;
}

/* Using box shadows to create 3D effects */
#calculator {
    width: 325px;
    height: auto;
    margin: 0px auto;
    padding: 20px 20px 9px;
    background: #9dd2ea;
    background: linear-gradient(rgba(171, 183, 241, 0.87), #8bceec);
    border-radius: 20px;
    box-shadow: 0px 4px rgba(0, 104, 136, 0.53), 0px 10px 15px rgba(0, 0, 0, 0.2);
}

/* Top portion */
.top span.clear {
	float: left;
}

/* Inset shadow on the screen to create indent */
.top .screen {
	height: 40px;
	width: 212px;
	
	float: right;
	
	padding: 0 10px;
	
	background: rgba(0, 0, 0, 0.2);
	border-radius: 3px;
	box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);
	
	/* Typography */
	font-size: 17px;
	line-height: 40px;
	color: white;
	text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
	text-align: right;
	letter-spacing: 1px;
}

/* Clear floats */
.keys, .top {overflow: hidden;}

/* Applying same to the keys */
.keys span, .top span.clear {
	float: left;
	position: relative;
	top: 0;
	
	cursor: pointer;
	
	width: 66px;
	height: 36px;
	
	background: white;
	border-radius: 3px;
	box-shadow: 0px 4px rgba(0, 0, 0, 0.2);
	
	margin: 0 7px 11px 0;
	
	color: #888;
	line-height: 36px;
	text-align: center;
	
	/* prevent selection of text inside keys */
	user-select: none;
	
	/* Smoothing out hover and active states using css3 transitions */
	transition: all 0.2s ease;
}

/* Remove right margins from operator keys */
/* style different type of keys (operators/evaluate/clear) differently */
.keys span.operator {
	background: #FFF0F5;
	margin-right: 0;
}

.keys span.eval {
	background: #f1ff92;
	box-shadow: 0px 4px #9da853;
	color: #888e5f;
}

.top span.clear {
	background: #ff9fa8;
	box-shadow: 0px 4px #ff7c87;
	color: white;
}

/* Some hover effects */
.keys span:hover {
    background: #1d91d0;
    box-shadow: 0px 4px #0676b3;
    color: #f1f1f1;
}

.keys span.eval:hover {
	background: #abb850;
	box-shadow: 0px 4px #717a33;
	color: #ffffff;
}

.top span.clear:hover {
	background: #f68991;
	box-shadow: 0px 4px #d3545d;
	color: white;
}

.keys span:active {
	box-shadow: 0px 0px #6b54d3;
	top: 4px;
}

.keys span.eval:active {
	box-shadow: 0px 0px #717a33;
	top: 4px;
}

.top span.clear:active {
	top: 4px;
	box-shadow: 0px 0px #d3545d;
}


</style>


<body class="w3-light-grey" data-gr-c-s-loaded="true">

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"/>
<style>
.navbar-nav > li {
float: none;
vertical-align: bottom;
}
#site-logo {
position: relative;
vertical-align: bottom;
bottom: -35px;
}
#site-logo a {
margin-top: -53px;
}
</style>


 </head>

 <nav class="navbar navbar-default navbar-fixed-top">
 <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Nav</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav nav-justified navbar-nav center-block">
        <li><a href="welcome.php">Home</a></li>
        <li><a href="index.php">Register</a></li>
        
        
    </ul>
    </div>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<div class="w3-content" style="max-width:1600px">
<header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><img src="img/logo.png" alt="Logo" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welcome Back <span class="w3-tag">Reset your password</span></h6>
      
  </header>

  <!-- Grid -->
<div class="w3-row w3-padding w3-border">

<!-- Blog entries -->
<div class="w3-col l12 s12">

  <!-- Blog entry -->
  <div class="w3-container w3-white w3-margin w3-padding-large">
      <div class="select-boxes">

<div class="container">
<div class="col-lg-9">
        <br>



<br>


   
	<?php if($verifytoken == 1) { ?>
       

        	<form class="form-horizontal" role="form" method="post">
            <fieldset>
    	<div class="form-group">
        
        
            
            	<?php if(isset($msg)) { ?>
                    <div class="<?php echo $msgclass; ?>" style="padding:5px;"><?php echo $msg; ?></div>
                <?php } ?>
    
                <div class="form-group has-feedback">
                <label class="col-md-4 control-label">Password</label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                     
                        <input class="form-control" name="new_password" type="password" placeholder="New Password" required>
                    </div>
                </div>
                </div>
                
                <div class="form-group has-feedback">
                <label class="col-md-4 control-label">Re-type Password</label>
                 <div class="col-md-6  inputGroupContainer">
                   
    
                 <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                     
                        <input class="form-control" name="retype_password" type="password" placeholder="Re-type New Password" required>
                    </div>
                </div>
                </div>
    
                <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">	
                        <button class="btn btn-warning" name="submit" type="submit">Submit</button>
                    </div>
                </div>
			</form>
		</div>
        
        <?php }else {?>
	    	
            <div class="form-group">
        <label class="col-md-4 control-label">Invalid or Broken Token</label>
        <div class="col-md-6  inputGroupContainer">
	            <p>Opps! The link you have come with is maybe broken or already used. Please make sure that you copied the link correctly or request another token from <a href="index.php">here</a>.</p>
			</div>
            </div>
        <?php }?>
           
        
            

        </fieldset>
  </form>
</div>
</div>



<!-- PrefixFree -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

        <script src="js/index.js"></script>
<script type="text/javascript">


$(document).ready(function() {
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
         
   new_password: {
            validators: {
                notEmpty: {
                    message: 'Please enter your new password below '
                }
            }
        },

        retype_password: {
            validators: {
                notEmpty: {
                    message: 'Please re enter your new password below '
                }
            }
        },
            
            }
        })
		
 	
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});


 
 </script>
    
    </div>

          
            
      </div>
      
    </div>

  </div>

</div>

</body>
</html>



















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
