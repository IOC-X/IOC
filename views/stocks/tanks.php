  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script>
<script type="text/javascript">
  
    var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Available stocks",
                fontFamily: "Verdana",
                fontColor: "Peru",
                fontSize: 28

            },
            animationEnabled: true,
            axisY: {
                tickThickness: 0,
                lineThickness: 0,
                valueFormatString: " ",
                gridThickness: 0                    
            },
            axisX: {
                tickThickness: 0,
                lineThickness: 0,
                labelFontSize: 18,
                labelFontColor: "Peru"

            },
            data: [
            {
                indexLabelFontSize: 26,
                toolTipContent: "<span style='\"'color: {color};'\"'><strong>{indexLabel}</strong></span><span style='\"'font-size: 20px; color:peru '\"'><strong>{y}</strong></span>",

                indexLabelPlacement: "inside",
                indexLabelFontColor: "white",
                indexLabelFontWeight: 600,
                indexLabelFontFamily: "Verdana",
                color: "#62C9C3",
                type: "bar",
                dataPoints: [
                    { y: 33, label: "33%", indexLabel: "Super Petrol" },
                    { y: 36, label: "36%", indexLabel: "Super Diesel" },
                    { y: 21, label: "21%", indexLabel: "Diesel" },
                    { y: 25, label: "25%", indexLabel: "Petrol" }
                ]
            }
            ]
        });

        chart.render();

  </script>

