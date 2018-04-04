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
    $type = $_GET['type'];
    if($_POST['save'])
    {
        $salastname = $_POST['salastname'];
        $safirstname = $_POST['safirstname'];
        $sastudnum  = $_POST['sastudnum'];
        $sacourse = $_POST['sacourse'];
        $sacollege = $_POST['sacollege'];
        $sayear = $_POST['sayear'];
        $sasex = $_POST['sasex'];
        $saaddress = $_POST['saaddress'];
        $saemail = $_POST['saemail'];
        $sacontact = $_POST['sacontact'];
        $sahours = $_POST['sahours'];

        mysqli_query($MyConnection, "INSERT INTO SA (SA_LASTNAME, SA_FIRSTNAME, SA_STUDNUM, SA_COURSE, SA_COLLEGE, SA_YEAR, SA_SEX, SA_ADDRESS, SA_EMAIL, SA_CONTACT, SA_EMAIL, SA_HOURS) VALUES ('$salastname', '$safirstname', '$sastudnum','$sacourse','$sacollege','$sayear', '$sasex', '$saaddress','$saemail', '$sacontact', '$sahours');");
        echo "<script>alert('Added Successfully!');
            location = 'masterlist_sa.php';</script>";
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
                           Batang Oble Day Care Center Application Form <b>(STUDENT ASSISTANTS)</b>
                        </div>
                        <div class="panel-body">
                            <form class="form-signin" name="myForm" method="POST" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
                                <div class="form-group row">
                                  <div class="container">
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Student Name</label>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "salastname" placeholder = "Last Name"> 
                                      </div>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "safirstname" placeholder = "First Name"> 
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Student Number</label>
                                        <div class="col">
                                          <input class="form-control" name="sastudnum" required pattern ="\d{4}[-]\d{5}" placeholder="XXXX-XXXXX">
                                        </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Course</label>
                                        <div class="col-10 col-md-6">
                                          <input class="form-control" name="sacourse" required placeholder="Undergraduate Degree/Graduate Degree" pattern="^.{1,35}$">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">College</label>
                                        <div class="col">
                                          <select name="sacollege" class="form-control">
                                            <option value="CAC">CAC</option>
                                            <option value="CS">CS</option>
                                            <option value="CSS">CSS</option>
                                          </select>
                                        </div>
                                        <label for="example-number-input" class="col-form-label">Year</label>
                                          <div class="col">
                                            <select name="sayear" class = "form-control">
                                              <option value = "1ST">1st Year</option>
                                              <option value = "2ND">2nd Year</option>
                                              <option value = "3RD">3rd Year</option>
                                              <option value = "4TH">4th Year</option>
                                              <option value = "OTHERS">Others</option>
                                            </select>
                                          </div>
                                        <label for="example-number-input" class="col-2 col-form-label">Sex</label>
                                          <div class="col">
                                            <select name="sasex" class = "form-control">
                                              <option value="female">Female</option>
                                              <option value="male">Male</option>
                                            </select>
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Permanent Address</label>
                                        <div class="col">
                                        <input class="form-control" name="saaddress" required placeholder="Complete Address" pattern="^.{1,200}$">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">E-mail Address</label>
                                              <div class="col">
                                                  <input class="form-control" type="email" id="email-input" name="saemail" placeholder="example@website.com">
                                              </div>
                                        <label for="example-number-input" class="col-2 col-form-label">Contact Number</label>
                                          <div class="col">
                                            <input class="form-control" name="sacontact" required pattern = "^(0\d{10})$|^(\d{7})$" placeholder="7-Digit Landline/11-Digit Cellular">
                                          </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-number-input" class="col-2 col-form-label">Hours Worked: </label>
                                              <div class="col">
                                                  <input class="form-control" type="email" id="email-input" name="sahours">
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