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
    <title>MASTERLIST</title>
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
               <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20">
                        <h1 class="nav navbar-left" > BATANG OBLE DAY CARE CENTER
                        </h1>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
                            <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-plus"></i> ADD <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="form_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                       <li role="presentation"><a role="menuitem" tabindex="-1" href="form_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                                  </ul>
                                </li>
                            
                            <li><a href="masterlist.php"><i class="fa fa-file-text-o"></i> MASTER LIST</a></li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> EXPORT <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.html"><i class="fa fa-file-pdf-o"></i>  TO PDF</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><i class="fa fa-file-excel-o"></i>  TO EXCEL</a></li>
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
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">MASTER LIST</h4>
                
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
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Application Year</th>
                                            <th>Last Name</th>
                                            <th>First Name</th>
                                            <th>Sex</th>
                                            <th>Birthday</th>
                                            <th>Age</th>
                                            <th>Last Name of Parent/Guardian</th>
                                            <th>First Name of Parent/Guardian</th>
                                            <th>Contact Number</th>
                                            <th>Parent/Guardian Type</th>
                                            <th>Mode of Payment</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
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
                                                echo '<td>'.$MyResults['STUD_LASTNAME'].'</a></td>';
                                                echo '<td>'.$MyResults['STUD_FIRSTNAME'].'</a></td>';
                                                //echo '<td>'.$MyResults['STUD_MIDDLEINT'].'</a></td>';
                                                echo '<td>'.$MyResults['STUD_SEX'].'</td>';
                                                echo '<td>'.$MyResults['STUD_BIRTHDAY'].'</td>';
                                                echo '<td>'.$MyResults['STUD_AGE'].'</td>';
                                                echo '<td>'.$MyResults['PAR_LASTNAME'].'</td>';
                                                echo '<td>'.$MyResults['PAR_FIRSTNAME'].'</td>';
                                                echo '<td>'.$MyResults['PAR_CONTACT'].'</td>';
                                                echo '<td>'.$MyResults['PAR_TYPE'].'</td>';
                                                echo '<td>'.$MyResults['MODE_PAY'].'</td>';
                                                echo '<td><a rel="facebox" href="edit.php?name='.$Myresults->STUD_NAME.'">Edit</a></td>';
                                                

                                                echo '<td><a rel="facebox" href="delete.php?lastname='.$MyResults['STUD_LASTNAME'].'&firstname='.$MyResults['STUD_FIRSTNAME'].'" onClick="return deleteconfig()">Delete</a></td></tr>';

                                                
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
