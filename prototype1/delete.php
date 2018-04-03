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
	
	$name = $_GET['name'];

	mysqli_query($MyConnection, "DELETE FROM STUDENT WHERE STUD_NAME = '$name'");

	header("Location: masterlist.php?type=$name");
?>