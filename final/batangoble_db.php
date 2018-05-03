<?php
	$server = "localhost:3306";
	$user = "root";
	$pass = "";
	$db = "batangoble_db";
	$conn = mysqli_connect($server, $user, $pass, $db);
	if(!$conn) die(mysqli_error($conn));

	$query = "CREATE TABLE STUDENT
	(
		APP_YR VARCHAR(4) NOT NULL,
		STUD_LASTNAME VARCHAR(100) NOT NULL,
		STUD_FIRSTNAME VARCHAR(100) NOT NULL,
		STUD_SEX CHAR(1) NOT NULL,
		STUD_BIRTHDAY DATE NOT NULL,
		STUD_AGE TINYINT(1) UNSIGNED NOT NULL,
		PAR_LASTNAME VARCHAR(100) NOT NULL,
		PAR_FIRSTNAME VARCHAR(100) NOT NULL,
		PAR_CONTACT VARCHAR(11) NOT NULL,
		PAR_TYPE VARCHAR(20) NOT NULL,
		MODE_PAY VARCHAR(20) NOT NULL
		/*DATE_APPLICATION DATE NOT NULL*/
	)";
	mysqli_query($conn, $query);

	$query = "INSERT INTO STUDENT VALUES
		('2015','Aquino', 'Amalia Rita Marie', 'F', '2016-06-22', 1, 'Rulla', 'Thalia Ingrid', '09067228227', 'Student', 'Monthly'),
		('2015','Claros', 'Light Alexandre', 'M', '2016-09-2016', 1, 'Manio', 'Johannah Marah', '09067156445', 'Student', 'Drop in'),
		('2015','Custodio', 'Calvin Lee', 'M', '2013-08-25', 4, 'Custodio', 'Judylyn', '09178795266', 'Alumni', 'Drop in'),
		('2015','Dacay', 'Gibson Dwayne', 'M', '2014-05-07', 2, 'Dacay', 'Wyndie', '09483598772', 'Admin/REPS', 'Drop in'),
		('2015','Florendo', 'John Immanuel', 'M', '2016-09-08', 1, 'Florendo', 'Ma. Rosario', '09985426982', 'Faculty', 'Monthly'),
		('2015','Gabatin', 'Jessica', 'F', '2014-04-08', 3, 'Gabatin', 'Marilou', '09460458446', 'Agency', 'Monthly'),
		('2015','Himmiwat', 'Corinth', 'F', '2014-08-08', 3, 'Himmiwat', 'Anselmo', '09155387700', 'Admin/REPS', 'Drop in'),
		('2015','Jularbal', 'Maximillian', 'M', '2015-09-02', 1, 'Jularbal', 'Io', '09163213466', 'Faculty', 'Monthly')
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
		SA_STUDNUM VARCHAR(10) NOT NULL,
		SA_LASTNAME VARCHAR(100) NOT NULL,
		SA_FIRSTNAME VARCHAR(100) NOT NULL,
		SA_COURSE VARCHAR(35) NOT NULL,
		SA_COLLEGE VARCHAR(10) NOT NULL,
		SA_YEAR VARCHAR(6) NOT NULL,
		SA_SEX VARCHAR(10) NOT NULL,
		SA_ADDRESS VARCHAR(100) NOT NULL,
		SA_EMAIL VARCHAR(50) NOT NULL,
		SA_CONTACT VARCHAR(11) NOT NULL
	)";
	mysqli_query($conn, $query);

	$query = "INSERT INTO SA VALUES
		('2014-14943', 'Jacob', 'Jessa', 'BS Mathematics', 'CS', '4th', 'Female', 'Baguio City', 'jijacob@up.edu.ph', '09159755845')
		";
	mysqli_query($conn, $query);


?>