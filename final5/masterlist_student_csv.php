<?php
	session_start();
	error_reporting(0);
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db_database = 'batangoble_db';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_database);

	$type = $_GET['type'];

	header('Content-Type: text/csv; charset=utf-8');
	header('Content-Disposition: attachment; filename=Student-Master-List.csv');

	$output = fopen('php://output', 'w');

	fputcsv($output, array('STUDENT MASTER LIST'));
	fputcsv($output, array('Last Name', 'First Name', 'Sex', 'Birthday', 'Last Name of Parent/Guardian', 'First Name of Parent/Guardian', 'Contact Number', 'Parent/Guardian Type', 'Mode of Payment'));

	$query = mysqli_query($conn, "SELECT STUD_LASTNAME, STUD_FIRSTNAME, STUD_SEX, STUD_BIRTHDAY, PAR_LASTNAME, PAR_FIRSTNAME, PAR_CONTACT, PAR_TYPE, MODE_PAY FROM STUDENT");
	while($result = mysqli_fetch_assoc($query))
	{
		fputcsv($output, $result);
	}

	fclose($output);
?>