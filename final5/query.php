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

	$num = $_GET['num'];
	$name = $_GET['name'];
  	$type = $_GET['type'];	
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
	<!-- Page Contents -->

	<!-- Head -->
	<head>
		<meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	    <meta name="description" content="" />
	    <meta name="author" content="" />
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

	<!-- Body -->
	<body>
		<!-- Header -->
		<section class="menu-section">
	        <div class="container">
	            <div class="row ">
	                <div class="col-md-12">
	                    <div class="navbar-collapse collapse ">
	                        <img class="nav navbar-left" src="uplogo.png" width="75" height="75" hspace="20">
	                        <h1 class="nav navbar-left">  BATANG OBLE DAY CARE CENTER</h1>
	                        <ul id="menu-top" class="nav navbar-nav navbar-right">
	                          <li><a href="index.php" class="menu-top-active"><i class="fa fa-home"></i> HOME</a></li>
	                          <li><a href="form.php"><i class="fa fa-user"></i> ADD STUDENT</a></li>
	                          <li><a href="masterlist.php"><i class="fa fa-file-text-o"></i> MASTER LIST</a></li>

	                        </ul>
	                    </div>
	                </div>

	            </div>
	        </div>
	    </section>

		<?php
			$SearchFilter = $_REQUEST['search_Filter'];
 			$MySearchRequest = $_REQUEST['search_Query'];

 			if (isset($SearchFilter))
 			{	
 				if($SearchFilter == 0 && $MySearchRequest != "")
 				{
 					$MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_LASTNAME LIKE '%$MySearchRequest%' or STUDENT.STUD_FIRSTNAME LIKE '%$MySearchRequest%'; ";
 					$MyValues = $MyConnection -> query($MySearchQuery);

 					if (($MyValues -> num_rows) > 0)
 					{
 						echo "<div class=row> <div class=panel-body> <div class=table-responsive>";
 						$TableClass = "table table-striped table-bordered table-hover";
		                echo "<table class =".$TableClass.">";
		                echo
		                "
		              	 <thead>
			                <tr class = text-center>
			                	<th>Application Year</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Initial</th>
                                <th>Sex</th>
                                <th>Age</th>
                                <th>Dependent of (Father)</th>
                                <th>Dependent of (Mother)</th>
                                <th>Dependent of (Guardian)</th>
                                <th>Date Started</th>
                                <th>Pay</th>
                                <th>Edit</th>
			                </tr>
		                </thead>
		    			";
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
		                }
	                	echo "</table>";
	                	echo "</div> </div> </div>";
 					}

 					else
 					{
 						$EmptySearchResults = "Your search returned no matches.";
						$DivClass = "text-center py-5 jumbotron";
						echo "<div class = py-5><div class = ".$DivClass."><h3>".$EmptySearchResults."</h3></div></div>";
 					}
 				}

 				else if($SearchFilter == 1 && $MySearchRequest != "")
 				{
 					$MySearchQuery = "SELECT * FROM SA WHERE SA.SA_STUDNUM LIKE '%$MySearchRequest%';";

 					$MyValues = $MyConnection -> query($MySearchQuery);

 					if (($MyValues -> num_rows) > 0)
 					{
 						echo "<div class=row> <div class=panel-body> <div class=table-responsive>";
 						$TableClass = "table table-striped table-bordered table-hover text-center";
 						echo "<table class =".$TableClass.">";
		                echo
		                "
		              	 <thead>
			                <tr class = text-center>

                                            <th class = text-center>Student Number</th>

                                            <th class = text-center>Last Name</th>

                                            <th class = text-center>First Name</th>

                                            <th class = text-center>Middle Initial</th>

                                            <th class = text-center>Course</th>

                                            <th class = text-center>College</th>

                                            <th class = text-center>Year</th>

                                            <th class = text-center>Sex</th>

                                            <th class = text-center>Address</th>

                                            <th class = text-center>Email Address</th>

                                            <th class = text-center>Contact Number</th>

                                            <th class = text-center>Hours Work</th>

                                            <th class = text-center>Edit</th>

                                            

                                        </tr>
		                </thead>
		    			";

		                while ($MyResults = $MyValues -> fetch_assoc())
		                {
		                	echo '<tr>';
		                	echo '<td>'.$MyResults['SA_STUDNUM'].'</a></td>';

                            echo '<td>'.$MyResults['SA_LASTNAME'].'</a></td>';

                            echo '<td>'.$MyResults['SA_FIRSTNAME'].'</a></td>';

                            echo '<td>'.$MyResults['SA_MIDDLE'].'</a></td>';

                            echo '<td>'.$MyResults['SA_COURSE'].'</td>';

                            echo '<td>'.$MyResults['SA_COLLEGE'].'</td>';

                            echo '<td>'.$MyResults['SA_YEAR'].'</td>';

                            echo '<td>'.$MyResults['SA_SEX'].'</td>';

                            echo '<td>'.$MyResults['SA_ADDRESS'].'</td>';

                            echo '<td>'.$MyResults['SA_EMAIL'].'</td>';

                            echo '<td>'.$MyResults['SA_CONTACT'].'</td>';

                            echo '<td>'.$MyResults['SA_HOURS'].'</a></td>';

                            echo '<td><a rel="facebox" href="edit.php?sa='.$Myresults->STUD_NAME.'">Edit</a></td>';

                            //echo '<td><a rel="facebox" href="delete_sa.php?sanum='.$MyResults['SA_STUDNUM'].'" onClick="return deleteconfig()">Delete</a></td></tr>';
		                }

	                	echo "</table>";
	                	echo "</div> </div> </div>";
 					}

 					else
 					{
 						$EmptySearchResults = "Your search returned no matches.";
						$DivClass = "text-center py-5 jumbotron";
						echo "<div class = py-5><div class = ".$DivClass."><h3>".$EmptySearchResults."</h3></div></div>";
 					}
 				}

 				else if ($SearchFilter == 2 && $MySearchRequest != "")
 				{
 					$MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.APP_YR LIKE '%$MySearchRequest%';";

 					$MyValues = $MyConnection -> query($MySearchQuery);

 					if (($MyValues -> num_rows) > 0)
 					{
 						echo "<div class=row> <div class=panel-body> <div class=table-responsive>";
 						$TableClass = "table table-striped table-bordered table-hover";
		                echo "<table class =".$TableClass.">";
		                echo
		                "
		              	 <thead>
			                <tr class = text-center>
			                	<th>Application Year</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Initial</th>
                                <th>Sex</th>
                                <th>Age</th>
                                <th>Dependent of (Father)</th>
                                <th>Dependent of (Mother)</th>
                                <th>Dependent of (Guardian)</th>
                                <th>Date Started</th>
                                <th>Pay</th>
                                <th>Edit</th>
			                </tr>
		                </thead>
		    			";
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
		                }
	                	echo "</table>";
	                	echo "</div> </div> </div>";
 					}

 					else
 					{
 						$EmptySearchResults = "Your search returned no matches.";
						$DivClass = "text-center py-5 jumbotron";
						echo "<div class = py-5><div class = ".$DivClass."><h3>".$EmptySearchResults."</h3></div></div>";
 					}
 				}
 				else if($SearchFilter == 3)
 				{
 					$MySearchQuery = "SELECT * FROM STUDENT WHERE STUDENT.STUD_SEX LIKE '%$MySearchRequest%';";

 					$MyValues = $MyConnection -> query($MySearchQuery);

 					if (($MyValues -> num_rows) > 0)
 					{
 						echo "<div class=row> <div class=panel-body> <div class=table-responsive>";
 						$TableClass = "table table-striped table-bordered table-hover";
		                echo "<table class =".$TableClass.">";
		                echo
		                "
		              	 <thead>
			                <tr class = text-center>
			                	<th>Application Year</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Middle Initial</th>
                                <th>Sex</th>
                                <th>Age</th>
                                <th>Dependent of (Father)</th>
                                <th>Dependent of (Mother)</th>
                                <th>Dependent of (Guardian)</th>
                                <th>Date Started</th>
                                <th>Pay</th>
                                <th>Edit</th>
			                </tr>
		                </thead>
		    			";
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
		                }
	                	echo "</table>";
	                	echo "</div> </div> </div>";
 					}

 					else
 					{
 						$EmptySearchResults = "Your search returned no matches.";
						$DivClass = "text-center py-5 jumbotron";
						echo "<div class = py-5><div class = ".$DivClass."><h3>".$EmptySearchResults."</h3></div></div>";
 					}
 				}

 				else
 				{
 					$EmptySearchResults = "Your search returned no matches.";
					$DivClass = "text-center py-5 jumbotron";
					echo "<div class = py-5><div class = ".$DivClass."><h3>".$EmptySearchResults."</h3></div></div>";
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
    	 <!-- Footer -->
        <div class = "text-md-center">
			<p>
				<a href = "search.php" title = "Let's go back!">&#8617 Go Back to the Search Page</a>
			</p>
		</div>

		<script src="scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  		<script src="scripts/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  		<script src="scripts/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>

    <!-- Close Database Connection -->
    <?php
    	mysqli_close($MyConnection);
    ?>
</html>