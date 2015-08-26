<ul class="breadcrumb">
    <li><a href="javascript:void(0)" id="Petrol" class="fuelType">Petrol</a></li>
    <li><a href="javascript:void(0)" id="SPetrol" class="fuelType">Super Petrol</a></li>
    <li><a href="javascript:void(0)" id="Diesel" class="fuelType">Diesel</a></li>
    <li><a href="javascript:void(0)" id="SDiesel" class="fuelType">Super Diesel</a></li>
</ul>

<form class="form-horizontal">
    <fieldset>
        <legend>Filter by date</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="date" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Date</th>
            <th>Reading</th>
            <th>Quantity(l)</th>
            <th>Order(l)</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody id="fbody">
    </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Edit entry</legend></h4>

            </div>
            
            <div class="modal-body">
    <form class="form-horizontal" id="edit_lube_form" action="" method="post">
    <fieldset>
    
        <div class="form-group">
        <label for="prd-name" class="col-lg-2 control-label">Reading</label>
        <div class="col-lg-7">
            <select type="number" class="form-control" id="pmp-reading" name="pmp-reading">

            </select>
        </div>
        </div>
        <div class="form-group">
        <label for="price" class="col-lg-2 control-label">Quantity</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="pmp-qnty" placeholder="quantity" name="pmp-qnty">
        </div>
        </div>
        <div class="form-group">
        <label for="qnty" class="col-lg-2 control-label">Order</label>
        <div class="col-lg-7">
            
            <select id="pmp-order" class="form-control" name="prd-qnty">
                  <option value="6600">6600</option>
                  <option value="13200">13200</option>
                  <option value="19800">19800</option>
            </select>

        </div>
        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="edit_sub" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </fieldset>
        </form>
    </div>
</div>


