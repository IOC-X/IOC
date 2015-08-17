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
            <a href="#" data-mfb-label="Add" class="mfb-component__button--child">
              <i class="mfb-component__child-icon ion-calendar"></i>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <script type="text/javascript" src="<?php echo BOWER ?>mustache/mustache.js"></script>
<script>

    $(document).ready(function(){
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
