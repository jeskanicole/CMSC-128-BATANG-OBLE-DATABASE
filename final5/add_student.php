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

		mysqli_query($MyConnection, "UPDATE STUDENT SET APP_YR = '$nsappyear', DATE_STARTED = '$nsdatestarted', STUD_LASTNAME = '$nslastname', STUD_FIRSTNAME = '$nsfirstname', STUD_MIDDLEINT = ' $nsmiddleint', STUD_NICKNAME = '$nsnickname', STUD_BIRTHDAY = '$nsbirthday', STUD_ADDRESS = '$nsaddress', STUD_AGE = '$nsage', STUD_SEX = '$nssex', STUD_SCHEDTIME = '$nsschedtime', STUD_SCHEDDAY = '$nsschedday', FATHER_LASTNAME = '$nsflastname', FATHER_FIRSTNAME = '$nsffirstname', FATHER_MIDDLEINT = '$nsfmiddleint', FATHER_TYPE = '$nsftype', FATHER_AGE = '$nsfage', FATHER_BIRTHDAY = '$nsfbirthday', FATHER_OCCUPATION = '$nsfoccupation', FATHER_OFFICE = '$nsfoffice', FATHER_CONTACT = '$nsfcontact', FATHER_EMAIL = '$nsfemail', MOTHER_LASTNAME = '$nsmlastname', MOTHER_FIRSTNAME = '$nsmfirstname', MOTHER_MIDDLEINT = '$nsmmiddleint', MOTHER_TYPE = '$nsmtype', MOTHER_AGE = '$nsmage', MOTHER_BIRTHDAY = '$nsmbirthday', MOTHER_OCCUPATION = '$nsmoccupation', MOTHER_OFFICE = '$nsmoffice', MOTHER_CONTACT = '$nsmcontact', MOTHER_EMAIL= '$nsmemail', GUARDIAN_LASTNAME = '$nsglastname', GUARDIAN_FIRSTNAME = '$nsgfirstname', GUARDIAN_MIDDLEINT = '$nsgmiddleint', GUARDIAN_TYPE = '$nsgtype', GUARDIAN_AGE = '$nsgage', GUARDIAN_BIRTHDAY = '$nsgbirthday', GUARDIAN_OCCUPATION = '$nsgoccupation', GUARDIAN_OFFICE = '$nsgoffice', GUARDIAN_CONTACT = '$nsgcontact', GUARDIAN_RELATION = '$nsgrelation', MEDICALBG_ONE = '$nsmbone', MEDICALBG_TWO = '$nsmbtwo', MEDICALBG_THREE = '$nsmbthree', MEDICALBG_FOUR = '$nsmbfour', MEDICALBG_FIVE = '$nsmbfive', MEDICALBG_SIX = '$nsmbsix', MEDICALBG_SEVEN = '$nsmbseven', EMER_LASTNAME = '$nselastname', EMER_FIRSTNAME = '$nsefirstname', EMER_MIDDLEINT = '$nsemiddleint', EMER_ADDRESS = '$nseaddress', EMER_CONTACT = '$nsecontact', EMER_RELATION = '$nserelation', MODE_PAY = '$nsmodepay';");
		

		echo "<script>alert('Added Successfully!');
			location = 'list.php?type=$type';</script>";
	}

?>
