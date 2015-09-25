
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 18);

//formatting pdf

$pdf->Image('views/img/ioc.png', 95, 1, 20);
$pdf->MultiCell(20, 20, "");
$pdf->Text(65, 28, 'Regular Customer Details');

//table data
$pdf->SetFont('Arial', 'B', 8);

date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
$date = date("l jS \of F Y h:i:s A");

$pdf->Text(5, 5, ' Date: ' . $date);

$heading = array("Customer ID", "Name", "Address","Contact","Email","RegisteredDate");

foreach ($heading as $column_heading) {
    $pdf->Cell(33, 20, $column_heading, 1);
}
foreach ($Customers as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(33, 10, $column, 1);
}

$pdf->Output();
?>

