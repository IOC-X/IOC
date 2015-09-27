
<?php
require('libs/fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 18);
if (!$modelStocks) {
	    echo'<h3 class="text-center success"><strong>No records found !</strong></h3>';
	    return 0;
}
else{
	$pdf->Image('views/img/ioc.png', 95, 1, 20);
	$pdf->MultiCell(20, 20, "");
	$pdf->Text(75, 28, 'Employee report');

	//table data
	$pdf->SetFont('Arial', 'B', 8);

	date_default_timezone_set('Asia/Colombo'); //to get srilankan time instead of GMT time
	$date = date("l jS \of F Y h:i:s A");

	$pdf->Text(5, 5, ' Date: ' . $date);
//employeeCode,firstName,lastName,address,nicNumber,mobilePhone,birthDate,hireDate,emptype

	$heading = array("Employee ID","Position", "First Name", "Last Name", "Address","Nic Number","Phone Number","Birth date","Hire Date");
	$pdf->Cell(3, 20, '', 0, 0, 'C');
	foreach ($heading as $column_heading) {
	    $pdf->Cell(21, 15, $column_heading, 1, 0, 'C');
	}
	$pdf->SetMargins(13, 0);
	foreach ($modelStocks as $row) {
	    $pdf->SetFont('Arial', '', 8);
	    $pdf->Ln();
	    foreach ($row as $column)
	        $pdf->Cell(21, 10, $column, 1, 0, 'C');
	}

	$pdf->Output();	
}

?>

