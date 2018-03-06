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

	$studname = $_GET['name'];
	

	$MySearchQuery = "SELECT * FROM STUDENT WHERE (STUDENT.sname = '$studname')";
	
	$MyValues = $MyConnection -> query($MySearchQuery);

	if (($MyValues -> num_rows) > 0)
	{
		while ($MyResults = $MyValues -> fetch_assoc())
		{
			$studname = $_POST['sname'];
	        $studsex = $_POST['sex'];
	        $studage = $_POST['sage'];
	        $studbirthday = $_POST['sbirthday'];
	        $parname = $_POST['pname'];
	        $studaddress = $_POST['saddress'];
	        $parcontact = $_POST['pcontact'];
	        $paremail = $_POST['pemail'];
	        $gtype = $_POST['type-guardian'];
	        $paymode = $_POST['payment-mode'];
	        $amntpaid = $_POST['apaid'];
	        $datepaid= $_POST['dpaid'];
		}
	}

	mysqli_query($MyConnection, "INSERT INTO DATA_ARCHIVE (STUD_NAME, STUD_ADDRESS, STUD_SEX, STUD_COLLEGE, STUD_YEAR, STUD_COURSE, STUD_CONTACT, STUD_EMAIL, STUD_NUM, LOAN_TYPE, LOAN_YEAR, LOAN_SEM, LOAN_AMOUNT, OUT_BAL, REASON, DATE_ADDED) VALUES ('$sname','$address', '$sex', '$college', '$syear', '$course', '$contact', '$email', '$snum', '$type', '$year', '$sem', $amt_borrowed, $out_bal,'$reason', '$added');");

	mysqli_query($MyConnection, "DELETE FROM STUDENT WHERE (STUDENT.sname = '$studname')");
	
	//mysqli_query($MyConnection, "DELETE FROM BAL_HIST where (STUDENT.STUD_NUM = '$num' AND STUDENT.LOAN_TYPE = '$type' AND STUDENT.LOAN_YEAR = '$year' AND STUDENT.LOAN_SEM = '$sem'");
	
	header("Location: list.php?type=$type");
?>