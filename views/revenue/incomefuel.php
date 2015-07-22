<form class="form-horizontal" method="post">
    <fieldset>
        <legend>Fuel Income</legend>
            <div class="form-group">
            <label for="petrol" class="col-lg-2 control-label">Fuel Type</label> 
                <div class="col-lg-3">
                <div class="btn-group">
    <a href="javascript:void(0)" class="btn btn-primary">Select Fuel Type</a>
    <a href="bootstrap-elements.html" data-target="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="javascript:void(0)">Diesel</a></li>
        <li><a href="javascript:void(0)">Super Diesel</a></li>
        <li><a href="javascript:void(0)">Petrol</a></li>
        <li class="divider"></li>
        <li><a href="javascript:void(0)">Super Petrol</a></li>
    </ul>
</div>
                </div>
            </div>
            
            <div class="form-group">
            <label for="price" class="col-lg-2 control-label">Price</label>
                <div class="col-lg-4">
                <input type="text" class="form-control" id="price" placeholder="Type the price here">             
                </div>
                               
            </div>
            <div class="form-group">
            <label for='quantity' class="col-lg-2 control-label">Quantity</label>                       
                <div class="col-lg-4">
                <input type="text" class="form-control" id="quantity" placeholder="Type the quantity here">            
                </div>
                         
            </div> 
               
        <!-- <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default" id="cancel_reading">Cancel</button>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </div>
        </div> -->
    </fieldset>
</form>


    <!--<script type="text/javascript">
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
--> 

