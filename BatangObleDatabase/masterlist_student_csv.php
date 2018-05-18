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
	fputcsv($output, array('Application Year', 'Last Name', 'First Name', 'Middle Initial', 'Sex', 'Age', 'Dependent of (Father)', 'Dependent of (Mother)', 'Dependent of (Guardian)', 'Date Started', 'Mode of Payment'));

	$query = mysqli_query($conn, "SELECT APP_YR, STUD_LASTNAME, STUD_FIRSTNAME, STUD_MIDDLEINT, STUD_SEX, STUD_AGE, FATHER_TYPE, MOTHER_TYPE, GUARDIAN_TYPE, DATE_STARTED, MODE_PAY FROM STUDENT");
	while($result = mysqli_fetch_assoc($query))
	{
		fputcsv($output, $result);
	}

	fclose($output);
?>