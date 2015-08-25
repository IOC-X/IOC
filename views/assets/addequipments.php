<form class="form-horizontal" method="post" action="assets/insert_equipments" id="insert_equimpents-form">
    <fieldset>
        <legend>Add Equipments</legend>
            <div class="form-group">
            <label for="type" class="col-lg-2 control-label">Type</label> 
                 <div class="col-lg-4">
                <select id="type" placeholder="type" class="form-control" name="type">
                  <option></option>
                  <option value="Grease Pump">Grease Pump</option>
                  <option value="Hydraulic Hoists">Hydraulic Hoists</option>
                  <option value="Shampoo machine">Shampoo machine</option>
                  <option value="Oil Drainer">Oil Drainer</option>
                </select>
        </div>
              
            </div>
            <div class="form-group">    
            <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name">                     
                </div>
                              
            </div>
            <div class="form-group">
            <label for="produce_code" class="col-lg-2 control-label">Produce code</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="produce-code" placeholder="Produce code" name="produce-code">             
                </div>
                               
            </div>
            <div class="form-group">
            <label for='motor_make' class="col-lg-2 control-label">Motor make</label>                       
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="motor-make" placeholder="Motor make" name="motor-make">            
                </div>
                         
            </div> 
               <div class="form-group">
            <label for='manufacturing_date' class="col-lg-2 control-label">Manufacturing date </label>                       
                <div class="col-lg-4">
                    <input type="date" class="form-control" id="manufacturing-date" placeholder="mm/dd/yyyy" name="manufacturing-date">            
                </div>
                              
            </div> 
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button  type="reset"class="btn btn-default" id="cancel_reading">Reset</button>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </fieldset>
</form>


    <script type="text/javascript">
 $('#insert_equimpents-form').submit(function(e1)
       { 
            e1.preventDefault();
            var type = $('#type').val();
            var name = $('#name').val();	      
            var procode = $('#produce-code').val();
            var motor_make = $('#motor-make').val();
            var m_date = $('#manufacturing-date').val();
           
            if(name == "" || procode == "" || motor_make == "" || m_date == "" || type == "" )
            {
               swal("Bump !", "Please fill every field");
            return false;
            }
           
            
        else{
            
            var form = $('#insert_equimpents-form');
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data: form.serialize(),
                success: function (data) {
                console.log(data);
                
                swal("Supplier added successfully!", "click okay to continue", "success");

                $('#subloader2').empty();
                $('#subloader2').load('/IOC/assets/viewequipments').hide().fadeIn('slow');
            }
               
                   
                
               
              }
              
            );
            }
 
    });
    </script>
<div id="#stock-grah">
    
</div>

