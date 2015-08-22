<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.js"></script> 
-->
  <script type="text/javascript">
    //console.log(JSON.parse(window.myVar)[1].petrol);
    // var Petrol = Number(window.petrol);
    // var SPetrol = Number(window.spetrol);
    // var Diesel = Number(window.diesel);
    // var SDiesel = Number(window.sdiesel);
    // var chart = new CanvasJS.Chart("chartContainer",
    // {
    //   title:{
    //     text: ""    
    //   },
    //   animationEnabled: true,
    //   axisY: {
    //     title: "Reserves(MMbbl)"
    //   },
    //   legend: {
    //     verticalAlign: "bottom",
    //     horizontalAlign: "center"
    //   },
    //   theme: "theme3",
    //   data: [

    //   {        
    //     type: "column",  
    //     showInLegend: true, 
    //     legendMarkerColor: "grey",
    //     legendText: "l - litres",
    //     dataPoints: [      
    //     {y: Petrol, label: "Petrol"},
    //     {y: SPetrol,  label: "Super Petrol" },
    //     {y: Diesel,  label: "Diesel"},
    //     {y: SDiesel,  label: "Super Diesel"},
    //     ]
    //   }   
    //   ]
    // });

    // chart.render();
  
  </script>


<!--  <div id="chartContainer" style="height: 300px; width: 100%;">
  </div> -->
  <div id="divForGraph"></div>


<script type="text/javascript" src="<?php echo CSS?>stocks/js/jqBarGraph.1.1.js"></script>
<script type="text/javascript">
    var Petrol = Number(window.petrol);
    //Petrol = Petrol / 2000;
    var SPetrol = Number(window.spetrol);
    //SPetrol = SPetrol / 2000;
    var Diesel = Number(window.diesel);
    //Diesel = Diesel / 2000;
    var SDiesel = Number(window.sdiesel);
    // SDiesel = SDiesel / 2000;
    arrayOfData = new Array(
        [Petrol,'Petrol','#52CC52'],
        [SPetrol,'Super Petrol','#52CC52'],
        [Diesel,'Diesel','#52CC52'],
        [SDiesel,'Super Diesel','#52CC52']
    );
    $('#divForGraph').jqBarGraph({ data: arrayOfData , width: 780 , barSpace: 30 }); 
</script>