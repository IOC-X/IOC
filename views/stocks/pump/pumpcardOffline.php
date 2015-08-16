<div class="col-md-4 col-sm-6 col-xs-12" id="pump-11-card">
            <article class="material-card Red">
                <h2>
                    <span class="pumpNo">Pump {{ pmpNo }}</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        {{ status }}
                        ----{{ fuel }}
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container">
                        <img class="img-responsive" src="<?php echo IMG ?>stocks/pump/img/pump.jpg">
                    </div>
                    <div class="mc-description">
                        <label>Status</label>
                        <div class="togglebutton" style="margin-left:20px">
                               
                                <label>
                                    <input type="checkbox" class="toggle-status" id="{{ pmpNo }}" >
                                </label>
                               
                        </div>
                        
                    </div>
                </div>
                <a class="mc-btn-action">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="mc-footer">
                    <h4>
                        
                    </h4>
                    
                </div>
            </article>
</div>
    