<?php
require "FPDF/fpdf.php";
include("../bins/shared/connections.php");

class myPDF extends FPDF{
    function header(){
        // $this->Image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'AKLAN CATHOLIC COLLEGE',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Alumni Online Registration','0','0','C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',9);
        $this->Cell(40,10,'Name',1,0,'C');
        $this->Cell(56,10,'Address',1,0,'C');
        $this->Cell(40,10,'Work Posistion',1,0,'C');
        $this->Cell(50,10,'Employment Address',1,0,'C');
        $this->Cell(27,10,'Cellphone Number',1,0,'C');
        $this->Cell(60,10,'Email',1,0,'C');
        $this->Ln();
    }
    function viewTable($connections){
        $this->SetFont('Times','B',9);
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
        
        $this->Cell(40,10,$fullname,1,0,'C');
        $this->Cell(56,10,$address,1,0,'C');
        $this->Cell(40,10,$workPosition,1,0,'C');
        $this->Cell(50,10,$workAddress,1,0,'C');
        $this->Cell(27,10,$cellphone,1,0,'C');
        $this->Cell(60,10,$email,1,0,'C');
        $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($connections);
$pdf->Output("I","Registration_Members");

?>