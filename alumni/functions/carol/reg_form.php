<html><head><title>Sign|Up </title>
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
        <li><a href="login.php">Login</a></li>
        <li><a href="welcome.php">Home</a></li>
        
        
    </ul>
    </div>
  </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


    <style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
    
    
.select-boxes{text-align: center;}
select {
    background-color: #FF7300;
    border: 1px double #FF7300;
    color: #FF7300;
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
    background: #FF7300;
    background: linear-gradient(rgba(171, 183, 241, 0.87), #4f2c1d);
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
	
	color: #FF7300;
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
	background: #FF7300;
	margin-right: 0;
}

.keys span.eval {
	background: #FF7300;
	box-shadow: 0px 4px #4f2c1d;
	color: #FF7300;
}

.top span.clear {
	background: #ff9fa8;
	box-shadow: 0px 4px #ff7c87;
	color: white;
}

/* Some hover effects */
.keys span:hover {
    background: #FF7300;
    box-shadow: 0px 4px #ff7c87;
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

/* Simulating "pressed" effect on active state of the keys by removing the box-shadow and moving the keys down a bit */
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
    
    
    </head>


    
    <body class="w3-light-grey" data-gr-c-s-loaded="true">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><img src="img/logo.png" alt="Logo" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welcome New User <span class="w3-tag">Sign Up</span></h6>
      
  </header>
   <style>
   p{
        font-size: 15px;
        font-weight: bolder;
				color: red;
        text-align: center;
        align: center;
			}


}
     </style>
  
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

 
    <!-- Blog entries -->
    <div class="w3-col l12 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
          <div class="select-boxes">
    
  <div class="container">
<div class="col-lg-9">
	      
  
<p>Labels with astericks * are optional.



  <br>
<br>



     <form class="form-horizontal" action="validations/validate_registration.php" method="post" id="reg_form" autocomplete="off">
                        <fieldset>
      
      <!-- Form Name -->
      <legend> Personal Information </legend>
<br><br>
      
       
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">First Name</label>
        <div class="col-md-6  inputGroupContainer">
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                     
     
     <input type="text" class="form-control" spellcheck="false" autocomplete="off" placeholder="First Name" name="user_firstname" required>
                                 
     </div>
        </div>
      </div>

         <!-- Text input-->
      
      <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                 
            <input type="text" spellcheck="false" autocomplete="off" class="form-control" placeholder="Last Name" name="user_lastname" required>
                                  
            </div>
        </div>
      </div>

        <div class="form-group">
        <label class="col-md-4 control-label">City*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input placeholder="city" name="user_city" class="form-control"  type="text">
          </div>
        </div>
      </div>
      
      <!-- Select Basic -->
      
      <div class="form-group">
        <label class="col-md-4 control-label">State*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input placeholder="State" name="user_state" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Country*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input placeholder="Country" name="user_country" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Gradaute Year</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="user_graduate" class="form-control selectpicker" >
              <option value=" " >Please select your Graduate Year</option>
              <option>1961-1965</option>
              <option>1966-1970</option>
              <option >1971-1975</option>
              <option >1976-1980</option>
              <option >1981-1985</option>
              <option >1986-1990</option>
              <option >1991-1995</option>
              <option >1996-2000</option>
              <option>2001-2005</option>
              <option>2006-2010</option>
              <option >2011-2015</option>
              <option >2016-2019</option>
              
            </select>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Major</label>
        <div class="col-md-6 selectContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="user_major" class="form-control selectpicker" >
              <option value=" " >Please select your Major</option>
              <option>B.S. in Computer Science</option>
              <option>B.A. in Computer Science</option>
              <option >B.S. in Software Engineering</option>
              <option >M.S. in Computer Science, Graduate</option>
              <option >M.S. in Software Engineering, Graduate</option>
            </select>
          </div>
        </div>
      </div>


           <div class="form-group">
        <label class="col-md-4 control-label">Profession*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input name="user_profession" placeholder="Profession" class="form-control"  type="text">
          </div>
        </div>
      </div>     

      <div class="form-group">
        <label class="col-md-4 control-label">Bio*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <textarea class="form-control" name="user_shortbio" placeholder="About "></textarea>
          </div>
        </div>
      </div>


 
 
      </fieldset>
       	<legend> Account information </legend>
      <fieldset>
      <div class="form-group float-label-control">
<style>
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto; 
 
}
</style>

<label for="">Profile Picture*</label>
<center><input name="ImageFile" class="img-thumbnail" class="center" width="150" align="center" input type="file" id="uploadFile"/></center>
<center><div class="shortpreview" id="uploadImagePreview"></center>
<br>
<center> <div id="imagePreview"></div></center>
</div>

      <div class="form-group">
        <label class="col-md-4 control-label">Email*</label>
        <div class="col-md-6  inputGroupContainer">
          <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="email" class="form-control" placeholder="Email Address" spellcheck="false" autocomplete="off" name="user_email">
                                   
            </div>
        </div>
      </div>

      <div class="form-group">
    
        <label class="col-md-4 control-label">Userame</label>
        <div class="col-md-6  inputGroupContainer">
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>                     
     
     <input type="text" class="form-control" spellcheck="false" autocomplete="off" placeholder="Username" name="user_username" required>
     <span class="input-group-addon" id="status"></span>                       
     </div>
        </div>
      </div>

      <div class="form-group has-feedback">
            <label for="password"  class="col-md-4 control-label">
                    Password
                </label>
                <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control" id="userPw" type="password" placeholder="Password" 
                       name="user_password" data-minLength="5"
                       data-error="some error"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
                </div>
             </div>
        </div>
     
        <div class="form-group has-feedback">
            <label for="confirmPassword"  class="col-md-4 control-label">
                   Confirm Password
                </label>
                 <div class="col-md-6  inputGroupContainer">
                <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
            <input class="form-control {$borderColor}" id="userPw2" type="password" placeholder="Confirm password" 
                       name="user_cpassword" data-match="#confirmPassword" data-minLength="5"
                       data-match-error="some error 2"
                       required/>
                <span class="glyphicon form-control-feedback"></span>
                <span class="help-block with-errors"></span>
      			 </div>
             </div>
        </div>

       
         <!-- Button -->
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
        <button class="btn btn-default ladda-button" spellcheck="false" autocomplete="off" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" style="float:left; height:45px;width:160px;border: #FF7300;border-style:groove;color:brown;size:20px" name="signup_button"/>Register</button>      </div>
      </div>
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
            user_firstname: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your first name'
                    }
                }
            },
             user_lastname: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your last name'
                    }
                }
            },
           
            user_username: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your username'
                    }
                }
            },

            user_graduate: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please select your graduate year range'
                    }
                }
            },
            
            user_major: {
                validators: {
                     
                    notEmpty: {
                        message: 'Please select your major'
                    }
                }
            },
					
	user_password: {
            validators: {
                notEmpty:{
                        message: 'Please enter your password'
                },
                identical: {
                    field: 'confirmPassword',
                    message: 'Confirm your password below - type same password '
                }
            }
        },
        user_cpassword: {
            validators: {
                notEmpty:{
                    message: 'Please confirm your password'
                }
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
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
