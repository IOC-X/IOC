<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script>
<script type="text/javascript">

	var chart = new CanvasJS.Chart("chartContainer",
	{
		theme: "theme2",
		title:{
			text: "Package Usage of All the Customers"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			yValueFormatString: "# Customers",
			legendText: "{indexLabel}",
			dataPoints: [
                <?php foreach ($stats as $stat) : ?>
				{  y: <?php echo ($stat->counts); ?>, indexLabel: "<?php echo ($stat->package); ?>" },
				<?php endforeach; ?>
			]
		}
		]
	});
	chart.render();

</script>


<div id="chartContainer" style="height: 300px; width: 100%;"></div>

 