
<div>
	<div class="panel panel-warning">
		<div class="panel-heading">
			<h3 class="panel-title"></h3>
			</div>
			<div class="panel-body">
				<a href="revenue/income" class="btn btn-flat btn-primary" id="income">
				<i class="mdi-navigation-arrow-forward"></i> Income</a>
				<a href="revenue/expenses" class="btn btn-flat btn-primary" id="expenses">
				<i class="mdi-navigation-arrow-back"></i> Expenses</a>
				<a href="revenue/payment" class="btn btn-flat btn-primary" id="payment">
				<i class="mdi-notification-play-install"></i> Payment</a>
				<a href="revenue/report" class="btn btn-flat btn-primary" id="report">
				<i class="mdi-social-poll"></i> Report</a>
			</div>

				<script type="text/javascript">
					 function hashCheck(url){
		    	var hashURL = url.split('-');
		    	//if(typeof hashURL[1] == 'string'){
		    		return hashURL[1];
		    	//}
		    }

				$('#income').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/revenue/' + id,function(){
                    //console.log('income !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/revenue/" + id;
                });
	        });
                 $('#expenses').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/revenue/' + id,function(){
                    //console.log('expenses !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/revenue/" + id;
                });
            });

                $('#payment').click(function(e2){
                	e2.preventDefault();
                	var id=$(this).attr('id');

               $('#subloader').load('/IOC/revenue/'+id,function(){
               		//console.log('payment');
               		 $('#subloader').hide();
                	 $('#subloader').fadeIn('fast');
                	 window.location.hash = "";
                	window.location.hash = "/revenue/" + id;
               });
            });

                $('#report').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');

                $('#subloader').load('/IOC/revenue/' + id,function(){
                    //console.log('report !');
 					$('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                	window.location.hash = "";
                	window.location.hash = "/revenue/" + id;
                });
	        });



               
				</script>

				</div>
				</div>

			