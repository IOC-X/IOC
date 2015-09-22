
<?php
require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 8);



$heading = array("Name", "Price", "Quantity","Supplier");

foreach ($heading as $column_heading) {
    $pdf->Cell(30, 20, $column_heading, 1);
}
foreach ($modelStocks as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(30, 10, $column, 1);
}

$pdf->Output();
?>

