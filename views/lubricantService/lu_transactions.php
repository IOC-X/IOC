<div class="btn-group btn-group-justified">
<a href="" class="btn btn-primary" id="Reg_Lu_transactions"><i class="mdi-social-person"></i> Regular Customer Transactions</a>
<a href="" class="btn btn-primary" id="NonReg_Lu_transactions"><i class="mdi-social-person-outline"></i> Non-Regular Customer Transactions</a>
</div>

<script>
$('#Reg_Lu_transactions').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/lube_service/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
            
$('#NonReg_Lu_transactions').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader2').load('/IOC/lube_service/' + id,function(){
                    
                    $('#subloader2').hide();
                	$('#subloader2').fadeIn('fast');
                });
	        });
          </script>
          
          <div id="subloader2">
              
          </div>