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
		$namt_paid = $_POST['amt_paid'];
		$ndate_paid = $_POST['date_paid'];
		$pay_mode = $_POST['pay_mode'];
		$remarks = $_POST['remarks'];

			mysqli_query($MyConnection, "UPDATE STUDENT SET MODE_PAY = $pay_mode where (STUDENT.STUD_LASTNAME = '$lname' AND STUDENT.STUD_FIRSTNAME = '$fname')");

			//mysql_query("UPDATE BAL_HIST SET OUT_BAL = 0 WHERE STUD_NUM = '$num' and LOAN_TYPE = '$type'");

			mysqli_query($MyConnection, "INSERT INTO STUD_HISTORY (STUD_LNAME, STUD_FNAME, PAYMENT_MODE, AMT_PAID, DATE_PAID, APP_YEAR) VALUES ('$lastname', '$firstname', '$pay_mode', '$namt_paid', '$ndate_paid', '$yapp')");


			echo "<script>alert('Paid Successfully!'); location = 'history.php?lname=$lname&fname=$fname';</script>";
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
    <title>STUDENT PAYMENT</title>
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
                        </ul>
                    </div>
                </div>
            </div>
    </section>
		<!-- Payment Form-->
		<div class="container">
			<div class="dropdown-divider"></div>
			<div class="dropdown-divider"></div>
		</div>
		<h2 class="text-center py-2">Student Information</h2>
		<div class="container">
			<table class="table-hover table">
				<thead class="text-center">
					<tr>
						<th><center>Last Name</center></th>
						<th width="300 px"><center>First Name</center></th>
						<th><center>Sex</center></th>
						<th width="300 px"><center>Mode of Payment</center></th>
						<th><center>Application year</center></th>
					</tr>
				</thead>
				<tr class="text-center">
					<td><?php echo $lname; ?></td>
					<td><?php echo $fname; ?></td>
					<td><?php echo $sex; ?></td>
					<td><?php echo $mode_pay; ?></td>
					<td><?php echo $yapp; ?></td>
				</tr>
			</table>
		</div>

		<div class="container">
			<div class="dropdown-divider"></div>
			<div class="dropdown-divider"></div>
		</div>
	</br>
	</br>
		<!-- Payment Form -->
		<h2 class="text-center py-2">Payment Information</h2>
		<center>
		<form class="form-signin py-3" name="myForm" method="POST" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
			<div class="container">
				<div class="form-group row">
					<div class="form-group row">
                      <label for="example-number-input" class="col-2 col-form-label">Payment Mode</label>
                      <div class="col-10 col-md-2">
                        <select name="pay_mode" class = "form-control">
                          <option value="monthly">Monthly</option>
                          <option value="drop-in">Drop-in</option>
                        </select>
                      </div>
                      <label for="example-number-input" class="col-2 col-form-label">Amount Paid</label>
                      <div class="col-10 col-md-2">
                        <input class="form-control" name="amt_paid"> 
                      </div>
                      <label for="example-number-input" class="col-2 col-form-label">Date Paid</label>
                      <div class="col-10 col-md-2">
                        <input class="form-control" name="date_paid" type = "date"> 
                      </div>
                    </div>
				</div>
				<div class="form-group-row">
					<div class="form-group text-center">
						<label for="date" class="control-label text-center">Payment Remarks</label><br>
						<textarea class="form-control" id="exampleTextarea" rows="2" name="remarks" required pattern = "^.{1,200}$" placeholder="200 Characters Only"></textarea>
					</div>
				</div>
			</div>
			<div class="row py-2">
				<div class="col-md-12">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center">
								<center>
									<button class="btn" type="submit" name="save" value="save" id="button1" style="background-color: #C0C0C0; width: 150px; height: 60px; padding: 5px">
										<span>Save</span>
									</button>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</center>

		<!-- Footer -->
		<div class = "text-md-center">
			<p>
				<a href = "<?php 
					echo 'list.php?type='.$type.''
				?>"
				title = "Let's go back!">&#8617; Go Back to the List</a>
			</p>
		</div>

		<!-- Scripts and Additional Styles-->
		<script type="text/javascript" src="scripts/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>
		<script>
			$(document).ready(function()
			{
				var date_input=$('input[name="date_paid"]'); //our date input has the name "date"
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				date_input.datepicker({
					format: 'yyyy-mm-dd',
					container: container,
					todayHighlight: true,
					autoclose: true,
				})
			})
		</script>
		<script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<script type="text/javascript" src="scripts/formden.js"></script>
		<link rel="stylesheet" href="css/bootstrap-iso.css" />
		<style>
			.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form
			{
				font-family: Arial, Helvetica, sans-serif;
				color: black;
			}

			.bootstrap-iso form button, .bootstrap-iso form button:hover
			{
				color: white !important;
			}

			.asteriskField
			{
				color: red;
			}
		</style>
	</body>
</html>