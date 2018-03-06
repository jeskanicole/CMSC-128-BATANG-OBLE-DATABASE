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
		$nsname = $_POST['sname'];
		$nsex = $_POST['sex'];
		$nbirthday = $_POST['birthday'];
		$nage = $_POST['age'];
		$nparent = $_POST['parent'];
		$ncontact = $_POST['contact'];
		$nemail = $_POST['email'];
		$nsnum = $_POST['snum'];

		$fixedName = mysqli_real_escape_string($MyConnection, $nsname);

		mysqli_query($MyConnection, "INSERT INTO STUDENT (STUD_NAME, STUD_SEX, STUD_BIRTHDAY, STUD_AGE, PARENT_NAME, PARENT_CONTACT, PAYMENT_TYPE, DATE_APPLICATION) VALUES ('$fixedName',, '$nsex', '$nbirthday', '$nage', '$nparent', '$ncontact', '$nemail', '$nsnum', '$ntype', '$nacadyr', '$nsem', $namt_borrowed, $namt_borrowed,'$fixedReason', '$ndate');");

		mysqli_query($MyConnection, "INSERT INTO BAL_HIST (LOAN_TYPE, LOAN_AMOUNT, OUT_BAL, AMT_PAID, DATE_PAID, OR_NUM, STUD_NUM, LOAN_YEAR, LOAN_SEM, DATE_ADDED, PAYMENT_REMARKS) VALUES ('$ntype', $namt_borrowed, $namt_borrowed, 0, NULL, NULL, '$nsnum', '$nacadyr', '$nsem', '$ndate', 'Loan Received');");

		echo "<script>alert('Added Successfully!');
			location = 'list.php?type=$type';</script>";
	}

?>
