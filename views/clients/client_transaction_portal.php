
<form class="form-horizontal" action="clients/sendemail" id="send_email_form" method="post">
    <fieldset>
        <legend>Client Update Portal</legend>
        <div class="form-group">
            <label for="To" class="col-lg-2 control-label">Sender Name</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="user" name="user" placeholder="Sender Name" pattern="[A-Z]{1}[a-z]{2,}">
            </div>
        </div>
         <div class="form-group">
            <label for="To" class="col-lg-2 control-label">Client Email</label>
            <div class="col-lg-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Client Email">
            </div>
        </div>
          <div class="form-group">
            <label for="subject" class="col-lg-2 control-label">Subject</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject Area" pattern="[A-Z]{1}[a-z]{2,}">
            </div>
        </div>
           <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-8">
                <textarea class="form-control" rows="3" id="body" name="body"></textarea>
                <span class="help-block">Type Your Message Here.</span>
            </div>
        </div>
        
         <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </div>
    </fieldset>
</form>
<script type="text/javascript">
 
    $('#send_email_form').submit(function(e1)
       { 
            e1.preventDefault();
            var user = $('#user').val();
            var subject = $('#subject').val();	      
            var email = $('#email').val();
            var body = $('#body').val();
           
           
            if(user == "" || subject == "" || email == "" || body == "" )
            {
               swal("Bump !", "Please fill every field");
            return false;
            }
        
           else{
            swal({   title: "Wait",   text: "processing to send e-mail",   timer: 4000,   showConfirmButton: false });
            var form = $('#send_email_form');
            $.ajax({
              type : form.attr('method'),
              url : form.attr('action'),
              data: form.serialize(),
                success: function (data) {
                console.log(data);
                
              swal("Email successfully!", "click okay to continue", "success");
    
                $('#subloader2').empty();
                $('#subloader2').load('/IOC/clients/clientmanagement').hide().fadeIn('slow');
            }
               
                   
                
               
              }
              
            );
            }
 
    });
    
    </script>