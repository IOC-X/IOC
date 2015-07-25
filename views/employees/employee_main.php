<div class="btn-group btn-group-justified">
    <a href="javascript:void(0)" class="btn btn-primary" id="list"><i class="mdi-social-person"></i> employees list</a>
    <a href="javascript:void(0)" class="btn btn-primary" id="add"><i class="mdi-social-person-add"></i> add new employee</a>
</div>
    <script>
        $('#list').click(function(){
            $('#subloader2').load('/IOC/employees/loadlistemp',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });
        $('#add').click(function(){
            $('#subloader2').load('/IOC/employees/add_employees',function(){
                $('#subloader2').hide();
                $('#subloader2').fadeIn('fast');
            });
        });

    </script>
<br/>
<div id="subloader2">

</div>
