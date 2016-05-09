<?php

include 'qrlib.php';

function pass($id){
		
	mysql_connect('localhost','root','itsrds');
	mysql_select_db('tedx') or die( "Unable to select database");
	$row = mysql_query("select * from juit where id='".$id."'");
	$array = mysql_fetch_array($row);
	
	QRcode::png($id,'qr/'.$id.'.png');
					
					require("fpdf/fpdf.php");
					
					$pdf=new FPDF();
					$pdf->AddPage();
					
					$name = "2";
					$pdf->Image($name.'.jpg', 0, 0, 0, 0, 'jpg');
					$pdf->SetFont("Arial","",12);
					
					$name = 'qr/'.$array[0];
					$pdf->Image($name.'.png', 157, 50, 44, 44, 'png');
					$pdf->SetFont("Arial","",12);
					
					$pdf->SetFont("Arial","B",20);
					$pdf->SetTextColor(255,255,255);
					$pdf -> SetX(59);
					$pdf->Cell(0,84,$array[0],0,0);					
					$pdf->Ln(10);
					
					$pdf->SetFont("Arial","",20);
					$pdf->SetTextColor(255,255,255);
					$pdf -> SetX(40);
					$pdf->Cell(0,89,$array[1],0,0);					
					$pdf->Ln(10);
					
					$pdf->SetFont("Arial","",20);
					$pdf->SetTextColor(255,255,255);
					$pdf -> SetX(40);
					$pdf->Cell(0,94,$array[3],0,0);					
					$pdf->Ln(10);
					
					$pdf->SetFont("Arial","",20);
					$pdf->SetTextColor(255,255,255);
					$pdf -> SetX(70);
					$pdf->Cell(0,100,$array[2],0,0);					
					$pdf->Ln(10);
					
					// Go to 1.5 cm from bottom
					$pdf->SetY(-31);
					// Select Arial italic 8
					$pdf->SetFont('Arial','I',8);
					// Print centered page number
					
					//$pdf->Cell(0,10,"TEDxJUIT. "." Terms and Conditions Apply.",0,0,'C');
								
					$pdf->output();	
										
					
	/* $to = 'yourmailtarget@example.com';

	$subject = 'Your email subject';

	$headers = "From: abc@abc.com \r\n";
	$headers .= "Reply-To: no-reply@abc.com \r\n";
	$headers .= "BCC: abc@abc.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	$message = 'Hello'.$array[1].'<br>';
	$message .= "Youusdgyugjabdjfbj sedkjbsdb dsgv sdbyvbcd byvdsc vttdvs dds.<br>";
	$message .= "<b>Please download your ticket.</b><Br>";
	$message .= "<span style='color:#FF0000;'>This is red color</span>";
	if( mail( $to, $subject, $message, $headers ) ) {
		echo "<p>The email was sent.</p>";
	}
	else {
		echo "<p>There was an error sending the mail.</p>";
	} */
	
}


?>