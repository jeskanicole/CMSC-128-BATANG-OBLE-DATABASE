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

  	$lname = $_GET['slastname'];
  	$fname = $_GET['sfirstname'];
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
                            
                            <li><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> MASTERLIST <i class="fa fa-angle-down"></i></a>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                  <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student.php"><i class="fa fa-user"></i> STUDENT</a></li>
                                   <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_sa.php"><i class="fa fa-user"></i> STUDENT ASSISTANT</a></li>
                              </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"><i class="fa fa-arrow-circle-down"></i> EXPORT <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student_pdf.php"><i class="fa fa-file-pdf-o"></i>  TO PDF</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="masterlist_student_csv.php"><i class="fa fa-file-excel-o"></i>  TO EXCEL</a></li>
                                </ul>
                            </li>
                            <li><a href="search.php" class="menu-top-active"><i class="fa fa-search"></i> SEARCH</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
		<div class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $lname ?></h1>
						<h2><em>TRANSACTION HISTORY</em></h2>
						<br>
						<table class="table table-striped table-bordered table-hover">
							<thead>
				                <tr>
				                	<th>Payment Mode</th>
				                	<th>Amount Paid</th>
				                	<th>Date Paid</th>
	                                <th>Year Application</th>
	                                <th>Edit</th>
				                </tr>
			                </thead>
							<?php
								$MySearchQuery = "SELECT * FROM STUD_HISTORY WHERE STUD_LNAME = '$lname' and STUD_FNAME = '$fname'";
         	 					$MyValues = $MyConnection -> query($MySearchQuery);
         	 					if (($MyValues -> num_rows) > 0)
         	 					{
         	 						while ($MyResults = $MyValues -> fetch_assoc())
         	 						{
         	 							echo '<tr>';
         	 							echo '<td>'.$MyResults['PAYMENT_MODE'].'</td>';
										echo '<td>'.$MyResults['AMT_PAID'].'</td>';
										echo '<td>'.$MyResults['DATE_PAID'].'</td>';
										echo '<td>'.$MyResults['APP_YR'].'</a></td>';
										//echo '<td><a rel="facebox" href="edit_tran_info.php?paid='.$MyResults['AMT_PAID'].'&ornum='.$MyResults['OR_NUM'].'&bal='.$MyResults['OUT_BAL'].'">Edit</a></td></tr>';
										echo '<td><a rel="facebox" href="edit_student.php?name='.$Myresults->STUD_NAME.'">Edit</a></td>';
         	 						}
         	 					}
							?>
						</table>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
        <div class = "text-md-center">
			<p>
				<a href="<?php echo 'masterlist_student.php?type='.$type.''?>" title = "Let's go back!">&#8617 Go Back to the List</a>
			</p>
		</div>

		<script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>