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
        $appyr = $MyResults['APP_YR'];
        $datestarted = $MyResults['DATE_STARTED'];
        $semester = $MyResults['STUD_SEMESTER'];
        $acadyear = $MyResults['STUD_ACADYEAR'];
        $lastname = $MyResults['STUD_LASTNAME'];
        $firstname = $MyResults['STUD_FIRSTNAME'];
        $middleint = $MyResults['STUD_MIDDLEINT'];
        $nickname = $MyResults['STUD_NICKNAME'];
        $birthday = $MyResults['STUD_BIRTHDAY'];
        $address = $MyResults['STUD_ADDRESS'];
        $age = $MyResults['STUD_AGE'];
        $sex = $MyResults['STUD_SEX'];
        $schedtime = $MyResults['STUD_SCHEDTIME'];
        $schedday = $MyResults['STUD_SCHEDDAY'];
        $flastname = $MyResults['FATHER_LASTNAME'];
        $ffirstname = $MyResults['FATHER_FIRSTNAME'];
        $fmiddleint = $MyResults['FATHER_MIDDLEINT'];
        $ftype = $MyResults['FATHER_TYPE'];
        $fage = $MyResults['FATHER_AGE'];
        $fbirthday = $MyResults['FATHER_BIRTHDAY'];
        $foccupation = $MyResults['FATHER_OCCUPATION'];
        $foffice = $MyResults['FATHER_OFFICE'];
        $fcontact = $MyResults['FATHER_CONTACT'];
        $femail = $MyResults['FATHER_EMAIL'];

        $mlastname = $MyResults['MOTHER_LASTNAME'];
        $mfirstname = $MyResults['MOTHER_FIRSTNAME'];
        $mmiddleint = $MyResults['MOTHER_MIDDLEINT'];
        $mtype = $MyResults['MOTHER_TYPE'];
        $mage = $MyResults['MOTHER_AGE'];
        $mbirthday = $MyResults['MOTHER_BIRTHDAY'];
        $moccupation = $MyResults['MOTHER_OCCUPATION'];
        $moffice = $MyResults['MOTHER_OFFICE'];
        $mcontact = $MyResults['MOTHER_CONTACT'];
        $memail = $MyResults['MOTHER_EMAIL'];

        $glastname = $MyResults['GUARDIAN_LASTNAME'];
        $gfirstname = $MyResults['GUARDIAN_FIRSTNAME'];
        $gmiddleint = $MyResults['GUARDIAN_MIDDLEINT'];
        $gtype = $MyResults['GUARDIAN_TYPE'];
        $gage = $MyResults['GUARDIAN_AGE'];
        $gbirthday = $MyResults['GUARDIAN_BIRTHDAY'];
        $goccupation = $MyResults['GUARDIAN_OCCUPATION'];
        $goffice = $MyResults['GUARDIAN_OFFICE'];
        $gcontact = $MyResults['GUARDIAN_CONTACT'];
        $grelation = $MyResults['GUARDIAN_RELATION'];
        $medicalbgone = $MyResults['MEDICALBG_ONE'];
        $medicalbgtwo = $MyResults['MEDICALBG_TWO'];
        $medicalbgthree = $MyResults['MEDICALBG_THREE'];
        $medicalbgfour = $MyResults['MEDICALBG_FOUR'];
        $medicalbgfive = $MyResults['MEDICALBG_FIVE'];
        $medicalbgsix = $MyResults['MEDICALBG_SIX'];
        $medicalbgseven = $MyResults['MEDICALBG_SEVEN'];

        $elastname = $MyResults['EMER_LASTNAME'];
        $efirstname = $MyResults['EMER_FIRSTNAME'];
        $emiddleint = $MyResults['EMER_MIDDLEINT'];
        $eaddress = $MyResults['EMER_ADDRESS'];
        $econtact = $MyResults['EMER_CONTACT'];
        $erelation = $MyResults['EMER_RELATION'];

        $paymode = $MyResults['MODE_PAY'];
        $amntpd = $MyResults['AMT_PAID'];
        $datepd= $MyResults['DATE_PAID'];
      }
    }

