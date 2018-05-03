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
	
	$sanum = $_GET['sanum'];
	

	mysqli_query($MyConnection, "DELETE FROM SA WHERE (SA.SA_STUDNUM = '$sanum')");

	header("Location: masterlist_sa.php?type=$sanum");
?>