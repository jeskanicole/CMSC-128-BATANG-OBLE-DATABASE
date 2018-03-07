<?php
	$server = "localhost:3306";
	$user = "root";
	$pass = "";
	$db = "batangoble_db";
	$conn = mysqli_connect($server, $user, $pass, $db);
	if(!$conn) die(mysqli_error($conn));

	$query = "CREATE TABLE STUDENT
	(
		STUD_NAME VARCHAR(100) NOT NULL,
		STUD_SEX CHAR(1) NOT NULL,
		STUD_BIRTHDAY DATE NOT NULL,
		STUD_AGE TINYINT(1) UNSIGNED NOT NULL,
		PARENT_NAME VARCHAR(100) NOT NULL,
		PARENT_CONTACT VARCHAR(11) NOT NULL,
		PARENT_TYPE VARCHAR(20) NOT NULL,
		PAYMENT_TYPE VARCHAR(20) NOT NULL,
		/*DATE_APPLICATION DATE NOT NULL*/
	)";
	mysqli_query($conn, $query);

	$query = "INSERT INTO STUDENT VALUES
	('Amalia Rita Marie R. Aquino', 'F', '2016-06-22', 1, 'Thalia Ingrid Rulla', '09067228227', 'Student', 'Monthly'),
	('Light Alexandre M. Claros', 'M', '2016-09-2016', 1, 'Johannah Marah P. Manio', '09067156445', 'Student', 'Drop in'),
	('Ysha Nelaijah	Collado', 'F', '2013-09-28', 4, 'Mary Jane Naharilla', '09177657728', 'Alumni', 'Monthly'),
	('Calvin Lee Custodio', 'M', '2013-08-25', 4, 'Judylyn Custodio (IM Graduate Student)', '09178795266', 'Alumni', 'Drop in'),
	('Gibson Dwayne Dacay', 'M', '2014-05-07', 2, 'Wyndie Dacay', '09483598772', 'Admin/REPS', 'Drop in'),
	('John Immanuel Florendo', 'M', '2016-09-08', 1, 'Ma. Rosario Florendo', '09985426982', 'Faculty', 'Monthly')
	";
	mysqli_query($conn, $query);




	$query = "CREATE TABLE PAYMENT(
		PAYMENT_TYPE VARCHAR(50) NOT NULL,
		PAYMENT_AMOUNT NUMERIC(8,2) NOT NULL,
		OUT_BAL NUMERIC(8,2),
		AMT_PAID NUMERIC(8,2),
		DATE_PAID DATE,
		OR_NUM NUMERIC(11),
		STUD_NAME VARCHAR(10) NOT NULL,

		/* DEPENDS ON THE TYPE OF ENROLLMENT STUFFERS
		LOAN_YEAR VARCHAR(10) NOT NULL,
		LOAN_SEM VARCHAR(3) NOT NULL,
		*/ 

		DATE_ADDED DATE NOT NULL,
		PAYMENT_REMARKS VARCHAR(200)
	)";
	mysqli_query($conn, $query);


	$query = "CREATE TABLE SA
	(
		SA_NAME VARCHAR(100) NOT NULL,
		SA_SEX VARCHAR(10) NOT NULL,
		SA_COLLEGE VARCHAR(10) NOT NULL,
		SA_COURSE VARCHAR(35) NOT NULL,
		SA_YEAR VARCHAR(6) NOT NULL,
		SA_CONTACT VARCHAR(11) NOT NULL,
	)";
	mysqli_query($conn, $query);


?>