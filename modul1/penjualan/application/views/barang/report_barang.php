<?php
$pdf = new FPDF('p', 'mm', array(330, 297));
$pdf->Addpage();
include 'report_header.php';
$pdf->SetFont('Times', 'B', 18);
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(0, 5, 'LAPORAN DATA BARANG', 0, 1, 'C');
$pdf->Cell(50, 8, '', 0, 1);
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 6, 'NO', 1, 0, 'C');
$pdf->Cell(30, 6, 'BARCODE', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA BARANG', 1, 0, 'C');
$pdf->Cell(25, 6, 'HARGA_JUAL', 1, 0, 'C');
$pdf->Cell(25, 6, 'HARGA_BELI', 1, 0, 'C');
$pdf->Cell(15, 6, 'STOK', 1, 0, 'C');
$pdf->Cell(30, 6, 'KATEGORI_ID', 1, 0, 'C');
$pdf->Cell(30, 6, 'SATUAN_ID', 1, 0, 'C');
$pdf->Cell(30, 6, 'SUPPLIER_ID', 1, 0, 'C');
$pdf->Cell(30, 6, 'USER_ID', 1, 1, 'C');
$i = 1;

$data = $this->db->get('barang')->result_array();
foreach ($data as $d) {
    $pdf->SetFont('Times', '', 9);
    $pdf->Cell(10, 6, $i++, 1, 0);
    $pdf->Cell(30, 6, $d['barkode'], 1, 0);
    $pdf->Cell(50, 6, $d['name'], 1, 0);
    $pdf->Cell(25, 6, $d['harga_jual'], 1, 0);
    $pdf->Cell(25, 6, $d['harga_beli'], 1, 0);
    $pdf->Cell(15, 6, $d['stok'], 1, 0);
    $pdf->Cell(30, 6, $d['kategori_id'], 1, 0);
    $pdf->Cell(30, 6, $d['satuan_id'], 1, 0);
    $pdf->Cell(30, 6, $d['supplier_id'], 1, 0);
    $pdf->Cell(30, 6, $d['user_id'], 1, 1);
}
$pdf->SetFont('Times', '', 10);
$pdf->Output('laporan_Barang.pdf', 'I');
