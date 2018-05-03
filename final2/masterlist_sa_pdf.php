<?php
//error_reporting(0);
require('cellfit.php');
$d=date('d_m_Y');

	$header=array('Student Number', 'Last Name', 'First Name', 'Course', 'College', 'Year', 'Sex', 'Address', 'Email Address', 'Contact Number', 'Hours Worked');
	//Data loading
	//*** Load MySQL Data ***//
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db_database = 'batangoble_db';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_database);
	$id = $_GET['id'];

	$query = mysqli_query($conn, "SELECT SA_STUDNUM, SA_LASTNAME, SA_FIRSTNAME, SA_COURSE, SA_COLLEGE, SA_YEAR, SA_SEX, SA_ADDRESS, SA_EMAIL, SA_CONTACT, SA_HOURS FROM SA");
	$resultData = array();

	for ($i=0;$i<mysqli_num_rows($query);$i++)
	{
		$result = mysqli_fetch_array($query);
		array_push($resultData,$result);
	}

	$pdf=new FPDF_CellFit();
	$pdf->AddPage("L");

	$pdf->SetFont('Helvetica','',15);
	$pdf->Cell(5);
	$pdf->Write(5, $id);
	$pdf->Ln();
	$pdf->Write(5, 'Batang Oble Day Care Center');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Helvetica','',13);
	$pdf->Write(5, 'Student Assistant Master List');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Helvetica','',11);
	$result = mysqli_query($conn, "select date_format(now(), '%W, %M %d, %Y') as date");

	while($row = mysqli_fetch_array($result))
	{
		$pdf->Write(5,$row['date']);
	}


	$pdf->SetFontSize(8);
	$pdf->Ln();

	$pdf->Ln(5);

	$pdf->Ln(0);
	//$pdf->BasicTable($header,$resultData);
	$pdf->SetFillColor(255,255,255);
	//$this->SetDrawColor(255, 0, 0);
	$w=array(28,30,30,33,14,13,13,40,35,25, 20);
	
	//Header
	$pdf->SetFont('Arial','B',9);
	for($i=0;$i<count($header);$i++)
	{
		$pdf->CellFitScale($w[$i],8,$header[$i],1,0,'C',1);
	}
	$pdf->Ln();
	
	//Data
	$pdf->SetFont('Arial','',9);
	foreach ($resultData as $eachResult) 
	{
		$pdf->CellFitScale(28,8,$eachResult['SA_STUDNUM'],1,0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['SA_LASTNAME'],1, 0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['SA_FIRSTNAME'],1,0,'C',1);
		$pdf->CellFitScale(33,8,$eachResult['SA_COURSE'],1,0,'C',1);
		$pdf->CellFitScale(14,8,$eachResult['SA_COLLEGE'],1,0,'C',1);
		$pdf->CellFitScale(13,8,$eachResult['SA_YEAR'],1,0,'C',1);
		$pdf->CellFitScale(13,8,$eachResult['SA_SEX'],1,0,'C',1);
		$pdf->CellFitScale(40,8,$eachResult['SA_ADDRESS'],1,0,'C',1);
		$pdf->CellFitScale(35,8,$eachResult['SA_EMAIL'],1,0,'C',1);
		$pdf->CellFitScale(25,8,$eachResult['SA_CONTACT'],1,0,'C',1);
		$pdf->CellFitScale(20,8,$eachResult['SA_HOURS'],1,0,'C',1);
		$pdf->Ln();
		 	 	 	 	
	}
	ob_end_clean();
	$pdf->Output();
?>
