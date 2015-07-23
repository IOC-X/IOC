 <style>
#circle
{
border-radius:50% 50% 50% 50%;
width:70px;
height:70px;
}
</style>



<div>
<table class="table table-striped table-hover ">
        <col style="width:10%">
        <col style="width:10%">
        <col style="width:40%">
        <col style="width:20%">
        <col style="width:20%">
    <thead>
        <tr>
            <th>Member Number</th>
            <th></th>
            <th>Manager Name</th>
            <th >Edit Manager</th>
            <th>Delete Manager</th>
        </tr>
    </thead>
    <tbody>

	            <?php $controller = new Employees();
                    $data = $controller->loadListEmployees();

                        while($row=$data->fetch(PDO::FETCH_ASSOC)){ ?>

        <tr class="info" onmouseover="colvalue(this);">

            <td> <?php echo ($row["managerCode"]); ?>  </td>

            <td>
            <div class="list-group">
                <div class="list-group-item">
                    <div class="row-picture">
                        <img src="<?php echo ($row["file"]); ?>" id="circle">

                    </div>
                </div>

            </td>

            <td> <?php echo ($row["firstName"]);echo " "; echo ($row["lastName"]); ?>  </td>

            <td>

                <div class="icon-preview">
                    <a href="javascript:void(0)" class="btn btn-info btn-raised btn-sm btn"
                       id="update_employees" onclick="loadedit()">

		<i class="mdi-editor-mode-edit"></i></a>
            </div>

            </td>

            <td>
                <a href="" class="btn btn-primary btn-sm btn btn-danger " >
		<i class="mdi-action-highlight-remove"></i></a>
                
            </td>

            </tr>




 <?php
                        }?>

    </tbody>
</table>



<br/>


</div>

<script>
    var idValue;
    function colvalue(row){

        var x=row.cells;

        idValue = x[0].innerHTML;
        idValue = idValue.toString();
    }

function loadedit()
{


var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("subloader").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","employees/searchEmployees?id="+idValue  ,true);
xmlhttp.send();
}
</script>
