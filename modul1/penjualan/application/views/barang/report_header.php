<?php
$pdf = new FPDF('P', 'mm', array(330, 297));
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 18);
$pdf->Image('./assets/img/cart.jpg', 30, 5, 27, 24);
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 20);
$pdf->Cell(0, 5, 'TOKO SEMBAKO', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Website: ' . 'WWW.SEMBAKOOO.COM' . '/E-mail: ' . 'admin@sembako.com', 0, 1, 'C');
$pdf->Cell(25);
$pdf->SetFont('Times', 'B', 10);
$pdf->Cell(0, 5, 'Banjarmasin Selatan' . 'Telp/Fax: ' . '087796887' . ' / ' . 'TOKO SEMBAKO', 0, 1, 'C');

$pdf->SetLineWidth(1);
$pdf->Line(10, 36, 197, 36);
$pdf->SetLineWidth(0);
$pdf->Line(10, 37, 197, 37);
$pdf->Cell(30, 17, '', 0, 1);

$pdf->SetFont('Times', '', 10);
