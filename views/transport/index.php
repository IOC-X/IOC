<div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
			</div>
			<div class="panel-body">
				<a href="transport/emergencyTransport" class="btn btn-flat btn-primary" id="emergencyTransport">
				<i class="mdi-alert-error" style="margin-right:10px"></i> Emergency transport</a>
				<a href="transport/lubricantTransport" class="btn btn-flat btn-primary" id="lubricantTransport">
				<i class="mdi-image-blur-on" style="margin-right:10px"></i> Lubricant transport</a>
				<a href="transport/branches" class="btn btn-flat btn-primary" id="branches">
				<i class="mdi-image-filter-none" style="margin-right:10px"></i> Branches</a>
				<a href="transport/report" class="btn btn-flat btn-primary" id="report">
				<i class="mdi-image-style" style="margin-right:10px"></i> Report</a>
			</div>
		</div>
</div>


<script type="text/javascript">
		function hashCheck(url){
	    	var hashURL = url.split('-');
	    	//if(typeof hashURL[1] == 'string'){
	    		return hashURL[1];
	    	//}
	    }

		$('#emergencyTransport').click(function(e2){
	    	e2.preventDefault();
	    	var id = $(this).attr('id');

	        $('#subloader').load('/IOC/transport/' + id,function(){
	                //console.log('emergencyTransport !');
				$('#subloader').hide();
            	$('#subloader').fadeIn('fast');
            	window.location.hash = "";
 		       	window.location.hash = "/transport/" + id;
            });
    	});
         $('#lubricantTransport').click(function(e2){
    	e2.preventDefault();
    	var id = $(this).attr('id');

        $('#subloader').load('/IOC/transport/' + id,function(){
                //console.log('lubricantTrasnport !');
				$('#subloader').hide();
            	$('#subloader').fadeIn('fast');
            	window.location.hash = "";
            	window.location.hash = "/transport/" + id;
            });
    	});

        $('#branches').click(function(e2){
        	e2.preventDefault();
        	var id=$(this).attr('id');

            $('#subloader').load('/IOC/transport/'+id,function(){
           		//console.log('payment');
           		 $('#subloader').hide();
            	 $('#subloader').fadeIn('fast');
            	 window.location.hash = "";
            	window.location.hash = "/transport/" + id;
            });
        });

        $('#report').click(function(e2){
    	e2.preventDefault();
    	var id = $(this).attr('id');

        $('#subloader').load('/IOC/transport/' + id,function(){
                //console.log('report !');
					$('#subloader').hide();
            	$('#subloader').fadeIn('fast');
            	window.location.hash = "";
            	window.location.hash = "/transport/" + id;
            });
    	});
               
</script>			