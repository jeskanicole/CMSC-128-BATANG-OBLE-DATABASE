﻿<?php
    session_start();
    error_reporting(0);

    //Server Credentials
    $MyServerName = "localhost";
    $MyUserName = "root";
    $MyPassword = "";

    //Database
    $MyDBName = 'batangoble_db';

    $MyConnection = mysqli_connect($MyServer, $MyUserName, $MyPassword, $MyDBName);
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
    <title>STUDENT MASTER LIST</title>
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
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> EXPORT <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu nav-new" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student_pdf.php"><i class="fa fa-file-pdf-o"></i>  TO PDF</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student_csv.php"><i class="fa fa-file-excel-o"></i>  TO EXCEL</a></li>
                                </ul>
                            <li><a href="search.php" class="menu-top-active"><i class="fa fa-search"></i> SEARCH</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">STUDENT MASTER LIST</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center">
                                    <thead>
                                        <tr class = "text-center">

                                            <th class = "text-center">Application Year</th>
                                            <th class = "text-center">Last Name</th>
                                            <th class = "text-center">First Name</th>
                                            <th class = "text-center">Middle Initial</th>
                                            <th class = "text-center">Sex</th>
                                            <th class = "text-center">Age</th>
                                            <th class = "text-center">Dependent of (Father)</th>
                                            <th class = "text-center">Dependent of (Mother)</th>
                                            <th class = "text-center">Dependent of (Guardian)</th>
                                            <th class = "text-center">Date Started</th>



                                            <th class = "text-center">Pay</th>
                                            <th class = "text-center">Edit</th>
                                            

                                        </tr>
                                    </thead>
                                    
                                    <?php
                                    $MySearchQuery = "SELECT * FROM STUDENT";
                                    $MyValues = $MyConnection -> query($MySearchQuery);

                                        if (($MyValues -> num_rows) > 0)
                                        {
                                            while ($MyResults = $MyValues -> fetch_assoc())
                                            {
                                                
                                            
                                                echo '<tr>';

                                                echo '<td>'.$MyResults['APP_YR'].'</a></td>';
                                                echo '<td><a rel="facebox" href="history.php?lname='.$MyResults['STUD_LASTNAME'].'&fname='.$MyResults['STUD_FIRSTNAME'].'">'.$MyResults['STUD_LASTNAME'].'</a></td>'; //here
                                                echo '<td>'.$MyResults['STUD_FIRSTNAME'].'</a></td>';
                                                echo '<td>'.$MyResults['STUD_MIDDLEINT'].'</a></td>';
                                                echo '<td>'.$MyResults['STUD_SEX'].'</td>';
                                                echo '<td>'.$MyResults['STUD_AGE'].'</td>';
                                                echo '<td>'.$MyResults['FATHER_TYPE'].'</td>';
                                                echo '<td>'.$MyResults['MOTHER_TYPE'].'</td>';
                                                echo '<td>'.$MyResults['GUARDIAN_TYPE'].'</td>';
                                                echo '<td>'.$MyResults['DATE_STARTED'].'</a></td>';
                                            
                                               // echo '<td>'.$MyResults['MODE_PAY'].'</td>';
                                                
                                                echo '<td><a rel="facebox" href="payment_student.php?lastname='.$MyResults['STUD_LASTNAME'].'&firstname='.$MyResults['STUD_FIRSTNAME'].' &date_add='.$Myresults['DATE_ADDED'].'"><i class="fa fa-money" style="font-size:26px"></i></a></td>'; //here
                                                echo '<td><a rel="facebox" href="edit_student.php?lastname='.$MyResults['STUD_LASTNAME'].'&firstname='.$MyResults['STUD_FIRSTNAME'].'"><i class="fa fa-edit" style="font-size:26px"></i></a></td>'; //here                                                

                                               // echo '<td><a rel="facebox" href="delete_student.php?lastname='.$MyResults['STUD_LASTNAME'].'&firstname='.$MyResults['STUD_FIRSTNAME'].'" onClick="return deleteconfig()">Delete</a></td></tr>';

                                                
                                            }
                                        }
                                    ?>
                            <script type="text/javascript">
                                function deleteconfig()
                                {
                                    var del = confirm('Are you sure you want to delete this?');
                                    if(del == true)
                                    {
                                        alert ("Successfully Deleted!");
                                    }

                                    return del;
                                }
                            </script>
                                    
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
                </div>
            </div>
            
    </div>
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
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
