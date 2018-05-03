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
		$nsastudnum  = $_POST['sasnum'];
		$nsalastname = $_POST['salname'];
        $nsafirstname = $_POST['safname'];
        $nsacourse = $_POST['sacse'];
        $nsacollege = $_POST['sacege'];
        $nsayear = $_POST['sayr'];
        $nsasex = $_POST['sasx'];
        $nsaaddress = $_POST['saadd'];
        $nsaemail = $_POST['saeadd'];
        $nsacontact = $_POST['sacont'];

		$fixedName = mysqli_real_escape_string($MyConnection, $nsname);

		mysqli_query($MyConnection, "INSERT INTO SA (SA_STUDNUM,SA_LASTNAME,SA_FIRSTNAME,SA_COURSE,SA_COLLEGE,SA_YEAR,SA_SEX,SA_ADDRESS,SA_EMAIL,SA_CONTACT) VALUES ('$nsastudnum','$nsalastname', '$nsafirstname', '$nsacourse', '$nsacollege', '$nsayear', '$nsasex', '$nsaaddress', '$nsaemail', '$nsacontact');");

		echo "<script>alert('Added Successfully!');
			location = 'list.php?type=$type';</script>";
	}

?>
