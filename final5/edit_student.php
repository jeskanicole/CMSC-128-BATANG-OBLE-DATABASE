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
    $lastname = $_GET['lastname'];
    $firstname = $_GET['firstname'];

    $MySearchQuery = "SELECT * FROM STUDENT where (STUDENT.STUD_LASTNAME = '$lastname' AND STUDENT.STUD_FIRSTNAME = '$firstname')";
    
    $MyValues = $MyConnection -> query($MySearchQuery);

    if (($MyValues -> num_rows) > 0)
    {
      while ($MyResults = $MyValues -> fetch_assoc())
      {
        $yapp = $MyResults['APP_YR'];
        $lname = $MyResults['STUD_LASTNAME'];
        $fname =  $MyResults['STUD_FIRSTNAME'];
        $sex = $MyResults['STUD_SEX'];
        $birthday =$MyResults['STUD_BIRTHDAY'];
        $age = $MyResults['STUD_AGE'];
        $par_lname = $MyResults['PAR_LASTNAME'];
        $par_firstname = $MyResults['PAR_FIRSTNAME'];
        $contact = $MyResults['PAR_CONTACT'];
        $par_type = $MyResults['PAR_TYPE'];
        $mode_pay =  $MyResults['MODE_PAY'];
      }
    }

    if($_POST['save'])
    {
        $yearapp = $_POST['yapp'];
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
        mysqli_query($MyConnection, "UPDATE STUDENT SET APP_YR = '$yearapp', STUD_LASTNAME = '$studlastname', STUD_FIRSTNAME = '$studfirstname', STUD_SEX = '$studsex', STUD_BIRTHDAY = '$studbirthday', STUD_AGE = '$studage', PAR_LASTNAME = '$parlastname', PAR_FIRSTNAME = '$parfirstname', PAR_CONTACT = '$parcontact', PAR_TYPE = '$gtype', MODE_PAY = '$paymode'  where (STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname')");
        echo "<script>alert('Added Successfully!');
            location = 'masterlist_student.php';</script>";
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
                        <a href="index.php"><img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20"></a>
                        <h1 class="nav navbar-left fa-2x">  BATANG OBLE DAY CARE CENTER</h1>
                        <ul id="menu-top" class="nav nav-new navbar-nav navbar-right">
                          <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
                          <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-plus"></i> ADD <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu nav-new" role="menu" aria-labelledby="ddlmenuItem">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="form_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                   <li role="presentation"><a role="menuitem" tabindex="-1" href="form_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                              </ul>
                            </li>

                          <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> MASTERLIST <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu nav-new" role="menu" aria-labelledby="ddlmenuItem">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                   <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                              </ul>
                            </li>
                            <li><a href="search.php" class="menu-top-active"><i class="fa fa-search"></i> SEARCH</a></li>

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
                                      <label for="example-number-input" class="col-2 col-form-label">Application Year</label>
                                      <div class="col-10 col-md-4">
                                        <select name="sappyr" class = "form-control">
                                          <option value="2015">2015</option>
                                          <option value="2016">2016</option>
                                          <option value="2017">2018</option>
                                          <option value="2018">2019</option>
                                          <option value="2019">2020</option>
                                          <option value="2020">2021</option>
                                          <option value="2020">2022</option>
                                          <option value="2020">2023</option>
                                          <option value="2020">2024</option>
                                          <option value="2020">2025</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Date Started</label>
                                      <div class="col-8 col-md-4">
                                        <input class="form-control" name = "sdatestarted" type="date">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Semester</label>
                                      <div class="col-10 col-md-4">
                                        <select name="ssemester" class = "form-control">
                                          <option value="First">First</option>
                                          <option value="Second">Second</option>
                                          <option value="Midyear">Midyear</option>
                                          <option value="Not specified">Not specified</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Academic Year</label>
                                      <div class="col-10 col-md-4">
                                        <select name="sacadyear" class = "form-control">
                                          <option value="2014 - 2015">2014 - 2015</option>
                                          <option value="2015 - 2016">2015 - 2016</option>
                                          <option value="2016 - 2017">2016 - 2017</option>
                                          <option value="2017 - 2018">2017 - 2018</option>
                                          <option value="2018 - 2019">2018 - 2019</option>
                                          <option value="2019 - 2020">2019 - 2020</option>
                                          <option value="2020 - 2021">2020 - 2021</option>
                                          <option value="2021 - 2022">2021 - 2022</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label"> </label>
                                    </div>
                                    <br>
                                     <p class="indent"></p> <h3><b>CHILD'S INFORMATION</b></h3>
                                    <br>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Student Name</label>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "slastname" placeholder = "Last Name"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sfirstname" placeholder = "First Name"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "smiddleint" placeholder = "Middle Initial"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Nickname</label>
                                      <div class="col-10 col-md-3"> <input class="form-control" name = "snickname"> 
                                      </div>
                                      
                                      <label for="example-number-input" class="col-2 col-form-label">Address</label>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "saddress"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Sex</label>
                                      <div class="col-10 col-md-2">
                                        <select name="ssex" class = "form-control">
                                          <option value="Female">Female</option>
                                          <option value="Male">Male</option>
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
                                  
                                  <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Child's Schedule</label>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedtime" placeholder = "Time"> 
                                    </div>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedday" placeholder = "Day"> 
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label"> </label>
                                  </div> 


                                  <br>
                                  <p class="indent"></p> <h3><b>FAMILY BACKGROUND</b></h3>
                                  <br>
                                  <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Father's Name</label>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sflastname" placeholder = "Last Name"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sffirstname" placeholder = "First Name"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "sfmiddleint" placeholder = "Middle Initial"> 
                                      </div>
                                  </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <select name="sftype" class = "form-control">
                                      <option value="--">Not Applicable</option>
                                      <option value="Faculty">Faculty</option>
                                      <option value="Admin/Reps">Admin/REPS</option>
                                      <option value="Student">Student</option>
                                      <option value="Alumni">Alumni</option>
                                      <option value="Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sfoccupation"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfoffice"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfage"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sfbirthday" type="date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfcontact"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfemail"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Mother's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smlastname" placeholder = "Last Name"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smfirstname" placeholder = "First Name"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smmiddleint" placeholder = "Middle Initial"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <select name="smtype" class = "form-control">
                                      <option value="--">Not Applicable</option>
                                      <option value="Faculty">Faculty</option>
                                      <option value="Admin/Reps">Admin/REPS</option>
                                      <option value="Student">Student</option>
                                      <option value="Alumni">Alumni</option>
                                      <option value="Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "smoccupation"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smoffice"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smage"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "smbirthday" type="date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smcontact"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smemail"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Guardians's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sglastname" placeholder = "Last Name"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgfirstname" placeholder = "First Name"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgmiddleint" placeholder = "Middle Initial"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <select name="sgtype" class = "form-control">
                                      <option value="--">Not Applicable</option>
                                      <option value="Faculty">Faculty</option>
                                      <option value="Admin/Reps">Admin/REPS</option>
                                      <option value="Student">Student</option>
                                      <option value="Alumni">Alumni</option>
                                      <option value="Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sgoccupation"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgoffice"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgage"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sgbirthday" type="date">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgcontact"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Relationship to the Child</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgrelation"> 
                                </div>
                              </div>

                              <br>
                            <p class="indent"></p> <h3><b>MEDICAL BACKGROUND</b></h3>
                            <br>
                            <div class="form-group row">
                              <p class="indent"></p><b> 1. Does your child have any medication? If yes, explain. </b>
                            </div>

                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgone"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 2. Does your child have any allergies? If yes, specify.</b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgtwo"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 3. Does your child have any fears? If yes, specify.</b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgthree"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 4. Does your child have any sleeping time? If yes, write the time he/ she would sleep. </b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgfour"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 5. Does your child easily get frustrated? If yes, in what way? </b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgfive"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 6. Does your child have any other Psychological or Medical conditions? If yes, please explain.</b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgsix"> 
                                </div>
                            </div>

                            <div class="form-group row">
                              <p class="indent"></p><b> 7. Anything else about your child that the teacher should know? </b>
                            </div>
                            <div class="form-group row">
                             <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgseven"> 
                                </div>
                            </div>


                            <br>
                            <p class="indent"></p> <h3><b>CONTACT PERSON IN CASE OF EMERGENCY</b></h3>
                            <br>
                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Name</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "selastname" placeholder = "Last Name"> 
                              </div>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "sefirstname" placeholder = "First Name"> 
                              </div>
                              <div class="col-10 col-md-2"> <input class="form-control" name = "semiddleint" placeholder = "Middle Initial"> 
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Address</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "seaddress">
                              </div>
                              <label for="example-number-input" class="col-2 col-form-label">Contact Number</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "secontact">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Relation</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "serelation">
                              </div>
                            </div>

                            <br>
                            <p class="indent"></p> <h3><b>PAYMENT DETAILS</b></h3>
                            <br>
                            <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Payment Mode</label>
                                  <div class="col-10 col-md-2">
                                    <select name="spaymode" class = "form-control">
                                      <option value="Monthly">Monthly</option>
                                      <option value="Drop-in">Drop-in</option>
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