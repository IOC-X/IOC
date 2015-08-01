<div class="list-group">
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 1 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-1" >
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-1">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 2 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/red_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" class="toggle-status" id="pump-2">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-2">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 3 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-3">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 4 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-4">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 5 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-5">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 6 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-6">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 7 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status" id="pump-7">
                    </label>
            </div>
            <p class="list-group-item-text" id="pmp-status-">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
        


</div>

<script>

    $('#pump-1').click(function(){
        if($(this).prop('checked')){
            $("#pmp-status-1").empty().append('Online');            
        }
        else{
            $("#pmp-status-1").empty().append('Offline');
        }
  
    })

</script>