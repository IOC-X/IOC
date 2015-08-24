<div>
	<form class="form-horizontal" method="POST" action="overall/income" enctype="multipart/form-data" id="overallIncome">
		<fieldset>
			<div class="form-group">
                    <label for="time" class="col-lg-2 control-label">Select time(Date)</label>
                    <div class="col-lg-3">
                        <input type="text" class="form-control" name="time" id="time" placeholder="" >
                    </div>
                </div>
		</fieldset>
	</form>


	

	<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Fuel Income</th>
            <th>Lubricants Income</th>
            <th>Regular Car Wash Income</th>
            <th>Non Regular Car wash Income</th>
            <th>Date</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--<tbody id="fbody">
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><div class="icon-preview"><a href=""><i class="mdi-content-create"></i></a></div></td>
    <td><div class="icon-preview"><a href=""><i class="mdi-content-remove-circle"></i></a></div></td>
    </tbody>-->
</table>


</div>

<script type="text/javascript">
    $(document).ready(function(){
        $.getJSON('revenue/loadOverall',function(data){
            console.log(data[0]);
            var len = data.length;
 //            for(a=0;a<len;a++){
 // //               console.log(data[a].Name);
                
 //            }
        });
    });

</script>