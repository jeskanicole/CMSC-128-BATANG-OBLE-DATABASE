<?php
    session_start();
    error_reporting(0);
    
    //Server Credentials
    $MyServerName = "localhost";
    $MyUserName = "root";
    $MyPassword = "";
    //Database
    $MyDBName = 'batangoble_db';
    //Start Connection
    $MyConnection = mysqli_connect($MyServer, $MyUserName, $MyPassword, $MyDBName);

    $slastname = $_GET['slastname'];
    $sfirstname = $_GET['sfirstname'];
    $plastname = $_GET['plastname'];

    $MySearchQuery = "SELECT * FROM STUDENT WHERE (STUDENT.STUD_LASTNAME = '$slastname' AND STUDENT.STUD_FIRSTNAME = '$sfirstname' AND STUDENT.PAR_LASTNAME = '$plastname');";
    $MyValues = $MyConnection -> query($MySearchQuery);

    if (($MyValues -> num_rows) > 0){

      while($MyResults = $MyValues -> fetch_assoc()){
        $slastname = $MyResults['STUD_LASTNAME'];
        $sfirstname = $MyResults['STUD_FIRSTNAME'];
        $sex = $MyResults['STUD_SEX'];
        $sage = $MyResults['STUD_AGE'];
        $sbirthday = $MyResults['STUD_BIRTHDAY'];
        $plastname = $MyResults['PAR_LASTNAME'];
        $pfirstname = $MyResults['PAR_FIRSTNAME'];
        $pcontact = $MyResults['PAR_CONTACT'];
        $type_guardian = $MyResults['PAR_TYPE'];
        $payment_mode = $MyResults['MODE_PAY'];
      }
    }

    if($_POST['save']){
          $studlastname = $_POST['slastname'];
          $studfirstname = $_POST['sfirstname'];
          $studsex = $_POST['sex'];
          $studage = $_POST['sage'];
          $studbirthday = $_POST['sbirthday'];
          //$studaddress = $_POST['saddress'];
          $parlastname = $_POST['plastname'];
          $parfirstname = $_POST['pfirstname'];
          $parcontact = $_POST['pcontact'];
          //$paremail = $_POST['pemail'];
          $gtype = $_POST['type_guardian'];
          $paymode = $_POST['payment_mode'];
          $amntpaid = $_POST['apaid'];
          $datepaid= $_POST['dpaid'];

          if(empty($studlastname)){
            $studlastname = $slastname;
          }
          if(empty($studfirstname)){
            $studfirstname = $sfirstname;
          }
          if(empty($studsex)){
            $studsex = $sex;
          }
          if(empty($studage)){
            $studage = $sage;
          }

          $MyQuery = "UPDATE STUDENT SET STUD_LASTNAME = '$studlastname', STUD_FIRSTNAME = '$studfirstname', STUD_SEX = '$studsex', STUD_AGE = 'studage', STUD_BIRTHDAY = '$studbirthday', PAR_LASTNAME = '$parlastname', PAR_FIRSTNAME = '$parfirstname', PAR_CONTACT = '$parcontact', PAR_TYPE ='$gtype', MODE_PAY = '$paymode' WHERE (STUDENT.STUD_LASTNAME = '$slastname' AND STUDENT.STUD_FIRSTNAME = '$sfirstname' AND STUDENT.PAR_LASTNAME = '$plastname');";
          mysqli_query($MyConnection, $MyQuery);

          echo "<script>alert('Saved Successfully!');
              location = 'masterlist_student.php?slastname=$slastname';</script>";
    }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" type="image/png" href="uplogo.png"/>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADD STUDENT</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    


</head>
<body>
    <!-- LOGO HEADER END-->
     <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20">
                        <h1 class="nav navbar-left">  BATANG OBLE DAY CARE CENTER</h1>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
                          <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-plus"></i> ADD <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="form_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                   <li role="presentation"><a role="menuitem" tabindex="-1" href="form_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                              </ul>
                            </li>
                          <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> MASTERLIST <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                   <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <center><div class="container">
            <center><div class="row">
                <div class="col-md-12 col-sm-0 col-xs-0">
                   <div class="panel panel-info">
                        <div class="panel-heading">
                           Batang Oble Day Care Center Application Form <b>(STUDENTS)</b>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" name="myForm" method="POST" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
                                <div class="form-group row">
                                  <div class="container">
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Student Name</label>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "slastname" placeholder = "Last Name"> 
                                      </div>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "sfirstname" placeholder = "First Name"> 
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Sex</label>
                                      <div class="col-10 col-md-2">
                                        <select name="sex" class = "form-control">
                                          <option value="female">Female</option>
                                          <option value="male">Male</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-1 col-form-label">Age</label>
                                      <div class="col-8 col-md-2">
                                        <input class="form-control" name = "sage">
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                      <div class="col-8 col-md-3">
                                        <input class="form-control" name = "sbirthday" type="date">
                                      </div>
                                    </div>
                                  </div>
                                </div>      
                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Parent Name</label>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "plastname" placeholder = "Last Name"> 
                                    </div>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "pfirstname" placeholder = "First Name"> 
                                    </div>
                                </div>

                                <!--
                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Address</label>
                                  <div class="col-10 col-md-10">
                                    <input class="form-control" name = "saddress"> 
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">E-mail</label>
                                  <div class="col-10 col-md-10">
                                    <input class="form-control" name = "pemail"> 
                                  </div>
                                </div>
                                -->

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Contact Number</label>
                                  <div class="col-10 col-md-4">
                                    <input class="form-control" name = "pcontact"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Guardian</label>
                                  <div class="col-10 col-md-4">
                                    <select name="type_guardian" class = "form-control">
                                      <option value="faculty">Faculty</option>
                                      <option value="Admin/Reps">Admin/REPS</option>
                                      <option value="student">Student</option>
                                      <option value="Alumni">Alumni</option>
                                      <option value="Agency">Agency</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Payment Mode</label>
                                  <div class="col-10 col-md-2">
                                    <select name="payment_mode" class = "form-control">
                                      <option value="monthly">Monthly</option>
                                      <option value="drop-in">Drop-in</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Amount Paid</label>
                                  <div class="col-10 col-md-2">
                                    <input class="form-control" name="apaid"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Date Paid</label>
                                  <div class="col-10 col-md-2">
                                    <input class="form-control" name="dpaid" type = "date"> 
                                  </div>
                                </div>
                              </br>
                              </br>
                                <center><button class="btn" type="submit" name="save" value="save" id="button1" style="background-color: #C0C0C0; width: 150px; height: 60px; padding: 5px"><span>Save</span></button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div></center>
             <!--/.ROW-->
        </div></center>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   Designed by students of CMSC 128 (Semester 2, 2017-2018)
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>