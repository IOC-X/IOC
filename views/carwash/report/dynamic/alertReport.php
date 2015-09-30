<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script> 

<script type="text/javascript">

    var chart = new CanvasJS.Chart("chartContainer",
            {
                theme: "theme2",
                title: {
                    text: "Number of returned vehicles perday"
                },
                animationEnabled: true,
                axisX: {
                    title: "Time Period",
                    valueFormatString: "DD MMM YYYY",
                    interval: 1,
                    intervalType: "month"

                },
                axisY: {
                    title: "Number of returned vehicles",
                    includeZero: true

                },
                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        dataPoints: [
                                    <?php foreach ($stats as $stat) : ?>
                                
                                 {x: new Date(<?php $date = date_create($stat->date);
                                    echo date_format($date, 'Y,m-1,d'); ?>), 
                                  y: <?php echo ($stat->count); ?>},
                                    
                                    <?php endforeach; ?>
                                    ]
                    }
                 ]
            });
    chart.render();

</script>


<div id="chartContainer" style="height: 300px; width: 100%;">

</div>



