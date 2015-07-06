<form class="form-horizontal" method="post">
    <fieldset>
        <legend>Add Equipments</legend>
            <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Category</label> 
                <div class="col-lg-3">
                <div class="btn-group">
    <a href="javascript:void(0)" class="btn btn-primary">Category</a>
    <a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="javascript:void(0)">Action</a></li>
        <li><a href="javascript:void(0)">Another action</a></li>
        <li><a href="javascript:void(0)">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="javascript:void(0)">Separated link</a></li>
    </ul>
</div>
                </div>
            </div>
            <div class="form-group">    
            <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                <input type="text" class="form-control" id="name" placeholder="Name">                     
                </div>
                              
            </div>
            <div class="form-group">
            <label for="produce_code" class="col-lg-2 control-label">Produce code</label>
                <div class="col-lg-4">
                <input type="text" class="form-control" id="produce_code" placeholder="Produce code">             
                </div>
                               
            </div>
            <div class="form-group">
            <label for='motor_make' class="col-lg-2 control-label">Motor make</label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="motor_make" placeholder="Motor make">            
                </div>
                         
            </div> 
               <div class="form-group">
            <label for='manufacturing_date' class="col-lg-2 control-label">Manufacturing date </label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="manufacturing_date" placeholder="Manufacturing date">            
                </div>
                              
            </div> 
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </div>
    </fieldset>
</form>


    <script type="text/javascript">
    $('#cancel_reading').click(function(e){
        $('#subloader2').fadeOut('500',function(){
            $('#subloader2').empty();
        });
        e.preventDefault();
    });
    </script>
    <script type="text/javascript" src="/bower_components/Chart.js/Chart.js"></script>
    <script type="text/javascript">
        var myPieChart = new Chart(ctx[0]).Pie(data,options);

    </script>
<div id="#stock-grah">
    
</div>

