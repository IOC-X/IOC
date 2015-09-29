
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 8);

date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
$date = date("l jS \of F Y h:i:s A");


$pdf->Image('views/img/ioc.png', 95, 1, 20);

$pdf->Text(5, 5, ' Date: ' . $date);

$pdf->Image('views/img/ioc.png',95,1,20);

$pdf->MultiCell(20, 20,"");
$pdf->SetFont('Arial', 'B', 19);
$pdf->Text(75,28,'Client Details Report');


date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
	$date = date("l jS \of F Y h:i:s A");
        $pdf->SetFont('Arial', 'B', 8);
	$pdf->Text(5, 5, ' Date: ' . $date);

$pdf->SetFont('Arial', 'B', 16);
$heading = array("Client ID", "Name", "Address", "NIC","Mobile");

foreach ($heading as $column_heading) {
    $pdf->Cell(30, 20, $column_heading, 1);
}
foreach ($clients as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(30, 10, $column, 1);
}

$pdf->Output();
?>

