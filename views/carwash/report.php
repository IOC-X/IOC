	<div class="btn-group btn-group-justified">
    <a href="carwash/pdfReport" class="btn btn-primary" id="pdfReport"><i class="mdi-action-assignment"></i> PDF Reports</a>
    <a href="carwash/dynamicReport" class="btn btn-primary" id="dynamic"><i class="mdi-action-trending-up"></i> Dynamic Reports</a> 
    </div>
		    <script type="text/javascript">
                $('#pdfReport').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                        $('#subloader').load('/IOC/carwash/pdf',function(){
                        
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                        
                });
	        });
            
            $('#dynamic').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                        $('#subloader').load('/IOC/carwash/dynamic',function(){
                        
                    $('#subloader').hide();
                	$('#subloader').fadeIn('fast');
                        
                });
	        });
            
		   
                
                $('#report').click(function(e2){
	        	e2.preventDefault();
	        	var id = $(this).attr('id');
                $('#subloader').load('/IOC/carwash/' + id,function(){
                    
                });
	        });
	        </script>
            <div id="subloader2">
               
            </div>
            
<!--            <div id="subloader3">
             <object data="carwash/pdfReport" type="application/pdf" width="900px" height="500px">
  
                </object>
            </div>-->
            