$(document).ready(function () {
   
    $("#boton").click(function(){ 
        
        $("[type='text']").css({

            "background":"red"

        });

        $("[type='password']").css({

            "background":"blue"

        });
        
    });
    
});