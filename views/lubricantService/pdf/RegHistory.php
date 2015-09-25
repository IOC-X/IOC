
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 18);
//formatting pdf

$pdf->Image('views/img/ioc.png', 95, 1, 20);
$pdf->MultiCell(20, 20, "");
$pdf->Text(45, 28, 'Regular Customer Transactions Report');

//table data
$pdf->SetFont('Arial', 'B', 8);

date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
$date = date("l jS \of F Y h:i:s A");

$pdf->Text(5, 5, ' Date: ' . $date);


$heading = array("Customer", "VehicleNO", "Amount Rs.", "OrderDate");

foreach ($heading as $column_heading) {
    $pdf->Cell(40, 20, $column_heading, 1);
}
foreach ($Transactions as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(40, 10, $column, 1);
}

$pdf->Output();
?>

