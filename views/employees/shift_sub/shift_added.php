<form class="form-horizontal" method="post" action="employees/shift_newdetails" id="clicksub">
    <fieldset>
        <legend>Add new Shift</legend>
        <div class="form-group">
            <label for="shiftid" class="col-lg-2 control-label">Shift ID</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftid" placeholder="autogenerate" name="shiftid" readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="shiftname" class="col-lg-2 control-label">Shift Name</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftname" placeholder="Shift Name.." name="shiftname"
                       pattern="[a-zA-Z- 0-9]{1,20}" title="Use only letters,numbers and '-' " required="">
            </div>
        </div>
        <div class="form-group">
            <label for="shiftduration" class="col-lg-2 control-label">Shift Duration</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" id="shiftduration" placeholder="eg: 7.00 " name="shiftduration"
                       pattern="[0-9.]{1,10}" title="Use only numbers " required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftrate" class="col-lg-2 control-label">Shift Rate</label>
            <div class="col-lg-7">
                <input type="text" class="form-control" placeholder="Rs: " id="shiftrate"  name="shiftrate" pattern="[0-9]{2,4}" title="Eg : 0 to 1000" required="">
            </div>
        </div> 
        <div class="form-group">
            <label for="shiftcolor" class="col-lg-2 control-label">Shift Colour</label>
            <div class="col-lg-7">
                <select id="shiftcolor"  class="form-control" name="shiftcolor" onchange="loadcolor()" required="">
                    <option></option>

                </select>
                <input type="hidden" id="shiftco" name="shiftco">
            </div>
        </div> 
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="submit" class="btn btn-primary" >Submit</button>
            </div>
        </div>	
    </fieldset>
</form>

<script>
    //makeing shift id
    var d = new Date();
    var x = d.getYear() + d.getMonth();
    var y = d.getDate() - d.getHours() - d.getMinutes() - d.getSeconds() + d.getMilliseconds();
    var shift = "SH-" + (x + y);
    document.getElementById('shiftid').value = shift;
    $('#clicksub').submit(function (e) {
        e.preventDefault();
        var form = $('#clicksub');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                console.log(data);
                $('#subloader2').empty();
                $('#subloader2').load('/IOC/employees/shiftload').hide().fadeIn('slow');
            }
        });
    });</script>

<script type="text/javascript">
    $(document).ready(function () {

        $.getJSON('employees/shift_list', function (data) {

            var len = data.length;

            var colourdb = [];
            colourdb.length = 0;
            var a1 = 0, a2 = 0, a3 = 0, a4 = 0, a5 = 0;
            var colourto = ["orange", "blue", "green", "purple", "yellow"];
            var len2 = colourto.length;
                   for (y = 0; y < len; y++) {


                if (colourto[0] == data[y].shiftcolor) {
                    a1++;
                }
                else if (colourto[1] == data[y].shiftcolor) {
                    a2++;
                }
                else if (colourto[2] == data[y].shiftcolor) {
                    a3++;
                }
                else if (colourto[3] == data[y].shiftcolor) {
                    a4++;
                }
                else if (colourto[4] == data[y].shiftcolor) {
                    a5++;
                }



            }


            if(a1==0){
                $('#shiftcolor').append(
                        $('<option class="shiftcolor" id="' + 0 + '"></option>').val(colourto[0]).html(colourto[0]));

        }
                    if(a2==0){
                $('#shiftcolor').append(
                        $('<option class="shiftcolor" id="' + 1 + '"></option>').val(colourto[1]).html(colourto[1]));

        }
                    if(a3==0){
                $('#shiftcolor').append(
                        $('<option class="shiftcolor" id="' + 2 + '"></option>').val(colourto[2]).html(colourto[2]));

        }
                    if(a4==0){
                $('#shiftcolor').append(
                        $('<option class="shiftcolor" id="' + 3 + '"></option>').val(colourto[3]).html(colourto[3]));

        }
                    if(a5==0){
                $('#shiftcolor').append(
                        $('<option class="shiftcolor" id="' + 4 + '"></option>').val(colourto[4]).html(colourto[4]));

        }


        });
    });

    function loadcolor() {
        var ss = document.getElementById("shiftcolor").value;
        document.getElementById("shiftco").value = ss;


    }
</script>