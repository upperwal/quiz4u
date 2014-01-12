<?php $page = "home"; 

$view_tooltip = "View Quiz Details";
$delete_tooltip = "Take this Quiz";

?>
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title><?php include('title.php'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="abstract" content=""/>
    <meta name="keywords" content=""/>
    <!--  Le styles  -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="css/datepicker.css" rel="stylesheet"/>
    <link href="css/timepicker.css" rel="stylesheet"/>
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dr+Sugiyama|Average+Sans|Raleway"/>
    <link href="css/custom-css.css" rel="stylesheet"/>

    <!--  Fav and touch icons  -->
    <link rel="shortcut icon" href="assets/favicon.png"/>
    
  </head>
  <body>
    
    <div class="container">
      <?php include('header.php'); ?>
      <div class="main-container fixed-width-container">
        <div class="bg-text">
          <h3 class="theme-colour font-economica">Login</h3>
        </div>
        <div class="login">
          <img src="assets/logo.png" class="center" width="70%">
          <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span4">
                              <label>Username:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputName" id="inputName" placeholder="Your Username">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span4">
                              <label>Password:</label>
                            </div>
                            <div class="span6">
                              <input type="password" name="inputEmail" id="inputEmail" placeholder="Password">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>
                          <div class="row-fluid">
                            <div class="span4">
                              <label></label>
                            </div>
                            <div class="span6">
                              <span class="for-pass"><a href="">Forgot Password?</a></span>
                            </div>
                          </div>
                          <button class="btn login-btn float-right">Login</button>

                        </form>
        </div>
      </div>
      <?php include('footer.php'); ?>
    </div>
            
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/ticker00.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="js/custom-js.js"></script>
    
</body>
</html>