<script type="text/javascript">

    $(document).ready(function(){

        var today = new Date();
        today = today.toISOString().substring(0, 10);
        //console.log(today);
        $("#searchInput").attr("max",today);
        
        refresh('Petrol');

        $('.fuelType').click(function(){
            $("tbody").empty();
            var fType = $(this).attr('id');
            FooType = fType;
            $.getJSON('stocks/loadOrders', { type : fType } ,function(data){
                console.log(data[0].Id);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-date" + '">' + data[x].Date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-reading" + '">' + data[x].Reading + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-quantity" + '">' + data[x].Quantity + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-order" + '">' + data[x].Orderamnt + '</td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                    $("." + x + "").append('</tr>').hide().fadeIn('slow');
                }
                
                $('.remove').click(function(e){
                    var id = $(this).attr('href');
                    e.preventDefault();
                    
                    
                    swal({   title: "Are you sure?",   
                        text: "You will not be able to recover this entry",   
                        type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   
                        confirmButtonText: "Yes, delete it!",   cancelButtonText: "No, cancel !",   
                        closeOnConfirm: false,   closeOnCancel: false }, 
                        function(isConfirm){   
                            if (isConfirm) {     
                                $.post('stocks/removeOrder', { ID : id }, function(data){
                                    console.log(data);

                                    //alert('Done !');
                                    if(data == "Success"){
                                        console.log('OK');
                                        refresh(fType);                                        
                                    }

                                });
                                swal("Deleted!", "Entry deleted !.", "success");    
                            } 
                            else {    
                                swal("Cancelled", "", "error");   
                            } 
                        });
                    
                });

                $('.edit').click(function(e){
                    e.preventDefault();
                    if(FooType == "Petrol");{
                        for(a=0.5;a<=122;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }                        
                    }
                    if(FooType == "SPetrol"){
                        for(a=0.5;a<=212;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    if(FooType == "Diesel"){
                        for(a=0.5;a<=122;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    if(FooType == "SDiesel"){
                        for(a=0.5;a<=212;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    $("#pmp-reading").change(function(){
                        if(FooType == "Petrol");{
                            $("#pmp-qnty").val(qntyPetrol($(this).val()));                
                        }
                        if(FooType == "SPetrol"){
                            $("#pmp-qnty").val(qntySPetrol($(this).val()));    
                        }
                        if(FooType == "Diesel"){
                            $("#pmp-qnty").val(qntyDiesel($(this).val()));
                        }
                        if(FooType == "SDiesel"){
                            $("#pmp-qnty").val(qntySDiesel($(this).val()));
                        }
                    });

                    function qntyPetrol(petrol){
                        return Math.round(99.359342916*petrol);
                    }
                    function qntySPetrol(spetrol){
                        return Math.round(76.103773585*spetrol);
                    }
                    function qntyDiesel(diesel){
                        return Math.round(99.359342916*diesel);
                    }
                    function qntySDiesel(sdiesel){
                        return Math.round(76.103773585*sdiesel);
                    }


                    var id = $(this).attr('href');
                    window.editID = id;
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        var reading = $('#'+ id +'-reading').text();
                        var quantity = $('#'+ id +'-quantity').text();
                        var order = $('#'+ id +'-order').text();

                        $.getJSON('stocks/getLubricantSuppliers',function(data){
                            var len = data.length;
                            for(a=0;a<len;a++){
                                $('#supplier').append($('<option>', {value:data[a].name, text:data[a].name}));                
                            }
                        });
                        //console.log(name + price + quantity + supplier);
                        $('#pmp-reading').val(reading);
                        $('#pmp-qnty').val(quantity);
                        $('#pmp-order').val(order);
                    },250);
                    e.preventDefault();
                });

            });

        });


            $('#edit_sub').click(function(){
                
                var pmp_ID = window.editID;
                var pmp_reading = $('#pmp-reading').val();
                var pmp_order = $('#pmp-order').val();
                var pmp_qnty = $('#pmp-qnty').val();

                $.post('stocks/editOrder',{ Id : pmp_ID , reading : pmp_reading , order : pmp_order , qnty : pmp_qnty },function(data){
                    console.log(data);
                    $('#myModal').hide();
                    //console.log('Spec refreshing !');
                    refresh(FooType);
                    //console.log('DONE with func');
                    return true;
                });
                //console.log('sign off');
                
            });

    });
    $("#searchInput").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();

        //Recusively filter the jquery object to get results.
        jo.filter(function () {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
    });
    function refresh(fType){
        console.log('Refreshing');
        $("#fbody").empty();
        $.getJSON('stocks/loadOrders', { type : fType } ,function(data){
                //console.log(data[0].Id);

                var len = data.length;
                for(x=0;x<len;x++){
                    $("tbody").append('<tr class="' + x +'" id="' + data[x].Id + '">');
                    $("." + x + "").append('<td id="' + data[x].Id + "-date" + '">' + data[x].Date + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-reading" + '">' + data[x].Reading + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-quantity" + '">' + data[x].Quantity + '</td>');
                    $("." + x + "").append('<td id="' + data[x].Id + "-order" + '">' + data[x].Orderamnt + '</td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="edit"><i class="mdi-content-create"></i></a></div></td>');
                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].Id + '" class="remove"><i class="mdi-content-remove-circle"></i></a></div></td>');
                    $("." + x + "").append('</tr>').hide().fadeIn('slow');
                }
                $('.remove').click(function(e){
                    var id = $(this).attr('href');
                    e.preventDefault();
                    
                    
                    swal({   title: "Are you sure?",   
                        text: "You will not be able to recover this entry",   
                        type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   
                        confirmButtonText: "Yes, delete it!",   cancelButtonText: "No, cancel !",   
                        closeOnConfirm: false,   closeOnCancel: false }, 
                        function(isConfirm){   
                            if (isConfirm) {     
                                $.post('stocks/removeOrder', { ID : id }, function(data){
                                    console.log(data);
                                    //alert('Done !');
                                    //refresh();
                                });
                                swal("Deleted!", "Entry deleted !.", "success");    
                            } 
                            else {    
                                swal("Cancelled", "", "error");   
                            } 
                        });
                    
                });

                $('.edit').click(function(e){


                    if(FooType == "Petrol");{
                        for(a=0.5;a<=122;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }                        
                    }
                    if(FooType == "SPetrol"){
                        for(a=0.5;a<=212;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    if(FooType == "Diesel"){
                        for(a=0.5;a<=122;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    if(FooType == "SDiesel"){
                        for(a=0.5;a<=212;a=a+0.5){
                            $('#pmp-reading').append("<option value='"+ a +"'>" + a + "</option>")            
                        }
                    }
                    $("#pmp-reading").change(function(){
                        if(FooType == "Petrol");{
                            $("#pmp-qnty").val(qntyPetrol($(this).val()));                
                        }
                        if(FooType == "SPetrol"){
                            $("#pmp-qnty").val(qntySPetrol($(this).val()));    
                        }
                        if(FooType == "Diesel"){
                            $("#pmp-qnty").val(qntyDiesel($(this).val()));
                        }
                        if(FooType == "SDiesel"){
                            $("#pmp-qnty").val(qntySDiesel($(this).val()));
                        }
                    });

                    function qntyPetrol(petrol){
                        return Math.round(99.359342916*petrol);
                    }
                    function qntySPetrol(spetrol){
                        return Math.round(76.103773585*spetrol);
                    }
                    function qntyDiesel(diesel){
                        return Math.round(99.359342916*diesel);
                    }
                    function qntySDiesel(sdiesel){
                        return Math.round(76.103773585*sdiesel);
                    }



                    var id = $(this).attr('href');
                    window.editID = id;
                    $('#myModal').modal('show');
                    setTimeout(function(){
                        var reading = $('#'+ id +'-reading').text();
                        var quantity = $('#'+ id +'-quantity').text();
                        var order = $('#'+ id +'-order').text();

                        $.getJSON('stocks/getLubricantSuppliers',function(data){
                            var len = data.length;
                            for(a=0;a<len;a++){
                                $('#supplier').append($('<option>', {value:data[a].name, text:data[a].name}));                
                            }
                        });
                        //console.log(name + price + quantity + supplier);
                        $('#pmp-reading').val(reading);
                        $('#pmp-qnty').val(quantity);
                        $('#pmp-order').val(order);
                    },250);
                    e.preventDefault();
                });
                //return true;
        });
            console.log('Refreshedd');
            return true;
    }

</script>