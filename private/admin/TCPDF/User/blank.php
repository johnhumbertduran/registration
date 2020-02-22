<?php
require_once('tcpdf_include.php');
include("../../../bins/shared/connections.php");


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('PHP TUTORIAL TAGALOG: LESSON 5');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);


if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}


$pdf->SetFont('dejavusans', '', 10);


$pdf->AddPage('P');

// $html = '<table border="1" width="100%">';

// $html .= '<thead><tr><b>Name</b></tr></thead>';
$pdf->SetFont("Helvetica",'',7);
$pdf->Cell(40,10,"Name",0,0,'C');
$pdf->Cell(30,10,"Address",0,0,'C');
// $pdf->Cell(20,10,"Gender",0,0,'C');
$pdf->Cell(20,10,"Work Posistion",0,0,'C');
$pdf->Cell(40,10,"Employment Address",0,0,'C');
// $pdf->Cell(20,10,"College",0,0,'C');
$pdf->Cell(30,10,"Cellphone Number",0,0,'C');
$pdf->Cell(20,10,"Email",0,1,'C');

$query = mysqli_query($connections, "SELECT * FROM usrs WHERE account_type='2'");
while($row = mysqli_fetch_assoc($query)){

	$account_type = $row["account_type"];
    $firstName = ucfirst($row["firstName"]);
    $middleName = $row["middleName"];
	$lastName = ucfirst($row["lastName"]);
	
	$address = ucfirst($row["homeAddress"]);
    $workAddress = ucfirst($row["employmentAddress"]);
    $work = ucfirst($row["currentWork"]);
	$workPosition = ucfirst($row["currentPosition"]);

	$gender = $row["gender"];
	$civilStatus = $row["civilStatus"];
	
	$elementary = $row["elementary"];
	$elementaryGraduated = $row["elementaryYearGraduated"];

	$highschool = $row["highSchool"];
	$highschoolGraduated = $row["highSchoolYearGraduated"];

	$college = $row["college"];
	$collegeGraduated = $row["collegeYearGraduated"];
	$collegeDegree = $row["collegeDegree"];

	$graduateSchool = $row["graduate"];
	$graduateSchoolGraduated = $row["graduateYearGraduated"];
	$graduateSchoolDegree = $row["graduateDegree"];

	$telephone = $row["officeTelephoneNo"];
	$cellphone = $row["cellphoneNo"];
	$alumniMembership = $row["alumniChapterMembership"];
	$email = $row["email"];

	$fullname = $firstName . $middleName[0] . "." . $lastName;

	// echo $pdf->SetFont("Helvetica",'',8);
	echo $pdf->Cell(40,10,$fullname,1,0,'C');
	echo $pdf->Cell(30,10,$address,1,0,'C');
	echo $pdf->Cell(20,10,$workPosition,1,0,'C');
	echo $pdf->Cell(40,10,$workAddress,1,0,'C');
	echo $pdf->Cell(30,10,$cellphone,1,0,'C');
	echo $pdf->Cell(20,10,$email,1,1,'C');
	
}


// $html .= '</table>';
// $pdf->writeHTML($html, true, false, true, false, '');
	


$pdf->lastPage();

$pdf->Output('Plain.pdf', 'I');

