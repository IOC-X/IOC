<div class="col-lg-12" style="margin-bottom:20px;margin-left:10px">
<button class="btn btn-fab btn-raised btn-material-red" onclick="window.location.reload();"><i class="mdi-navigation-arrow-forward"></i></button>
</div>
<br/>
<div>
<section class="container">
    <div class="row active-with-click" id="app">
        
        
    </div>
</section>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title" id="myModalLabel"><legend>Add Pump</legend></h4>

            </div>
            
        <div class="modal-body">
    
    <fieldset>
    <form class="form-horizontal" id="addPump" action="stocks/addPump" method="post">
        <div class="form-group">
        <label for="name" class="col-lg-3 control-label">Pump no</label>
        <div class="col-lg-7">
            <input type="number" class="form-control" id="pump-no">   
        </div>
        </div>
        <div class="form-group">
        <label for="name" class="col-lg-3 control-label">Fuel type</label>
        <div class="col-lg-7">
            <select type="text" class="form-control" id="fueltype" name="fueltype">
                <option value="Petrol">Petrol</option>
                <option value="SuperPetrol">Super Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="SuperDiesel">Super Diesel</option>
            </select>
        </div>
        </div>
        </div>
        </fieldset>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="add_pmp" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        
    </form>
        </div>
        </fieldset>
</div>


<ul id="menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
      <li class="mfb-component__wrap">
        <a href="#" data-mfb-label="A long long label" class="mfb-component__button--main">
          <i class="mfb-component__main-icon--resting ion-plus-round"></i>
          <i class="mfb-component__main-icon--active ion-edit"></i>
        </a>
        <ul class="mfb-component__list">
          <li>
            <a href="edit" data-mfb-label="Edit" class="mfb-component__button--child">
              <i class="mfb-component__child-icon ion-paperclip"></i>
            </a>
          </li>

          <li>
            <a href="#" data-mfb-label="Add" class="mfb-component__button--child" id="addPMP">
              <i class="mfb-component__child-icon ion-calendar"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <script type="text/javascript" src="<?php echo BOWER ?>mustache/mustache.js"></script>
<script>

    $(document).ready(function(){

        $("#addPMP").click(function(e){
            e.preventDefault();
            $("#myModal").modal('show');
        });

        $("#add_pmp").click(function(){
            var fuel = $("#fueltype").val();
            var pumpnumber = $("#pump-no").val();
            $.get('stocks/addPump',{ no : pumpnumber , fuelType : fuel },function(data){
                console.log(data);
            });
        });

        console.log('Sending');
        $.getJSON('stocks/pumpStatuses',function(data){
            console.log(data.length);
            console.log(data[0].PumpNo);
            var len = data.length;
            
                
 
                for(a=0;a<len;a++){
                    var pmpNo = data[a].PumpNo;
                    var status = data[a].Status;
                    var id =  data[a].PumpNo;
                    var fuel = data[a].Fuel;
                    console.log(pmpNo);
                    if(status == "Online"){
                        // $.get('stocks/pumpCardOnline',function(onlineData){
                        //     var template = onlineData;
                        //     var render = Mustache.render(template,{ pmpNo , status , id , fuel });
                        //     $('#app').append(render);        
                        // });
                        $.ajax({ url: 'stocks/pumpCardOnline', 
                            async: false,
                            success: function(onlineData) {  
                                var template = onlineData;
                                var render = Mustache.render(template,{ pmpNo , status , id , fuel });
                                $('#app').append(render);          
                            }
                        });
                    }
                    //console.log(pmpNo);
                    else if(status == "Offline"){
                        // $.get('stocks/pumpCardOffline',function(offlineData){
                        //     var template = offlineData;
                        //     var render = Mustache.render(template,{ pmpNo , status , id , fuel });
                        //     $('#app').append(render);        
                        // });
                        $.ajax({ url: 'stocks/pumpCardOffline', 
                            async: false,
                            success: function(offlineData) {  
                                var template = offlineData;
                                var render = Mustache.render(template,{ pmpNo , status , id , fuel });
                                $('#app').append(render);          
                            }
                        });

                    }
                    

                
                }
                //function for material card (pump card)
                //placed inside async timeout to wait until the pump card loads
                setTimeout(function(){
                    $(function() {
                        $('.material-card > .mc-btn-action').click(function () {
                            var card = $(this).parent('.material-card');
                            var icon = $(this).children('i');
                            icon.addClass('fa-spin-fast');

                            if (card.hasClass('mc-active')) {
                                card.removeClass('mc-active');

                                window.setTimeout(function() {
                                    icon
                                        .removeClass('fa-arrow-left')
                                        .removeClass('fa-spin-fast')
                                        .addClass('fa-bars');

                                }, 800);
                            } else {
                                card.addClass('mc-active');

                                window.setTimeout(function() {
                                    icon
                                        .removeClass('fa-bars')
                                        .removeClass('fa-spin-fast')
                                        .addClass('fa-arrow-left');

                                }, 800);
                            }
                        });
                    });
                    //function for changing status of pumps
                    var status = $('.stat').text();
                        $('.toggle-status').click(function(){
                            var id = $(this).prop('id');
                            console.log(id);
                            if($(this).prop('checked')){

                                console.log('CLickedd');
                                $.get('stocks/updatePumpStatus', { id : id , status : 'Online' }).done(function(log){
                                    console.log(log);
                                    $('#subloader2').load('/IOC/stocks/statuses',function(){
                                        $('#subloader2').hide();
                                        $('#loader').fadeOut('slow');
                                        $('#pump-tabs').fadeOut('slow');
                                        setTimeout(function(){
                                            $('#subloader2').fadeIn('slow');
                                        },500);
                                        
                                    });
                                });
                                //$('#subloader2').fadeOut().fadeIn();
                            }
                            else{
                                $('#subloader2').fadeOut().fadeIn();
                                $.get('stocks/updatePumpStatus', { id : id , status : 'Offline' }).done(function(log){
                                    $('#subloader2').load('/IOC/stocks/statuses',function(){
                                        $('#subloader2').hide();
                                        $('#loader').fadeOut('slow');
                                        $('#pump-tabs').fadeOut('slow');
                                        setTimeout(function(){
                                            $('#subloader2').fadeIn('slow');
                                        },500);
                                        
                                    });
                                });
                                console.log('CLickedd');                
                            }
                        })


                },120);
            
            
        });
    });



    $('#pump-1').click(function(){
        if($(this).prop('checked')){
            $('#pump-1-card').removeClass('material-card Red').addClass('material-card Teal');
            $('#subloader2').fadeOut().fadeIn();
            console.log('CLickedd');
        }
        else{
            $("#pmp-status-1").empty().append('Offline');
        }
  
    })







</script>
