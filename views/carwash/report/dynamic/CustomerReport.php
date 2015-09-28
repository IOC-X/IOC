<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js"></script> 

<script type="text/javascript">

    var chart = new CanvasJS.Chart("chartContainer",
            {
                theme: "theme2",
                title: {
                    text: "Total Registered Customers"
                },
                animationEnabled: true,
                axisX: {
                    title: "Time Period",
                    valueFormatString: "DD MMM YYYY",
                    interval: 2,
                    intervalType: "month"

                },
                axisY: {
                    title: "Registered Customers",
                    includeZero: true

                },
                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        dataPoints: [
                                    <?php foreach ($stats as $stat) : ?>
                                
                                 {x: new Date(<?php $date = date_create($stat->date);
                                    echo date_format($date, 'Y,m,d'); ?>), 
                                  y: <?php echo ($stat->sum); ?>},
                                    
                                    <?php endforeach; ?>
                                    ]
                    }
                 ]
            });
    chart.render();

</script>


<div id="chartContainer" style="height: 300px; width: 100%;">

</div>

