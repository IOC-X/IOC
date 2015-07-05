<div class="list-group">
    <div class="list-group-item">
        <div class="row-picture">
            <img class="circle" src="<?php echo CSS ?>stocks/pump/img/pump.png" alt="icon">
        </div>
        <div class="row-content">
            <h4 class="list-group-item-heading">Pump 1 <img style="margin-left:200px"class="circle" src="<?php echo CSS ?>stocks/pump/img/green_dot.png"> </h4>
            <div class="togglebutton" style="margin-left:270px">
                    <label>
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
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
                        <input type="checkbox" checked="" class="toggle-status">
                    </label>
            </div>
            <p class="list-group-item-text">Online</p>
        </div>
    </div>
    <div class="list-group-separator"></div>
        


</div>

<script>


    $('.toggle-status').click(function(){
        if($(this).prop('checked')){
            $('.list-group-item-text').empty().append('Online');            
        }
        else{
            $('.list-group-item-text').empty().append('Offline');
        }
  
    })

</script>