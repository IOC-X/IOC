<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Supplier report</strong></h3>
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
    	"Grease Pump" : 'Grease Pump',
    	"Oil Drainer" : 'Oil Drainer',
    	"Hydrualic Hoists" : 'Hydrualic Hoists',
    	"Shampoo machine" : 'Shampoo machine',
    	
	};
	$.each(myOptions, function(val, text) {
	    $('#mySelect').append( new Option(text,val) );
	});


	$("#sub").click(function(){
        var typo = $('#mySelect').val();
            window.typo = typo;

      $("#pdfloader").load('assets/displayAssetsReport',{ typo : typo},function(data){
         console.log(data);
     });
	});
</script>