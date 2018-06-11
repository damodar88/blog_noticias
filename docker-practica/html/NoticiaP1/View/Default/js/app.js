$(document).ready(function() {



  $("#loginform").bind("submit",function(){

      $.ajax({
        type:$(this).attr("method"),
        url:$(this).attr("action"),
        data:$(this).serialize(),

        success: function(response){

            if (response.estado == true) {
              $("body").overhang({
                type: "success",
                message: "Woohoo! Our message works!"
                });

            }else {

                $("body").overhang({
                  type: "error",
                  message: "Usuario o contraseña incorrectos",
                });

            }

        },
          error: function(){
            $("body").overhang({
              type: "error",
            })

        }


      });

    return false;

  });


});
