<script>
    var currentTime = new Date();
    var gotdate = currentTime.toDateString();

    document.getElementById("demo").innerHTML = "Today's Date : " + gotdate;
</script>
<legend id="demo"></legend>

<div class="form-group">

    <div class="col-lg-6">
        <div class="bs-component">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Working Employees</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="bs-component">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">Employees didn't Show up yet</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        //employee list 
        $.getJSON('employees/list_employees', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {
                $('#empname').append(
                        $('<option class="empcode" id="' + x + '"></option>').val(x).html(data[x].firstName + " " + data[x].lastName));

            }
        });

    });
</script>