<?php $page = "home"; 

$view_tooltip = "View Quiz Details";
$edit_tooltip = "Edit Quiz Details";
$delete_tooltip = "Delete this Quiz";

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
          <h3 class="theme-colour font-economica">Faculty Control Panel</h3>
        </div>
        
            <div class="tabbable tabs-left">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#lA" data-toggle="tab">
                  <span class="badge">1</span>&nbsp;Profile
                  </a>
                </li>
                <li><a href="#lB" data-toggle="tab">
                  <span class="badge">2</span>&nbsp;Quiz
                </a></li>
                <li><a href="#lC" data-toggle="tab">
                  <span class="badge">3</span>&nbsp;Report
                </a></li>
                <li><a href="#lD" data-toggle="tab">
                  <span class="badge">3</span>&nbsp;Admin Section
                </a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="lA">

                  
                  <div class="row-fluid college-details">
                    <div class="span3">
                      <img src="assets/user1.png" width="150">
                    </div>
                    <div class="span9">
                      <address>
                        <h2 id="college" class="no-top-margin">Abhishek Upperwal</h2><br>
                        <strong>UID: </strong>CSEITM162<br>
                        <strong>Department: </strong>CSE/IT<br><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890<br><br>
                        <a href="mailto:#">first.last@example.com</a>
                      </address>
                      <button data-target="#modalEdit" class="btn btn-primary btn-mini btn-width add-btn-tooltip" data-toggle="modal" title="Edit Profile">Edit</button>
                    </div>
                  </div>
                  
                  
                  <div id="modalEdit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="true">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h3 id="myModalLabel">Edit Profile</h3>
                        </div>
                        <div class="modal-body">
                          

                          <div class="row-fluid">
                    <div class="span12">
                      <form name="booking" action="" method="post" onsubmit="return validateForm()" id="margin-top-15">
                            <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Faculty Name:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputName" id="inputName" placeholder="Faculty Name" value="Abhishek Upperwal">
                              <div class="alert alert-error not-visible" id="inputNameError">
                                Required Field. Please enter your personal name.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">UID:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="UID given by the Institution" value="CSEITM142">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Department:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Department" value="CSE/IT">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your organization.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Email:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Email" value="mail@example.com">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Phone:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Phone" value="1234567890">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Designation:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Designation" value="Example">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                          <div class="row-fluid">
                            <div class="span6">
                              <label class="font-20">Qualification:</label>
                            </div>
                            <div class="span6">
                              <input type="text" name="inputEmail" id="inputEmail" placeholder="Qualification" value="Example">
                              <div class="alert alert-error not-visible" id="inputEmailError">
                                Required Field. Please enter your position.
                              </div>
                            </div>
                          </div>

                        </form>
                    </div>
                    <div class="span">
                      <!--<img src="assets/qubit_banner.png" alt="Qubit Technologies">-->
                    </div>
                  </div>



                        </div>
                        <div class="modal-footer">
                          <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          <button class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                  



                </div>
                <div class="tab-pane" id="lB">
                  
                  <?php include('quiz_panel.php'); ?>


                </div>
                <div class="tab-pane" id="lC">
                  
                  <?php include('report_panel.php'); ?>
            




                </div>
                <div class="tab-pane" id="lD">
                  
                  <div class="tabbable" style="margin-bottom: 18px;">
              <ul class="nav nav-tabs">
                <li class=""><a href="#tab1" data-toggle="tab">Section 1</a></li>
                <li class=""><a href="#tab2" data-toggle="tab">Section 2</a></li>
                <li class="active"><a href="#tab3" data-toggle="tab">Section 3</a></li>
              </ul>
              <div class="tab-content" style="padding-bottom: 9px; border-bottom: 1px solid #ddd;">
                <div class="tab-pane" id="tab1">
                  <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="tab2">
                  <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane active" id="tab3">
                  <p>What up girl, this is Section 3.</p>
                </div>
              </div>
            </div>
            




                </div>
              </div>
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
    <script>
    $('#timepicker4').timepicker({
                minuteStep: 5,
                showInputs: false,
                disableFocus: false
            });
    $('#timepicker5').timepicker({
                minuteStep: 5,
                showInputs: false,
                disableFocus: false
            });
    $(function(){
      window.prettyPrint && prettyPrint();
      $('#dp1').datepicker({
        format: 'dd-mm-yyyy'
      });
    });
    $(function(){
      window.prettyPrint && prettyPrint();
      $('#dp2').datepicker({
        format: 'dd-mm-yyyy'
      });
    });


    
  </script>
</body>
</html>