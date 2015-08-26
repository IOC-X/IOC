<ul class="breadcrumb">
    <li><a href="javascript:void(0)" id="prev_entries">Previous entries</a></li>
</ul>

<div id="record_loader">
<form class="form-horizontal" id="daily_readings_form" method="post" action="stocks/insertPumpReadings">
    <fieldset>	
    <div class="col-lg-6" id="first-col">
        
    </div>
    <div class="col-lg-6" id="second-col">
            
    </div>

    <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" id="calculate">Submit</button>
            </div>
        </div> 
                      
    </fieldset>
</form>
</div>

	    <script type="text/javascript">
	      $('#daily_readings_form').submit(function(e){
	        e.preventDefault();
	        var form = $('#daily_readings_form');

	        $.ajax({
	          type : form.attr('method'),
	          url : form.attr('action'),
	          data : form.serialize(),
	          success: function(data){
	            console.log(data);
<<<<<<< HEAD
                //if(data == "Success"){
                    swal("Readings added successfully!", "click okay to continue", "success");
                    $('.form-control').val("");
                //}
                //if(data == "ZeroAsap"){
                    swal("Fill all !", "click okay to continue", "success");
                //    $('.form-control').val("");    
                //}
=======
               
                    swal("Readings added successfully!", "click okay to continue", "success");
                    $('.form-control').val("");
                
                
>>>>>>> 9255236be5cd45869a014973b5785e893203c4a0
	          }
	        });
	      });
	      $('#prev_entries').click(function(){
	      	$('#record_loader').empty();
	      	$('#record_loader').load('/IOC/stocks/previousEntries').hide().fadeIn('slow');
	      });



        $(document).ready(function(){
            $.getJSON('stocks/pumpStatuses',function(data){
                var len = data.length;
                for(a=0;a<len;a++){
                    if(data[a].Status == "Offline"){
                        console.log(data[a].Status);
                    }
                    else if(a<5){
                        $('#first-col').append('<div class="form-group"> \
                        <label for="1" class="col-lg-3 control-label">Pump ' + data[a].PumpNo + '</label> \
                        <div class="col-lg-5"> \
                            <input type="number" name="' + data[a].PumpNo + '" class="form-control" id="' + data[a].PumpNo + '" placeholder="pump ' + data[a].PumpNo + '" min="0"> \
                        </div> \
                        </div>');
                    }
                    else{
                        $('#second-col').append('<div class="form-group"> \
                        <label for="1" class="col-lg-3 control-label">Pump ' + data[a].PumpNo + '</label> \
                        <div class="col-lg-5"> \
                            <input type="number" name="' + data[a].PumpNo + '" class="form-control" id="' + data[a].PumpNo + '" placeholder="pump ' + data[a].PumpNo + '" min="0"> \
                        </div> \
                        </div>');
                    } 
                }
            });
        

        });

		</script>




