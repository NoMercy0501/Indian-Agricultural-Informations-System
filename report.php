<?php
session_start();
require_once "fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->setFillColor(255,255,255);
$pdf->setTextColor(0);
$pdf->setFont('Arial','B',16);
$pdf->Cell(60,10,'Contract Report');
$pdf->Cell(60,10,'Status: '.$_SESSION['status']);
$pdf->setFont('Arial','B',11);
$headers = array('No','Id Number', 'First Name', 'Last Name', 'Contract', 'Land Size','Location');
$w = array(10,25,25,25,30,25,35);
$pdf->Ln();
for($i=0; $i<count($headers); $i++) {
	$pdf->Cell($w[$i],7,$headers[$i],1,0,'C',true);
}
$pdf->Ln();
$details = $_SESSION['report'];
for($j=0; $j<count($details); $j++) {
	$farmer = $details[$j];
	$pdf->Cell(10,7,$j+1,1,0,'C',true);
	$pdf->Cell(25,7,$farmer['idno'],1,0,'C',true);
	$pdf->Cell(25,7,$farmer['firstname'],1,0,'C',true);
	$pdf->Cell(25,7,$farmer['lastname'],1,0,'C',true);
	$pdf->Cell(30,7,$farmer['contract'],1,0,'C',true);
	$pdf->Cell(25,7,$farmer['landsize'],1,0,'C',true);
	$pdf->Cell(35,7,$farmer['location'],1,0,'C',true);
	$pdf->Ln();
}
$date = strtotime('now');
$pdf->setFont('Arial','B',8);
$pdf->Cell(35,10,'Generated on: '.date('m/d/Y',$date));
$pdf->Cell(2,10,'at '.date('H:i:s',$date));
$pdf->Output();
?>