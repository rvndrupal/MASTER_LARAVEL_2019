$(document).ready(function () {
   
    $("#boton1").click(function () { 
        
       $("div").addClass('cajados');

       $("p").addClass("texto");
        
    });

    $("#boton2").click(function () { 
        
        $("div").removeClass("cajados");
 
        $("p").removeClass("texto");
         
     });



});