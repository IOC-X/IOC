
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 20);


//$pdf->Image('views/img/ioc.png',95,1,20);
$pdf->MultiCell(20, 20,"");
$pdf->Text(75,28,'Client Details Report');



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

