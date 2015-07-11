<form class="form-horizontal" method="post">
    <fieldset>
        <legend>Add Supplier</legend>
            
            <div class="form-group">    
            <label for="first_name" class="col-lg-2 control-label">First Name</label>
                <div class="col-lg-3">
                <input type="text" class="form-control" id="first_name" placeholder="First Name">                     
                </div>
                   <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                <div class="col-lg-3">
                <input type="text" class="form-control" id="last_name" placeholder="Last Name">             
                </div>           
            </div>
            
            <div class="form-group">
            <label for='company' class="col-lg-2 control-label">Company</label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="company" placeholder="Company">            
                </div>
                         
            </div> 
               <div class="form-group">
            <label for='nic' class="col-lg-2 control-label">NIC Number </label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="nic" placeholder="NIC Number">            
                </div>
                              
            </div> 
             <div class="form-group">
            <label for='phone_number' class="col-lg-2 control-label">Phone Number </label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="phone_number" placeholder="Phone Number">            
                </div>
                              
            </div>
             <div class="form-group">
            <label for='address' class="col-lg-2 control-label">Address </label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="address" placeholder="Address">            
                </div>
                              
            </div>
                 <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Supplier Type</label> 
                <div class="col-lg-3">
                <div class="btn-group">
    <a href="javascript:void(0)" class="btn btn-primary">Type</a>
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

