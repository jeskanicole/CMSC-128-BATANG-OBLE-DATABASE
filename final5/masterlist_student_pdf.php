<?php
//error_reporting(0);
require('cellfit.php');
$d=date('d_m_Y');

	$header=array('Last Name of Student', 'First Name of Student', 'Middle Initial','Sex', 'Birthday', 'Age', 'Dependent of Father', 'Dependent of Mother','Dependent of Guardian', 'Date Started');
	//Data loading
	//*** Load MySQL Data ***//
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db_database = 'batangoble_db';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_database);
	$id = $_GET['id'];

	$query = mysqli_query($conn, "SELECT STUD_LASTNAME, STUD_FIRSTNAME, STUD_MIDDLEINT, STUD_SEX, STUD_BIRTHDAY, STUD_AGE, FATHER_TYPE, MOTHER_TYPE, GUARDIAN_TYPE FROM STUDENT");
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
	$pdf->Write(5, 'Student Master List');
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
	$w=array(40,40,15,10,25,10,30,30,30);
	
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
		$pdf->CellFitScale(40,8,$eachResult['STUD_LASTNAME'],1,0,'C',1);
		$pdf->CellFitScale(40,8,$eachResult['STUD_FIRSTNAME'],1, 0,'C',1);
		$pdf->CellFitScale(15,8,$eachResult['STUD_MIDDLEINT'],1, 0,'C',1);
		$pdf->CellFitScale(10,8,$eachResult['STUD_SEX'],1,0,'C',1);
		$pdf->CellFitScale(25,8,$eachResult['STUD_BIRTHDAY'],1,0,'C',1);
		$pdf->CellFitScale(10,8,$eachResult['STUD_AGE'],1,0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['FATHER_TYPE'],1,0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['MOTHER_TYPE'],1,0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['GUARDIAN_TYPE'],1,0,'C',1);
		$pdf->CellFitScale(30,8,$eachResult['DATE_STARTED'],1,0,'C',1);
		 	 	 	 	
	}
	ob_end_clean();
	$pdf->Output();
?>
