<?php
include_once('fpdf.php');
$doc=new FPDF();


$doc->AddPage();
$doc->SetFont('Arial','B','20');
//TITULO DEL PDF
$doc->SetFillColor(255, 255, 255);
 $doc->Image('img/logo.jpg',10,10,-1000);
 $doc->SetXY(70, 15);
 $doc->SetTextColor(51,153,255);
 $doc->Cell(120,5,'HOGAR SAN SEBASTIAN ',0,3,'C');
 $doc->SetXY(70, 35);
  $doc->SetTextColor(51,153,255);
 $doc->Cell(120,5,'NOTAS DE ENFERMERIA ',0,2,'C');



//CONTENIDO DE LAS NOTAS
 $doc->SetTextColor(0,0,0);
 $doc->SetFont('Arial','','13');
 $doc->SetXY(10,50);
$doc->MultiCell(200,5,'Nombre: '.utf8_decode($_POST['sellist1']),0,8,'L');
$doc->Cell(50, 5,'Fecha: '. date('d') . ' de '. date('m'). ' del '. date('Y'), 0,8,'L');
$doc->Ln();
$doc->SetFont('Arial','','12');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist2']).' '.utf8_decode($_POST['sellist3']).' '.utf8_decode($_POST['nov4']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist5']).' '.utf8_decode($_POST['sellist6']).' '.utf8_decode($_POST['nov7']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist8']).' '.utf8_decode($_POST['sellist9']).' '.utf8_decode($_POST['nov10']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist11']).' '.utf8_decode($_POST['sellist12']).' '.utf8_decode($_POST['nov13']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist14']).' '.utf8_decode($_POST['sellist15']).' '.utf8_decode($_POST['nov16']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist17']).' '.utf8_decode($_POST['sellist18']).' '.utf8_decode($_POST['nov19']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist20']).' '.utf8_decode($_POST['sellist21']).' '.utf8_decode($_POST['nov22']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist23']).' '.utf8_decode($_POST['sellist24']).' '.utf8_decode($_POST['nov25']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist26']).' '.utf8_decode($_POST['sellist27']).' '.utf8_decode($_POST['nov28']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist29']).' '.utf8_decode($_POST['sellist30']).' '.utf8_decode($_POST['nov31']),0,2,'L');
$doc->MultiCell(200,5,''.utf8_decode($_POST['sellist32']).' '.utf8_decode($_POST['sellist33']).' '.utf8_decode($_POST['nov34']),0,2,'L');





$doc->Output();

?>