if($_POST['save'])
  {
    $nsappyear = $_POST['sappyr'];
    $nsdatestarted = $_POST['sdatestarted'];
    $nslastname = $_POST['slastname'];
    $nsfirstname = $_POST['sfirstname'];
    $nsmiddleint = $_POST['smiddleint'];
    $nsnickname = $_POST['snickname'];
    $nsbirthday = $_POST['sbirthday'];
    $nsaddress = $_POST['saddress'];
    $nsage = $_POST['sage'];
    $nssex = $_POST['ssex'];
    $nsschedtime = $_POST['sschedtime'];
    $nsschedday = $_POST['sschedday'];
    $nsflastname = $_POST['sflastname'];
    $nsffirstname = $_POST['sffirstname'];
    $nsfmiddleint = $_POST['sfmiddleint'];
    $nsftype = $_POST['sftype'];
    $nsfage = $_POST['sfage'];
    $nsfbirthday = $_POST['sfbirthday'];
    $nsfoccupation = $_POST['sfoccupation'];
    $nsfoffice = $_POST['sfoffice'];
    $nsfcontact = $_POST['sfcontact'];
    $nsfemail = $_POST['sfemail'];

    $nsmlastname = $_POST['smlastname'];
    $nsmfirstname = $_POST['smfirstname'];
    $nsmmiddleint = $_POST['smmiddleint'];
    $nsmtype = $_POST['smtype'];
    $nsmage = $_POST['smage'];
    $nsmbirthday = $_POST['smbirthday'];
    $nsmoccupation = $_POST['smoccupation'];
    $nsmoffice = $_POST['smoffice'];
    $nsmcontact = $_POST['smcontact'];
    $nsmemail = $_POST['smemail'];

    $nsglastname = $_POST['sglastname'];
    $nsgfirstname = $_POST['sgfirstname'];
    $nsgmiddleint = $_POST['sgmiddleint'];
    $nsgtype = $_POST['sgtype'];
    $nsgage = $_POST['sgage'];
    $nsgbirthday = $_POST['sgbirthday'];
    $nsgoccupation = $_POST['sgoccupation'];
    $nsgoffice = $_POST['sgoffice'];
    $nsgcontact = $_POST['sgcontact'];
    $nsgrelation = $_POST['sgrelation'];

    $nsmbone = $_POST['smbone'];
    $nsmbtwo = $_POST['smbtwo'];
    $nsmbthree = $_POST['smbthree'];
    $nsmbfour = $_POST['smbfour'];
    $nsmbfive = $_POST['smbfive'];
    $nsmbsix = $_POST['smbsix'];
    $nsmbseven = $_POST['smbseven'];

    $nselastname = $_POST['selastname'];
    $nsefirstname = $_POST['sefirstname'];
    $nsemiddleint = $_POST['semiddleint'];

    $nseaddress = $_POST['seaddress'];
    $nsecontact = $_POST['secontact'];
    $nserelation = $_POST['serelation'];

    $nsmodepay = $_POST['modepay'];


    $fixedName = mysqli_real_escape_string($MyConnection, $nsname);

    mysqli_query($MyConnection, "UPDATE STUDENT SET APP_YR = '$nsappyear', DATE_STARTED = '$nsdatestarted', STUD_LASTNAME = '$nslastname', STUD_FIRSTNAME = '$nsfirstname', STUD_MIDDLEINT = '$nsmiddleint', STUD_NICKNAME = '$nsnickname', STUD_BIRTHDAY = '$nsbirthday', STUD_ADDRESS = '$nsaddress', STUD_AGE = '$nsage', STUD_SEX = '$nssex', STUD_SCHEDTIME = '$nsschedtime', STUD_SCHEDDAY = '$nsschedday', FATHER_LASTNAME = '$nsflastname', FATHER_FIRSTNAME = '$nsffirstname', FATHER_MIDDLEINT = '$nsfmiddleint', FATHER_TYPE = '$nsftype', FATHER_AGE = '$nsfage', FATHER_BIRTHDAY = '$nsfbirthday', FATHER_OCCUPATION = '$nsfoccupation', FATHER_OFFICE = '$nsfoffice', FATHER_CONTACT = '$nsfcontact', FATHER_EMAIL = '$nsfemail', MOTHER_LASTNAME = '$nsmlastname', MOTHER_FIRSTNAME = '$nsmfirstname', MOTHER_MIDDLEINT = '$nsmmiddleint', MOTHER_TYPE = '$nsmtype', MOTHER_AGE = '$nsmage', MOTHER_BIRTHDAY = '$nsmbirthday', MOTHER_OCCUPATION = '$nsmoccupation', MOTHER_OFFICE = '$nsmoffice', MOTHER_CONTACT = '$nsmcontact', MOTHER_EMAIL= '$nsmemail', GUARDIAN_LASTNAME = '$nsglastname', GUARDIAN_FIRSTNAME = '$nsgfirstname', GUARDIAN_MIDDLEINT = '$nsgmiddleint', GUARDIAN_TYPE = '$nsgtype', GUARDIAN_AGE = '$nsgage', GUARDIAN_BIRTHDAY = '$nsgbirthday', GUARDIAN_OCCUPATION = '$nsgoccupation', GUARDIAN_OFFICE = '$nsgoffice', GUARDIAN_CONTACT = '$nsgcontact', GUARDIAN_RELATION = '$nsgrelation', MEDICALBG_ONE = '$nsmbone', MEDICALBG_TWO = '$nsmbtwo', MEDICALBG_THREE = '$nsmbthree', MEDICALBG_FOUR = '$nsmbfour', MEDICALBG_FIVE = '$nsmbfive', MEDICALBG_SIX = '$nsmbsix', MEDICALBG_SEVEN = '$nsmbseven', EMER_LASTNAME = '$nselastname', EMER_FIRSTNAME = '$nsefirstname', EMER_MIDDLEINT = '$nsemiddleint', EMER_ADDRESS = '$nseaddress', EMER_CONTACT = '$nsecontact', EMER_RELATION = '$nserelation', MODE_PAY = '$nsmodepay';");
    

    echo "<script>alert('Added Successfully!');
      location = 'masterlist_student.php?type=$type';</script>";
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
                                          <option <?php if ($appyr == "2015") echo 'selected' ; ?> value = "2015">2015</option>
                                          <option <?php if ($appyr == "2016") echo 'selected' ; ?> value = "2016">2016</option>
                                          <option <?php if ($appyr == "2017") echo 'selected' ; ?> value = "2017">2017</option>
                                          <option <?php if ($appyr == "2018") echo 'selected' ; ?> value = "2018">2018</option>
                                          <option <?php if ($appyr == "2019") echo 'selected' ; ?> value = "2019">2019</option>
                                          <option <?php if ($appyr == "2020") echo 'selected' ; ?> value = "2020">2020</option>
                                          <option <?php if ($appyr == "2021") echo 'selected' ; ?> value = "2021">2021</option>
                                          <option <?php if ($appyr == "2022") echo 'selected' ; ?> value = "2022">2022</option>
                                          <option <?php if ($appyr == "2023") echo 'selected' ; ?> value = "2023">2023</option>
                                          <option <?php if ($appyr == "2024") echo 'selected' ; ?> value = "2024">2024</option>
                                          <option <?php if ($appyr == "2025") echo 'selected' ; ?> value = "2025">2025</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Date Started</label>
                                      <div class="col-8 col-md-4">
                                        <input class="form-control" name = "sdatestarted" type="date" value = "<?php echo $datestarted; ?>">
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Semester</label>
                                      <div class="col-10 col-md-4">
                                        <select name="ssemester" class = "form-control">
                                          <option <?php if ($semester == "First") echo 'selected' ; ?> value = "First">First</option>
                                          <option <?php if ($semester == "Second") echo 'selected' ; ?> value = "Second">Second</option>
                                          <option <?php if ($semester == "Midyear") echo 'selected' ; ?> value = "Midyear">Midyear</option>
                                          <option <?php if ($semester == "Not specified") echo 'selected' ; ?> value = "Not specified">Not specified</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Academic Year</label>
                                      <div class="col-10 col-md-4">
                                        <select name="sacadyear" class = "form-control">
                                          <option <?php if ($acadyear == "2014 - 2015") echo 'selected' ; ?> value = "2014 - 2015">2014 - 2015</option>
                                          <option <?php if ($acadyear == "2015 - 2016") echo 'selected' ; ?> value = "2015 - 2016">2015 - 2016</option>
                                          <option <?php if ($acadyear == "2016 - 2017") echo 'selected' ; ?> value = "2016 - 2017">2016 - 2017</option>
                                          <option <?php if ($acadyear == "2017 - 2018") echo 'selected' ; ?> value = "2017 - 2018">2017 - 2018</option>
                                          <option <?php if ($acadyear == "2018 - 2019") echo 'selected' ; ?> value = "2018 - 2019">2018 - 2019</option>
                                          <option <?php if ($acadyear == "2019 - 2020") echo 'selected' ; ?> value = "2019 - 2020">2019 - 2020</option>
                                          <option <?php if ($acadyear == "2020 - 2021") echo 'selected' ; ?> value = "2020 - 2021">2020 - 2021</option>
                                          <option <?php if ($acadyear == "2021 - 2022") echo 'selected' ; ?> value = "2021 - 2022">2021 - 2022</option>
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
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "slastname" value = "<?php echo $lastname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sfirstname" value = "<?php echo $firstname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "smiddleint" value = "<?php echo $middleint; ?>"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Nickname</label>
                                      <div class="col-10 col-md-3"> <input class="form-control" name = "snickname" value = "<?php echo $nickname; ?>"> 
                                      </div>
                                      
                                      <label for="example-number-input" class="col-2 col-form-label">Address</label>
                                      <div class="col-10 col-md-5"> <input class="form-control" name = "saddress" value = "<?php echo $address; ?>"> 
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label for="example-number-input" class="col-2 col-form-label">Sex</label>
                                      <div class="col-10 col-md-2">
                                        <select name="ssex" class = "form-control">
                                          <option <?php if ($sex == "Female") echo 'selected' ; ?> value="Female">Female</option>
                                          <option <?php if ($sex == "Male") echo 'selected' ; ?> value="Male">Male</option>
                                        </select>
                                      </div>
                                      <label for="example-number-input" class="col-1 col-form-label">Age</label>
                                      <div class="col-8 col-md-2">
                                        <input class="form-control" name = "sage" value = "<?php echo $age; ?>">
                                      </div>
                                      <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                      <div class="col-8 col-md-3">
                                        <input class="form-control" name = "sbirthday" type="date" value = "<?php echo $birthday; ?>">
                                      </div>
                                    </div>
                                  
                                  <div class="form-group row">
                                    <label for="example-number-input" class="col-2 col-form-label">Child's Schedule</label>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedtime" value = "<?php echo $schedtime; ?>"> 
                                    </div>
                                    <div class="col-10 col-md-5"> <input class="form-control" name = "sschedday" value = "<?php echo $schedday; ?>"> 
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
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sflastname" value = "<?php echo $flastname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-4"> <input class="form-control" name = "sffirstname" value = "<?php echo $ffirstname; ?>"> 
                                      </div>
                                      <div class="col-10 col-md-2"> <input class="form-control" name = "sfmiddleint" value = "<?php echo $fmiddleint; ?>"> 
                                      </div>
                                  </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <select name="sftype" class = "form-control">
                                      <option <?php if ($ftype == "Not Applicable") echo 'selected' ; ?> value = "--">Not Applicable</option>
                                      <option <?php if ($ftype == "Faculty") echo 'selected' ; ?> value = "Faculty">Faculty</option>
                                      <option <?php if ($ftype == "Admin/REPS") echo 'selected' ; ?> value = "Admin/REPS">Admin/REPS</option>
                                      <option <?php if ($ftype == "Student") echo 'selected' ; ?> value = "Student">Student</option>
                                      <option <?php if ($ftype == "Alumni") echo 'selected' ; ?> value = "Alumni">Alumni</option>
                                      <option <?php if ($ftype == "Agency") echo 'selected' ; ?> value = "Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sfoccupation" value = "<?php echo $foccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfoffice" value = "<?php echo $foffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sfage" value = "<?php echo $fage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sfbirthday" type="date" value = "<?php echo $fbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfcontact" value = "<?php echo $fcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sfemail" value = "<?php echo $femail; ?>"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Mother's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smlastname" value = "<?php echo $mlastname; ?>"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smfirstname" value = "<?php echo $mfirstname; ?>"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smmiddleint" value = "<?php echo $mmiddleint; ?>"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                     <select name="smtype" class = "form-control">
                                      <option <?php if ($mtype == "Not Applicable") echo 'selected' ; ?> value = "--">Not Applicable</option>
                                      <option <?php if ($mtype == "Faculty") echo 'selected' ; ?> value = "Faculty">Faculty</option>
                                      <option <?php if ($mtype == "Admin/REPS") echo 'selected' ; ?> value = "Admin/REPS">Admin/REPS</option>
                                      <option <?php if ($mtype == "Student") echo 'selected' ; ?> value = "Student">Student</option>
                                      <option <?php if ($mtype == "Alumni") echo 'selected' ; ?> value = "Alumni">Alumni</option>
                                      <option <?php if ($mtype == "Agency") echo 'selected' ; ?> value = "Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "smoccupation" value = "<?php echo $moccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smoffice" value = "<?php echo $moffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "smage" value = "<?php echo $mage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "smbirthday" type="date" value = "<?php echo $mbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smcontact" value = "<?php echo $mcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "smemail" value = "<?php echo $memail; ?>"> 
                                </div>
                              </div>

                              <br>
                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Guardians's Name</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sglastname" value = "<?php echo $glastname; ?>"> 
                                </div>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgfirstname" value = "<?php echo $gfirstname; ?>"> 
                                </div>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgmiddleint" value = "<?php echo $gmiddleint; ?>"> 
                                </div>
                              </div>

                                <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Type of Employee</label>
                                  <div class="col-10 col-md-4">
                                    <select name="sgtype" class = "form-control">
                                      <option <?php if ($gtype == "Not Applicable") echo 'selected' ; ?> value = "--">Not Applicable</option>
                                      <option <?php if ($gtype == "Faculty") echo 'selected' ; ?> value = "Faculty">Faculty</option>
                                      <option <?php if ($gtype == "Admin/REPS") echo 'selected' ; ?> value = "Admin/REPS">Admin/REPS</option>
                                      <option <?php if ($gtype == "Student") echo 'selected' ; ?> value = "Student">Student</option>
                                      <option <?php if ($gtype == "Alumni") echo 'selected' ; ?> value = "Alumni">Alumni</option>
                                      <option <?php if ($gtype == "Agency") echo 'selected' ; ?> value = "Agency">Agency</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Occupation</label>
                                  <div class="col-10 col-md-4"> <input class="form-control" name = "sgoccupation" value = "<?php echo $goccupation; ?>"> 
                                  </div>
                                </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Office/Department</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgoffice" value = "<?php echo $goffice; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Age</label>
                                <div class="col-10 col-md-2"> <input class="form-control" name = "sgage" value = "<?php echo $gage; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Birthday</label>
                                <div class="col-8 col-md-2">
                                  <input class="form-control" name = "sgbirthday" type="date" value = "<?php echo $gbirthday; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="example-number-input" class="col-2 col-form-label">Contact</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgcontact" value = "<?php echo $gcontact; ?>"> 
                                </div>
                                <label for="example-number-input" class="col-2 col-form-label">Relationship to the Child</label>
                                <div class="col-10 col-md-4"> <input class="form-control" name = "sgrelation" value = "<?php echo $grelation; ?>"> 
                                </div>
                              </div>

                              <br>
                            <p class="indent"></p> <h3><b>MEDICAL BACKGROUND</b></h3>
                            <br>
                            <div class="form-group row">
                              <p class="indent"></p><b> 1. Does your child have any medication? If yes, explain. </b>
                              </div>

                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbone" value = "<?php echo $medicalbgone; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 2. Does your child have any allergies? If yes, specify.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbtwo" value = "<?php echo $medicalbgtwo; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 3. Does your child have any fears? If yes, specify.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbthree" value = "<?php echo $medicalbgthree; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 4. Does your child have any sleeping time? If yes, write the time he/ she would sleep. </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbfour" value = "<?php echo $medicalbgfour; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 5. Does your child easily get frustrated? If yes, in what way? </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbfive" value = "<?php echo $medicalbgfive; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 6. Does your child have any other Psychological or Medical conditions? If yes, please explain.</b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbsix" value = "<?php echo $medicalbgsix; ?>"> 
                                  </div>
                              </div>

                              <div class="form-group row">
                                <p class="indent"></p><b> 7. Anything else about your child that the teacher should know? </b>
                              </div>
                              <div class="form-group row">
                               <div class="col-10 col-md-12"> <input class="form-control" name = "smbseven" value = "<?php echo $medicalbgseven; ?>"> 
                                  </div>
                              </div>


                            <br>
                            <p class="indent"></p> <h3><b>CONTACT PERSON IN CASE OF EMERGENCY</b></h3>
                            <br>
                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Name</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "selastname" value = "<?php echo $elastname; ?>"> 
                              </div>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "sefirstname" value = "<?php echo $efirstname; ?>"> 
                              </div>
                              <div class="col-10 col-md-2"> <input class="form-control" name = "semiddleint" value = "<?php echo $emiddleint; ?>"> 
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Address</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "seaddress" value = "<?php echo $eaddress; ?>">
                              </div>
                              <label for="example-number-input" class="col-2 col-form-label">Contact Number</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "secontact" value = "<?php echo $econtact; ?>">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="example-number-input" class="col-2 col-form-label">Relation</label>
                              <div class="col-10 col-md-4"> <input class="form-control" name = "serelation" value = "<?php echo $erelation; ?>">
                              </div>
                            </div>

                            <br>
                            <p class="indent"></p> <h3><b>PAYMENT DETAILS</b></h3>
                            <br>
                            <div class="form-group row">
                                  <label for="example-number-input" class="col-2 col-form-label">Payment Mode</label>
                                  <div class="col-10 col-md-2">
                                    <select name="spaymode" class = "form-control">
                                      <option <?php if ($paymode == "Monthly") echo 'selected' ; ?> value = "Monthly">Monthly</option>
                                      <option <?php if ($paymode == "Drop-in") echo 'selected' ; ?> value="Drop-in">Drop-in</option>
                                    </select>
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Amount Paid</label>
                                  <div class="col-10 col-md-2">
                                    <input class="form-control" name="apaid" value = "<?php echo $amntpd; ?>"> 
                                  </div>
                                  <label for="example-number-input" class="col-2 col-form-label">Date Paid</label>
                                  <div class="col-10 col-md-2">
                                    <input class="form-control" name="dpaid" type = "date" value = "<?php echo $datepd; ?>"> 
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