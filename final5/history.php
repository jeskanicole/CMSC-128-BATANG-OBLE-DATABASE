<?php

  session_start();
  error_reporting(0);

  //Server Credentials
  $MyServerName = "localhost";
  $MyUserName = "root";
  $MyPassword = "";

  //Database
  $MyDBName = 'batangoble_db';

  $MyConnection = mysqli_connect($MyServer, $MyUserName, $MyPassword, $MyDBName);

  $lname = $_GET['lname'];
  $fname = $_GET['fname'];
  $paymode = $_GET['mode_pay'];
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
    <title>STUDENT HISTORY</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <a href="index.php"><img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20"></a>
                        <h1 class="nav navbar-left fa-2x">  BATANG OBLE DAY CARE CENTER</h1>
                        <ul id="menu-top" class="nav nav-new navbar-nav navbar-right">
                          <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
                            <li><a href="search.php" class="menu-top-active"><i class="fa fa-search"></i> SEARCH</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container">
      <div class="dropdown-divider"></div>
      <div class="dropdown-divider"></div>
    </div>
  
    <h1 class="jumbotron-fluid text-center py-4" style="font-size: 50px"><em>Student History</em></h1>
    <center><div class="container">
            <center><div class="row">
                <div class="col-md-12 col-sm-0 col-xs-0">
                   <div class="panel panel-info">
                        <div class="panel-heading">
                           <h2>STUDENT INFORMATION</h2>
                        </div>
                        <div class="panel-body">
                          <div class="panel-heading">
                             <h2>Application Information</h2>
                            </div>
                              <?php
                                $MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        $nsappyr = $MyResults['APP_YR'];
                                        $nsdatestarted = $MyResults['DATE_STARTED'];
                                        $nssemester = $MyResults['STUD_SEMESTER'];
                                        $nsacadyear = $MyResults['STUD_ACADYEAR'];
                                    }
                                  }
                              ?>
                              <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Application Year</label>
                                      <div class="col-10 col-md-4">
                                        <input class="form-control" name = "sappyr" value = "<?php echo $nsappyr; ?>"> 
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Date Started</label>
                                      <div class="col-8 col-md-4">
                                        <input class="form-control" name = "sdatestarted" type="date" value = "<?php echo $nsdatestarted    ; ?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Semester</label>
                                      <div class="col-10 col-md-4">
                                        <input class="form-control" name = "ssemester" value = "<?php echo $nssemester; ?>"> 
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Academic Year</label>
                                      <div class="col-10 col-md-4">
                                        <input class="form-control" name = "sacadyear" value = "<?php echo $nsacadyear; ?>"> 
                                      </div>
                                    </div>
                          <div class="panel-heading">
                             <h2>Personal Data</h2>
                            </div>
                              <?php
                                $MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        $nslastname = $MyResults['STUD_LASTNAME'];
                                        $nsfirstname = $MyResults['STUD_FIRSTNAME'];
                                        $nsmiddleint = $MyResults['STUD_MIDDLEINT'];
                                        $nsnickname = $MyResults['STUD_NICKNAME'];
                                        $nsbirthday = $MyResults['STUD_BIRTHDAY'];
                                        $nsaddress = $MyResults['STUD_ADDRESS'];
                                        $nsage = $MyResults['STUD_AGE'];
                                        $nssex = $MyResults['STUD_SEX'];
                                        $nsschedtime = $MyResults['STUD_SCHEDTIME'];
                                        $nsschedday = $MyResults['STUD_SCHEDDAY'];
                                    }
                                  }
                              ?>
                              <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Student Name</label>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "slastname" value = "<?php echo $nslastname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sfirstname" value = "<?php echo $nsfirstname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "smiddleint" value = "<?php echo $nsmiddleint; ?>"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Nickname</label>
                                      <div class="col-10 col-md-3"> <input class="form-control" name = "snickname" value = "<?php echo $nsnickname; ?>"> 
                                      </div>
                                      
                                      <label for="example-number-input" class="col-2 col-form-label">Address</label>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "saddress" value = "<?php echo $nsaddress; ?>"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Sex</label>
                                      <div class="col-10 col-md-2">
                                         <input class="form-control" name = "ssex" value = "<?php echo $nssex; ?>"> 
                                      </div>
                                      <label for="example-number-input" class="col-1 col-form-label">Age</label>
                                      <div class="col-8 col-md-2">
                                        <input class="form-control" name = "sage" value = "<?php echo $nsage; ?>">
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                      <div class="col-8 col-md-3">
                                        <input class="form-control" name = "sbirthday" type="date" value = "<?php echo $nsbirthday; ?>">
                                      </div>
                                    </div>
                                  
                                  <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Child's Schedule</label>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedtime" value = "<?php echo $nsschedtime; ?>"> 
                                    </div>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedday" value = "<?php echo $nsschedday; ?>"> 
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label"> </label>
                                  </div> 

                             <div class="panel-heading">
                             <h2>Family Background</h2>
                            </div>
                            <?php
                                $MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        $nsflastname = $MyResults['FATHER_LASTNAME'];
                                        $nsffirstname = $MyResults['FATHER_FIRSTNAME'];
                                        $nsfmiddleint = $MyResults['FATHER_MIDDLEINT'];
                                        $nsftype = $MyResults['FATHER_TYPE'];
                                        $nsfage = $MyResults['FATHER_AGE'];
                                        $nsfbirthday = $MyResults['FATHER_BIRTHDAY'];
                                        $nsfoccupation = $MyResults['FATHER_OCCUPATION'];
                                        $nsfoffice = $MyResults['FATHER_OFFICE'];
                                        $nsfcontact = $MyResults['FATHER_CONTACT'];
                                        $nsfemail = $MyResults['FATHER_EMAIL'];

                                        $nsmlastname = $MyResults['MOTHER_LASTNAME'];
                                        $nsmfirstname = $MyResults['MOTHER_FIRSTNAME'];
                                        $nsmmiddleint = $MyResults['MOTHER_MIDDLEINT'];
                                        $nsmtype = $MyResults['MOTHER_TYPE'];
                                        $nsmage = $MyResults['MOTHER_AGE'];
                                        $nsmbirthday = $MyResults['MOTHER_BIRTHDAY'];
                                        $nsmoccupation = $MyResults['MOTHER_OCCUPATION'];
                                        $nsmoffice = $MyResults['MOTHER_OFFICE'];
                                        $nsmcontact = $MyResults['MOTHER_CONTACT'];
                                        $nsmemail = $MyResults['MOTHER_EMAIL'];

                                        $nsglastname = $MyResults['GUARDIAN_LASTNAME'];
                                        $nsgfirstname = $MyResults['GUARDIAN_FIRSTNAME'];
                                        $nsgmiddleint = $MyResults['GUARDIAN_MIDDLEINT'];
                                        $nsgtype = $MyResults['GUARDIAN_TYPE'];
                                        $nsgage = $MyResults['GUARDIAN_AGE'];
                                        $nsgbirthday = $MyResults['GUARDIAN_BIRTHDAY'];
                                        $nsgoccupation = $MyResults['GUARDIAN_OCCUPATION'];
                                        $nsgoffice = $MyResults['GUARDIAN_OFFICE'];
                                        $nsgcontact = $MyResults['GUARDIAN_CONTACT'];
                                        $nsgrelation = $MyResults['GUARDIAN_RELATION'];
                                    }
                                  }
                              ?>
                              <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Father's Name</label>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sflastname" value = "<?php echo $nsflastname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sffirstname" value = "<?php echo $nsffirstname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "sfmiddleint" value = "<?php echo $nsfmiddleint; ?>"> 
                                      </div>
                                  </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <input class="form-control" name = "sftype" value = "<?php echo $nsftype; ?>"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sfoccupation" value = "<?php echo $nsfoccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfoffice" value = "<?php echo $nsfoffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfage" value = "<?php echo $nsfage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sfbirthday" type="date" value = "<?php echo $nsfbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfcontact" value = "<?php echo $nsfcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfemail" value = "<?php echo $nsfemail; ?>"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Mother's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smlastname" value = "<?php echo $nsmlastname; ?>"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smfirstname" value = "<?php echo $nsmfirstname; ?>"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smmiddleint" value = "<?php echo $nsmmiddleint; ?>"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                     <input class="form-control" name = "smtype" value = "<?php echo $nsmtype; ?>"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "smoccupation" value = "<?php echo $nsmoccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smoffice" value = "<?php echo $nsmoffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smage" value = "<?php echo $nsmage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "smbirthday" type="date" value = "<?php echo $nsmbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smcontact" value = "<?php echo $nsmcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smemail" value = "<?php echo $nsmemail; ?>"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Guardians's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sglastname" value = "<?php echo $nsglastname; ?>"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgfirstname" value = "<?php echo $nsgfirstname; ?>"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgmiddleint" value = "<?php echo $nsgmiddleint; ?>"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <input class="form-control" name = "sgtype" value = "<?php echo $nsgtype; ?>"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sgoccupation" value = "<?php echo $nsgoccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgoffice" value = "<?php echo $nsgoffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgage" value = "<?php echo $nsgage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sgbirthday" type="date" value = "<?php echo $nsgbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgcontact" value = "<?php echo $nsgcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Relationship to the Child</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgrelation" value = "<?php echo $nsgrelation; ?>"> 
                                </div>
                              </div>
                            
                            <div class="panel-heading">
                             <h2>Medical Background</h2>
                            </div>
                              <?php
                                $MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        $nsmedicalbgone = $MyResults['MEDICALBG_ONE'];
                                        $nsmedicalbgtwo = $MyResults['MEDICALBG_TWO'];
                                        $nsmedicalbgthree = $MyResults['MEDICALBG_THREE'];
                                        $nsmedicalbgfour = $MyResults['MEDICALBG_FOUR'];
                                        $nsmedicalbgfive = $MyResults['MEDICALBG_FIVE'];
                                        $nsmedicalbgsix = $MyResults['MEDICALBG_SIX'];
                                        $nsmedicalbgseven = $MyResults['MEDICALBG_SEVEN'];
                                    }
                                  }
                              ?>
                              <div class="form-group row">
                              <p class="indent"></p><b> 1. Does your child have any medication? If yes, explain. </b>
                              </div>

                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgone" value = "<?php echo $nsmedicalbgone; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 2. Does your child have any allergies? If yes, specify.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgtwo" value = "<?php echo $nsmedicalbgtwo; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 3. Does your child have any fears? If yes, specify.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgthree" value = "<?php echo $nsmedicalbgthree; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 4. Does your child have any sleeping time? If yes, write the time he/ she would sleep. </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgfour" value = "<?php echo $nsmedicalbgfour; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 5. Does your child easily get frustrated? If yes, in what way? </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgfive" value = "<?php echo $nsmedicalbgfive; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 6. Does your child have any other Psychological or Medical conditions? If yes, please explain.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgsix" value = "<?php echo $nsmedicalbgsix; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 7. Anything else about your child that the teacher should know? </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smedicalbgseven" value = "<?php echo $nsmedicalbgseven; ?>"> 
                                  </div>
                              </div>

                              <div class="panel-heading">
                             <h2>Contact Person in Case of Emergency</h2>
                            </div>
                              <?php
                                $MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        $nselastname = $MyResults['EMER_LASTNAME'];
                                        $nsefirstname = $MyResults['EMER_FIRSTNAME'];
                                        $nsemiddleint = $MyResults['EMER_MIDDLEINT'];
                                        $nseaddress = $MyResults['EMER_ADDRESS'];
                                        $nsecontact = $MyResults['EMER_CONTACT'];
                                        $nserelation = $MyResults['EMER_RELATION'];
                                    }
                                  }
                              ?>
                              <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Name</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "selastname" value = "<?php echo $nselastname; ?>"> 
                              </div>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "sefirstname" value = "<?php echo $nsefirstname; ?>"> 
                              </div>
                              <div class="col-10 col-md-2"> <input class="form-control" name = "semiddleint" value = "<?php echo $nsemiddleint; ?>"> 
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Address</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "seaddress" value = "<?php echo $nseaddress; ?>">
                              </div>
                              <label for="example-number-input" class="col-2 col-form-label">Contact Number</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "secontact" value = "<?php echo $nsecontact; ?>">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Relation</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "serelation" value = "<?php echo $nserelation; ?>">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></center>
             <!--/.ROW-->
        </div></center>
    </div>
        <center><div class="container">
            <center><div class="row">
                <div class="col-md-12 col-sm-0 col-xs-0">
                   <div class="panel panel-info">
                        <div class="panel-heading">
                           <h2> Payment History </h2>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover text-center">
                              <thead>
                                <tr class = "text-center">
                                  <th>Last Name</th>
                                  <th>First Name</th>
                                  <th>Middle Initial</th>
                                  <th>Payment Mode</th>
                                  <th>Amount Paid</th>
                                  <th>Date Paid</th>
                                  <th>Application Year</th>
                                  <th>OR Num</th>
                                </tr>
                              </thead>
                             <?php
                                $MySearchQuery = "SELECT * FROM STUD_HISTORY WHERE STUD_HISTORY.STUD_LNAME = '$lname' AND STUD_HISTORY.STUD_FNAME = '$fname'";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                    if (($MyValues -> num_rows) > 0)
                                    {
                                      while ($MyResults = $MyValues -> fetch_assoc())
                                      {
                                        echo '<tr>';
                                        echo '<td>'.$MyResults['STUD_LNAME'].'</td>';
                                        echo '<td>'.$MyResults['STUD_FNAME'].'</td>';
                                        echo '<td>'.$MyResults['STUD_MIDINT'].'</td>';
                                        echo '<td>'.$MyResults['PAYMENT_MODE'].'</td>';
                                        echo '<td>&#8369;'.$MyResults['AMT_PAID'].'</td>';
                                        echo '<td>'.$MyResults['DATE_PAID'].'</td>';
                                        echo '<td>'.$MyResults['APP_YEAR'].'</td>';
                                        echo '<td>'.$MyResults['OR_NUM'].'</td>';
                                    }
                                  }
                              ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div></center>
             <!--/.ROW-->
        </div></center>
    <!-- Footer -->
        <div class = "text-md-center">
      <p>
        <a href="<?php echo 'masterlist_student.php?type='.$type.''?>" title = "Let's go back!">&#8617; Go Back to the List</a>
      </p>
    </div>

    <script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>