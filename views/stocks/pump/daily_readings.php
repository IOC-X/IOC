<ul class="breadcrumb">
    <li><a href="javascript:void(0)" id="prev_entries">Previous entries</a></li>
</ul>

<div id="record_loader">
<form class="form-horizontal" id="daily_readings_form" method="post" action="stocks/insertPumpReadings">
    <fieldset>	
    <div class="col-lg-4">
        <div class="form-group">
            <label for="1" class="col-lg-2 control-label">Pump 1</label>
            <div class="col-lg-5">
                <input type="text" class="form-control" id="1" placeholder="pump 1">
            </div>
        </div>
        <div class="form-group">
            <label for="2" class="col-lg-2 control-label">Pump 2</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="2" placeholder="pump 2">
            </div>
        </div>
        <div class="form-group">
            <label for="3" class="col-lg-2 control-label">Pump 3</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="3" placeholder="pump 3">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label for="4" class="col-lg-2 control-label">Pump 4</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="4" placeholder="pump 4">
            </div>
        </div>
        <div class="form-group">
            <label for="5" class="col-lg-2 control-label">Pump 5</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="5" placeholder="pump 5">
            </div>
        </div>
        <div class="form-group">
            <label for="6" class="col-lg-2 control-label">Pump 6</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="6" placeholder="pump 6">
            </div>
        </div>   
    </div> 
    <div class="col-lg-4">
        <div class="form-group">
            <label for="7" class="col-lg-2 control-label">Pump 7</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="7" placeholder="pump 7">
            </div>
        </div>                     
        <div class="form-group">
            <label for="8" class="col-lg-2 control-label">Pump 8</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="8" placeholder="pump 8">
            </div>
        </div>    
        <div class="form-group">
            <label for="9" class="col-lg-2 control-label">Pump 9</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" id="9" placeholder="pump 9">
            </div>
        </div>      
    </div>      
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" id="submitReadings">Submit</button>
                <span class="order"></span>
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
	          }
	        });
	      });
	      $('#prev_entries').click(function(){
	      	$('#record_loader').empty();
	      	$('#record_loader').load('/IOC/stocks/previousEntries').hide().fadeIn('slow');
	      });
		</script>




