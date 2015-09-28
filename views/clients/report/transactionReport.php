<div class="col-lg-12 text-center">
    <h3 class="text-center success"><strong>Attendance report</strong></h3>
</div>
<div class="col-lg-4">
<select id="mySelect2" class="form-control">
</select>
</div>

<div class="col-lg-4">
                <select id="cliName" class="form-control" name="cliName" onchange="loadnum()" >
                <option></option>
                </select>
</div>

<div class="col-lg-3">
<input type="button" value="Generate report" class="btn btn-primary" id="sub">
</div>



<p id="pdfloader"></p>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
      $.getJSON('clients/getclientdata', function (data) {
            
            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#cliName').append(
                        $('<option class="cliName" id="' + x + '"></option>').val(x).html(data[x].client_fname+" "+data[x].client_lname));

            }
            
            
        });
             var empcode;
        function loadnum() {
             var ee = document.getElementById("cliName").value;   



 
           $.getJSON('clients/getclientdata', function (dat) {

           empcode = dat[ee].client_id;

        });    
        }
        
        
        
	var myOptions2 = {
        2020 : '2020',
        2019 : '2019',
        2018 : '2018',
        2017 : '2017',
        2016 : '2016',
    	2015 : '2015'    	
	};
	$.each(myOptions2, function(val, text) {
	    $('#mySelect2').append( new Option(text,val) );
	});

	$("#sub").click(function(){
            
                 var year = $('#mySelect2').val();

        
        
     var co = year+ "*"+empcode;
      window.co = co;

        $("#pdfloader").load('clients/displayTrReport',{ co : co },function(data){
         console.log(data);
        });
	});
</script>
