<?php
    session_start();
    error_reporting(0);
    
    //Server Credentials
    $MyServerName = "localhost";
    $MyUserName = "root";
    $MyPassword = "";

    //Database
    $MyDBName = 'batangoble_db';

    //Create Connection
    $MyConnection = mysqli_connect($MyServerName, $MyUserName, $MyPassword, $MyDBName);

    //Check Connection Status
    if ($MyConnection -> connect_error)
    {
        die("Connection Failed: ". $MyConnection -> connect_error);
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
    <title>Batang Oble Day Care Center</title>
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

    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20">
                        <h1 class="nav navbar-left">  BATANG OBLE DAY CARE CENTER</h1>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                          <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
   <center><div class="content-wrapper">
            <form class="form" action="query.php">
                <!-- Filter -->
                <div class="col-2 col-form-label">
                    <select name = "search_Filter" id = "sell" class = "form-control" onchange = "updateFields(this.value)">
                        <option value = "0">Student Name</option>
                        <option value = "1">SA Student Number</option>
                        <option value = "2">Application Year</option>
                        <option value = "3">Sex</option>
                    </select>
                </div>
            </br>
                <!-- Search Bar -->
                <div class="col-5 col-form-label" id = "search">
                    <input class = "form-control" type="search" id="search-input" name = "search_Query" placeholder="Search..."></input>
                </div>
                <!-- Sex Select -->
                <!-- Enter Button -->
                <button type="submit" class="btn btn-primary">Enter</button>
            </form>
        </div></center>

        <!-- Scripts -->
        <script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>