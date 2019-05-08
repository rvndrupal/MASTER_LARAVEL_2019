$(document).ready(function () {
    $("#boton").click(function () { 
        
    var usuario="";
    var password="";

    usuario= $("[type='text']").val();
    password= $("[type='password']").val();

    console.log(usuario + password);

    $("#cajados").attr("juan","demo");
    
    
        
    });
});