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

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
</head>    

<body>
<div class="container">
    <nav>
        <input type="checkbox" id="nav" class="hidden">
        <label for="nav" class="nav-btn">
            <i></i>
            <i></i>
            <i></i>
</label>

    <div class="col-md-4"></div>
    </div>
    </nav>
</div>
    </body>
    </html>

<?php 
include 'validations/validate.php';      
include 'validations/validate_session.php';
include 'functions/jadgwiga/headFunc.php';
include 'functions/weihl/nav.php';
?>     


<?php 
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
        animate: {
        enter: 'animated zoomInDown',
        exit: 'animated zoomOutUp'
            }								
        });
</script>

