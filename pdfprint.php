<?php
if(!empty($_POST['submit_button']))
{
    //youtube video link: https://youtu.be/FEuSG0hX3nE?si=VTcaJhpnhQTAg812
    $p_name = $_POST['p_name'];
    $location = $_POST['location'];
    $school_name = $_POST['school_name'];
    $rollno = $_POST['rollno'];
    $parent = $_POST['parent'];
    $phone = $_POST['phone'];

    require("fpdf/fpdf.php");

    $pdf =new FPDF();
    $pdf->AddPage();

    $pdf-> SetFont("Arial","B",12);
    $pdf->Cell(0,10,"Student Details",1,1,'C');

    //the parameters are group 40 for length 10 for width 1 for border and the other 1 for new line
    $pdf->Cell(40,10,"person Name:",1,0);
    $pdf->Cell(0,10,$p_name,1,1);
    $pdf->Cell(40,10,"Location:",1,0);
    $pdf->Cell(0,10,$location,1,1);
    $pdf->Cell(40,10,"School:",1,0);
    $pdf->Cell(0,10,$school_name,1,1);
    $pdf->Cell(40,10,"rollno:",1,0);
    $pdf->Cell(0,10,$rollno,1,1);
    $pdf->Cell(40,10,"parent:",1,0);
    $pdf->Cell(0,10,$parent,1,1);
    $pdf->Cell(40,10,"phone no:",1,0);
    $pdf->Cell(0,10,$phone,1,1);

    // for automatic download
    // $file=time().'.pdf';
    // $pdf->output($file,'D')

    $pdf->output();    
}
?>