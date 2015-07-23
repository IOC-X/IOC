function checkName(){
//type of people
$("#emptype").change(function(){
 
var obj = document.getElementById("emptype").value;

if(obj=="pumpstaff")
{
    
    $("#changer").hide();
    
}else
{
    $("#changer").show();
}

});

}