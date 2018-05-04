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
	header('Content-Disposition: attachment; filename=SA-Master-List.csv');

	$output = fopen('php://output', 'w');

	fputcsv($output, array('STUDENT ASSISTANT MASTER LIST'));
	fputcsv($output, array('Student Number', 'Last Name', 'First Name', 'Middle Initial','Course', 'College', 'Year', 'Sex', 'Address', 'Email Address', 'Contact Number', 'Hours Worked'));

	$query = mysqli_query($conn, "SELECT SA_STUDNUM, SA_LASTNAME, SA_FIRSTNAME, SA_MIDDLE, SA_COURSE, SA_COLLEGE, SA_YEAR, SA_SEX, SA_ADDRESS, SA_EMAIL, SA_CONTACT, SA_HOURS FROM SA");
	while($result = mysqli_fetch_assoc($query))
	{
		fputcsv($output, $result);
	}

	fclose($output);
?>