<?php

require('fpdf.php');
require('bin/con_db.php'); 

foreach($_POST as $key=>$value){
	$$key = $value;

global $db;


class PDF extends FPDF
{
// Page header
function Header()
{
       
}

// Page footer
function Footer()
{
       // Position at 1.5 cm from bottom
      // $this->SetTextColor(0,0,0);
     //$this->SetY(-1);
    //Arial italic 8
   //$this->SetFont('Arial','I',6);
  //Page number
	
    //$this->Cell(2,1,'ed',0,0,'C'); 
}
}
    //get Data from the database 
	$tt = 0;
	$k = 1;
	
// Instanciation of inherited clas
$pdf = new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();

   
	 
	    // Set font
       $pdf->SetFont('Arial', 'B', 13);
        // Title
		
		 $pdf->SetFont('Arial', 'B', 15);
         $pdf->Cell(175, 1, 'FARMERS ', 0, false, 'C', 0, '', 0, false, 'M', 'M');
		 
		 $pdf->SetFont('Arial', 'B', 12);
		
		 $pdf->SetFont('Arial', 'B', 13);
		 $pdf->Ln(5);
      

		// Headers and widths
		$pdf->SetFillColor(240,248,240);
		$pdf->SetTextColor(39,119,199);
		$pdf->SetFont('Arial','B',11);
		$pdf->Ln();
		
		$pdf->SetY(25);
		
		$x = $pdf->GetX();
		$y = $pdf->GetY();
		$i= 0 ;
		
		
		$header = array("#", "IDNO","FNAME","LNAME" "CONTRACT" ,"LANDSIZE","LOCATION");
		$w = array(10,35,40,40,50);
        $pdf->SetX(20);
		for($i = 0; $i < count($header); $i++) {
			$pdf->Cell($w[$i], 6, $header[$i], 1, 0, 'C');
		}
		$pdf->Ln();
		
		//$recordID = $_GET['recordID'];
		
      //$getdata = $db->Execute("select * from farmer where stud_id ={$_GET['recordID']}");

        
		 $getdata = $db->Execute("SELECT * FROM applycontract WHERE contract='$contract' and status='$status'");

		   $count = $getdata->RecordCount();
		     if($count ==0)
			 {
			   $data[] =array("","","","");
			 }
	     while(!$getdata->EOF)
		  
		 {      
                $idno		= $getdata->fields["idno"];
                $firstname	= $getdata->fields["firstname"];
				$lastname	= $getdata->fields["lastname"];
				$contract	= $getdata->fields["contract"];
				$landsize	= $getdata->fields["landsize"];
				$location	= $getdata->fields["location"];
								
				
				$data[] = array($k,$idno,$firstname,$lastname,$contract,$landsize,$location);
				$getdata->MoveNext();
				$k++;
		 }
		 foreach($data as $row)
		{	
		      $pdf->SetFillColor(245,248,209);

			  // $pdf->SetTextColor(39,119,199);
			
			$pdf->SetFont('Arial','',9);
			
			$yH = 7;
			
			$pdf->SetX(20);
			$pdf->Cell($w[0], $yH, $row[0], 'LRB', 0, 'L');
			$pdf->Cell($w[1], $yH, $row[1], 'LRB', 0, 'c');
			$pdf->Cell($w[2], $yH, $row[2], 'LRB', 0, 'C');
			$pdf->Cell($w[3], $yH, $row[3], 'LRB', 0, 'C');
			$pdf->Cell($w[4], $yH, $row[4], 'LRB', 0, 'C');
			$pdf->Ln();	
		}
		
//$pdf->Output($filename,'F');
$pdf->Output(); 
?>