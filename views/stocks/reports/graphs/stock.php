
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$.getJSON('stocks/getStockGraphComparison',function(data){
			console.log(data);
			petrolAmt = data[0][3];
			spetrolAmt = data[1][3];
			dieselAmt = data[2][3];
			sdieselAmt = data[3][3];
		});		
	});
</script>
<script type="text/javascript">
	
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Petrol and Diesel comparison"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}",
			dataPoints: [
				{  y: petrolAmt, legendText:"Petrol", label: "Petrol" },
				{  y: dieselAmt, legendText:"Diesel", label: "Diesel" }
			]
		}
		]
	});
	chart.render();

</script>


<div id="chartContainer2" style="height: 300px; width: 100%;"></div>


<script type="text/javascript">
	
	var chart = new CanvasJS.Chart("chartContainer2",
	{
		title:{
			text: "Super Petrol and Super Diesel comparison"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Helvetica"        
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}",
			dataPoints: [
				{  y: spetrolAmt, legendText:"Super Petrol" , label: "Super Petrol"},       
				{  y: sdieselAmt, legendText:"Super Diesel" , label: "Super Diesel"}
			]
		}
		]
	});
	chart.render();

</script>
