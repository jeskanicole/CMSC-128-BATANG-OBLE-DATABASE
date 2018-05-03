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
		$nsappyear = $_POST['sappyear'];
		$nsdatestarted = $_POST['sdatestarted'];
		$nslastname = $_POST['slastname'];
		$nsfirstname = $_POST['sfirstname'];
		$nsmiddleint = $_POST['smiddleint'];
		$nsnickname = $_POST['snickname'];
		$nsbirthday = $_POST['sbirthday'];
		$nsaddress = $_POST['saddress'];
		$nsage = $_POST['sage'];
		$nssex = $_POST['ssex'];
		$nsschedtime = $_POST['sschedtime'];
		$nsschedday = $_POST['sschedday'];
		$nsflastname = $_POST['sflastname'];
		$nsffirstname = $_POST['sffirstname'];
		$nsfmiddleint = $_POST['sfmiddleint'];
		$nsftype = $_POST['sftype'];
		$nsfage = $_POST['sfage'];
		$nsfbirthday = $_POST['sfbirthday'];
		$nsfoccupation = $_POST['sfoccupation'];
		$nsfoffice = $_POST['sfoffice'];
		$nsfcontact = $_POST['sfcontact'];
		$nsfemail = $_POST['sfemail'];

		$nsmlastname = $_POST['smlastname'];
		$nsmfirstname = $_POST['smfirstname'];
		$nsmmiddleint = $_POST['smmiddleint'];
		$nsmtype = $_POST['smtype'];
		$nsmage = $_POST['smage'];
		$nsmbirthday = $_POST['smbirthday'];
		$nsmoccupation = $_POST['smoccupation'];
		$nsmoffice = $_POST['smoffice'];
		$nsmcontact = $_POST['smcontact'];
		$nsmemail = $_POST['smemail'];

		$nsglastname = $_POST['sglastname'];
		$nsgfirstname = $_POST['sgfirstname'];
		$nsgmiddleint = $_POST['sgmiddleint'];
		$nsgtype = $_POST['sgtype'];
		$nsgage = $_POST['sgage'];
		$nsgbirthday = $_POST['sgbirthday'];
		$nsgoccupation = $_POST['sgoccupation'];
		$nsgoffice = $_POST['sgoffice'];
		$nsgcontact = $_POST['sgcontact'];
		$nsgrelation = $_POST['sgrelation'];

		$nsmbone = $_POST['smbone'];
		$nsmbtwo = $_POST['smbtwo'];
		$nsmbthree = $_POST['smbthree'];
		$nsmbfour = $_POST['smbfour'];
		$nsmbfive = $_POST['smbfive'];
		$nsmbsix = $_POST['smbsix'];
		$nsmbseven = $_POST['smbseven'];

		$nselastname = $_POST['selastname'];
		$nsefirstname = $_POST['sefirstname'];
		$nsemiddleint = $_POST['semiddleint'];

		$nseaddress = $_POST['seaddress'];
		$nsecontact = $_POST['secontact'];
		$nserelation = $_POST['serelation'];

		$nsmodepay = $_POST['modepay'];


		$fixedName = mysqli_real_escape_string($MyConnection, $nsname);

		mysqli_query($MyConnection, "INSERT INTO STUDENT (APP_YR, DATE_STARTED,	STUD_LASTNAME, STUD_FIRSTNAME, STUD_MIDDLEINT, STUD_NICKNAME, STUD_BIRTHDAY, STUD_ADDRESS, STUD_AGE, STUD_SEX, STUD_SCHEDTIME, STUD_SCHEDDAY, FATHER_LASTNAME, FATHER_FIRSTNAME, FATHER_MIDDLEINT, FATHER_TYPE, FATHER_AGE, FATHER_BIRTHDAY, FATHER_OCCUPATION, FATHER_OFFICE, FATHER_CONTACT, FATHER_EMAIL, MOTHER_LASTNAME, MOTHER_FIRSTNAME, MOTHER_MIDDLEINT, MOTHER_TYPE, MOTHER_AGE, MOTHER_BIRTHDAY, MOTHER_OCCUPATION, MOTHER_OFFICE, MOTHER_CONTACT, MOTHER_EMAIL, GUARDIAN_LASTNAME, GUARDIAN_FIRSTNAME, GUARDIAN_MIDDLEINT, GUARDIAN_TYPE, GUARDIAN_AGE, GUARDIAN_BIRTHDAY, GUARDIAN_OCCUPATION, GUARDIAN_OFFICE, GUARDIAN_CONTACT, GUARDIAN_RELATION, MEDICALBG_ONE, MEDICALBG_TWO, MEDICALBG_THREE, MEDICALBG_FOUR, MEDICALBG_FIVE, MEDICALBG_SIX, MEDICALBG_SEVEN, EMER_LASTNAME, EMER_FIRSTNAME, EMER_MIDDLEINT, EMER_ADDRESS, EMER_CONTACT, EMER_RELATION, MODE_PAY) VALUES ('$nslastname', '$nsdatestarted' '$nsfirstname', $nsmiddleint, $nsnickname, $nsbirthday, $nsaddress, $nsage, $nssex, $nsschedtime, $nsschedday, $nsflastname, $nsffirstname, $nsfmiddleint, $nsftype, $nsfage, $nsfbirthday, $nsfoccupation, $nsfoffice, $nsfcontact, $nsfemail, $nsmlastname, $nsmfirstname, $nsgmiddleint, $nsgtype, $nsgage, $nsgbirthday, $nsgoccupation, $nsgoffice, $nsgcontact, $nsgrelation, $nsmbone, $nsmbtwo, $nsmbthree, $nsmbfour, $nsmbfive, $nsmbsix, $nsmbseven, $nselastname, $nsefirstname, $nsemiddleint, $nseaddress, $nsecontact, $nserelation, $nsmodepay);");

		

		echo "<script>alert('Added Successfully!');
			location = 'list.php?type=$type';</script>";
	}

?>
