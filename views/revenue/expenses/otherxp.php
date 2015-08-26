<div>

    <!--start of filling application -->
    <div class="col-md-12">
        <form class="form-horizontal" method="post" action="revenue/insertOtherExpenses" id="otherexpenseForm" >
            <fieldset>
                <legend>Other Expenses</legend> <!--font style-->

                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="description">Description</label>
                    </div>
                    <div class="col-lg-4">
                        <textarea class="form-control" id="description"  name="description" rows="4" cols="50"></textarea>
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="expense">Total amount</label>
                    </div>

                    <div class="col-lg-4">
                        <input type="number" class="form-control" name="expense" id="expense" placeholder="" 
                               title="Use only numbers for Price" />
                    </div>

                </div>

               

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" id="inert">Submit</button>
                    </div>

                </div>





            </fieldset>
        </form>

    </div> 
    
    
    
    
    <div class="form-actions col-lg-12">
        <div class="col-lg-50 col-lg-1"><a href="javascript:void(0)" class="btn btn-primary btn-raised" id="lubricant_inc_history"><i class="mdi-social-poll"></i> History</a></div>

    </div>   
    <!-- end of filling application-->

   <!--  <table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Selling quantity</th>
            <th>Total price</th>
            <th>TIme(Date)</th>>
            <th></th>
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table> -->

</div>


<script>

    $(document).ready(function(){
        $("#lubricant_inc_history").click(function(){
            $('#subloader2').load('/IOC/revenue/historyOther',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
    	$("#otherexpenseForm").submit(function(e){
    		e.preventDefault();
	    	var form = $("#otherexpenseForm");
			$.ajax({
		          type : form.attr('method'),
		          url : form.attr('action'),
		          data : form.serialize(),
		          success: function(data){
		            console.log(data);
		            if(data == "Success"){

		                swal("Success !", "Order entries successfully added !", "success");
		                // $('#subloader2').empty();
		                // $('#subloader2').load('/IOC/stocks/view_orders',function(){
		                //     $('#subloader2').hide();
		                //     $('#subloader2').fadeIn('fast');
		                // });
		            }
		            $('#calculate').attr('disabled','disabled');                    
		          }
		    });    		
    	});
 
    });
</script>