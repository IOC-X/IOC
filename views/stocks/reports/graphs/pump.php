<script type="text/javascript">

	$(document).ready(function(){
		$.getJSON('stocks/calcPumpReadingForMonth',function(server){
			console.log(server[5][1]);
			console.log(server);
			pump1 = Number(server[1][1]);
			pump2 = Number(server[2][1]);
			pump3 = Number(server[3][1]);
			pump4 = Number(server[4][1]);
			pump5 = Number(server[5][1]);
			pump6 = Number(server[6][1]);
			pump7 = Number(server[7][1]);
			pump8 = Number(server[8][1]);
			pump9 = Number(server[9][1]);
			pump10 = Number(server[10][1]);

		});
	});
</script>
<script type="text/javascript">
		var chart = new CanvasJS.Chart("chartContainer", {

				title:{
					text:"Average pump readings for year " + new Date().getFullYear() +""				

				},
	                        animationEnabled: true,
				axisX:{
					interval: 1,
					gridThickness: 0,
					labelFontSize: 20,
					labelFontStyle: "normal",
					labelFontWeight: "normal",
					labelFontFamily: "Lucida Sans Unicode"

				},
				axisY2:{
					interlacedColor: "rgba(1,77,101,.2)",
					gridColor: "rgba(1,77,101,.1)"

				},

				data: [
				{     
					type: "bar",
	                name: "companies",
					axisYType: "secondary",
					color: "#014D65",				
					dataPoints: [
					
					{y: pump1, label: "Pump 1"  },
					{y: pump2, label: "Pump 2"  },
					{y: pump3, label: "Pump 3"  },
					{y: pump4, label: "Pump 4"  },
					{y: pump5, label: "Pump 5"  },
					{y: pump6, label: "Pump 6"  },
					{y: pump7, label: "Pump 7"  },
					{y: pump8, label: "Pump 8"  },
					{y: pump9, label: "Pump 9"  },
					{y: pump10, label: "Pump 10"  }
					
					]
				}
				
				]
			});

			chart.render();
</script>
<body>
	<div id="chartContainer" style="height: 300px; width: 100%;">
	</div>
