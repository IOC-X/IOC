<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Attendance report</strong></h3>
</div>
<div class="col-lg-4">
<select id="mySelect2" class="form-control">
</select>
</div>

<div class="col-lg-4">
<select id="mySelect" class="form-control">
</select>
</div>

<div class="col-lg-3">
<input type="button" value="Generate report" class="btn btn-primary" id="sub">
</div>



<p id="pdfloader"></p>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
	var myOptions = {
    	01 : 'January',
    	02 : 'February',
    	03 : 'March',
    	04 : 'April',
    	05 : 'May',
    	06 : 'June',
    	07 : 'July',
    	08 : 'August',
    	09 : 'September',
    	10 : 'October',
    	11 : 'November',
    	12 : 'December'
	};
	$.each(myOptions, function(val, text) {
	    $('#mySelect').append( new Option(text,val) );
	});
	var myOptions2 = {
        2020 : '2020',
        2019 : '2019',
        2018 : '2018',
        2017 : '2017',
        2016 : '2016',
    	2015 : '2015'    	
	};
	$.each(myOptions2, function(val, text) {
	    $('#mySelect2').append( new Option(text,val) );
	});

	$("#sub").click(function(){
        var month = $('#mySelect').val();
        var year = $('#mySelect2').val();
		
        var compe = year+ "-0"+month;
        window.compe = compe;

        $("#pdfloader").load('employees/displayAttenReport',{ month : month , year : year },function(data){
            console.log(data);
        });
	});
</script>