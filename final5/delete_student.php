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
	$middleint = $_GET['middleint'];

	mysqli_query($MyConnection, "DELETE FROM STUDENT WHERE (STUDENT.STUD_LASTNAME = '$lastname' AND STUDENT.STUD_FIRSTNAME = '$firstname')");

	header("Location: masterlist_student.php?type=$lastname");
?>