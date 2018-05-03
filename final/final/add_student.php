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

	$type = $_GET['type'];

	if($_POST['save'])
	{
		$nyapp = $_POST['yapp'];
		$nslastname = $_POST['slastname'];
		$nsfirstname = $_POST['sfirstname'];
		$nsex = $_POST['sex'];
		$nbirthday = $_POST['birthday'];
		$nage = $_POST['age'];
		$nplastname = $_POST['plastname'];
		$npfirstname = $_POST['pfirstname'];
		$ncontact = $_POST['contact'];
		$nemail = $_POST['email'];
		$nsnum = $_POST['snum'];



		$fixedName = mysqli_real_escape_string($MyConnection, $nsname);

		mysqli_query($MyConnection, "INSERT INTO STUDENT (APP_YR,STUD_LASTNAME, STUD_FIRSTNAME, STUD_SEX, STUD_BIRTHDAY, STUD_AGE, PAR_LASTNAME, PAR_FIRSTNAME, PARENT_CONTACT, PAYMENT_TYPE, DATE_APPLICATION) VALUES ('$nslastname', '$nsfirstname', '$nsex', '$nbirthday', '$nage', '$nplastname', '$npfirstname', '$ncontact', '$nemail');");

		

		echo "<script>alert('Added Successfully!');
			location = 'list.php?type=$type';</script>";
	}

?>
