
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 18);

//formatting pdf

date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
$date = date("l jS \of F Y h:i:s A");


$pdf->Image('views/img/ioc.png', 95, 1, 20);
$pdf->MultiCell(20, 20, "");
$pdf->Text(80, 28, 'Expenses Report');


//table data
$pdf->SetFont('Arial', 'B', 8);
$pdf->Text(5, 5, ' Date: ' . $date);
//fuel
$pdf->MultiCell(10, 10, "");
$pdf->Text(20, 35, iconv("UTF-8", "ISO-8859-1", ">>> Fuel Expenses"));
$pdf->SetMargins(40, 0);
$heading = array("Fuel Type", "Capacity", "Date", "Expense(Rs.)");
$pdf->Cell(30, 20, "", 0, 0, 'C');

foreach ($heading as $column_heading) {
    $pdf->Cell(30, 20, $column_heading, 1, 0, 'C');
}
foreach ($Expenses as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(30, 10, $column, 1, 0, 'C');
}

foreach ($sum as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        
        $pdf->Cell(90, 20, "Total", 1, 0, 'C');
        $pdf->Cell(30, 20, $column, 1, 0, 'C');
}
$pdf->Ln();
//lubricant
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell(10, 10, "");
$pdf->Text(20, 145, iconv("UTF-8", "ISO-8859-1", ">>> Lubricant Expenses"));

$heading = array("Product", "Price", "Supplier","Quantity","BQuantity","Date","Expense(Rs.)");

$pdf->SetMargins(20, 0);
$pdf->Ln();
foreach ($heading as $column_heading) {
    $pdf->Cell(25, 20, $column_heading, 1, 0, 'C');
}
foreach ($lub_Expenses as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(25, 10, $column, 1, 0, 'C');
}

foreach ($lub_sum as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        
        $pdf->Cell(150, 20, "Total", 1, 0, 'C');
        $pdf->Cell(25, 20, $column, 1, 0, 'C');
}

$pdf->Ln();
//otherExpenses
$pdf->SetFont('Arial', 'B', 8);
$pdf->MultiCell(10, 10, "");
$pdf->Text(20, 10, iconv("UTF-8", "ISO-8859-1", ">>> Other Expenses"));

$heading = array("Description", "Date","Expense Rs.");

$pdf->SetMargins(50, 0);
$pdf->Ln();
foreach ($heading as $column_heading) {
    $pdf->Cell(35, 20, $column_heading, 1, 0, 'C');
}
foreach ($other_Expenses as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->Cell(35, 10, $column, 1, 0, 'C');
}

foreach ($other_sum as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        
        $pdf->Cell(70, 20, "Total", 1, 0, 'C');
        $pdf->Cell(35, 20, $column, 1, 0, 'C');
}

foreach ($grandTotal as $row) {
    $pdf->SetFont('Arial', '', 8);
    $pdf->Ln();
    foreach ($row as $column)
        $pdf->SetFont('Arial', 'B', 18);
        $pdf->Cell(70, 20, "Grand Total (Rs.)", 0, 0, 'C');
        $pdf->Cell(35, 20, $column, 0, 0, 'C');
}

$pdf->Output();
?>

