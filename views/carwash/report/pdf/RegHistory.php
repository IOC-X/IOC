
<?php

require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 18);

if (!$Transactions) {
    echo'<h3 class="text-center success"><strong>There are no transactions done in this time period.</strong></h3>';
    return 0;
} else {
    //formatting pdf

    $pdf->Image('views/img/ioc.png', 95, 1, 20);
    $pdf->MultiCell(10, 20, "");
    $pdf->Text(35, 28, 'Regular Customer Transactions Monthly Report');

    //table data
    $pdf->SetFont('Arial', 'B', 8);

    date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
    $date = date("l jS \of F Y h:i:s A");

    $pdf->Text(5, 5, ' Date: ' . $date);

    $heading = array("Customer", "VehicleNO", "Amount Rs.", "OrderDate", "ReturnedDate");
    $pdf->Cell(20, 20, '', 0, 0, 'C');

    foreach ($heading as $column_heading) {
        $pdf->Cell(30, 20, $column_heading, 1, 0, 'C');
    }
    $pdf->SetMargins(30, 0);

    foreach ($Transactions as $row) {

        $pdf->SetFont('Arial', '', 8);
        $pdf->Ln();
        foreach ($row as $column)
            $pdf->Cell(30, 10, $column, 1, 0, 'C');
    }

    $pdf->Output();
}
?>

