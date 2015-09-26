<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Emergency transport report</strong></h3>
</div>
<!-- <iframe src="stocks/retrieveStocksReport" width="920" height="400" style="border: none"></iframe> -->
<div class="col-md-3">
<select id="mySelect" class="form-control">
</select>
<select id="mySelect2" class="form-control">
</select>

<input type="button" value="Generate report" class="btn btn-primary" id="sub">
</div>
<p id="pdfloader"></p>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
	var myOptions = {
    	01 : 'Jan',
    	02 : 'Feb',
    	03 : 'Mar',
    	04 : 'Apr',
    	05 : 'May',
    	06 : 'Jun',
    	07 : 'Jul',
    	08 : 'Aug',
    	09 : 'Sep',
    	10 : 'Oct',
    	11 : 'Nov',
    	12 : 'Dec'
	};
	$.each(myOptions, function(val, text) {
	    $('#mySelect').append( new Option(text,val) );
	});
	var myOptions2 = {
    	2015 : '2015',
    	2014 : '2014'
	};
	$.each(myOptions2, function(val, text) {
	    $('#mySelect2').append( new Option(text,val) );
	});

	$("#sub").click(function(){
        var month = $('#mySelect').val();
        var year = $('#mySelect2').val();
		
        var yy = year + "-0" + month;
        window.yy = yy;
        $("#pdfloader").load('transport/displayEmgReport',{ month : month , year : year },function(data){
            console.log(data);
        });
	});
</script>