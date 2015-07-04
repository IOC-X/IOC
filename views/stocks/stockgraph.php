<script type="text/javascript">
new Chartist.Bar('.ct-chart', {
  labels: ['Petrol', 'SuperPetrol', 'Diesel', 'SuperDiesel'],
  series: [
    [800000, 1200000, 1400000, 1300000],
  ]
}, {
  axisY: {
    labelInterpolationFnc: function(value) {
      return (value / 1000) + ' litres';
    }
  }
}).on('draw', function(data) {
  if(data.type === 'bar') {
    data.element.attr({
      style: 'stroke-width: 40px'
    });
  }
});

</script>
<label style="font-size:20px;padding-bottom:20px">Stock graph</label>
<div class="ct-chart ct-perfect-fourth" style="height:500px;font-size:200px"></div>