$(document).ready(function() {



  $("#loginform").bind("submit",function(){

      $.ajax({
        type:$(this).attr("method"),
        url:$(this).attr("action"),
        data:$(this).serialize(),
        beforeSend: function(){
          $("#loginform button[type=submit]").html("enviando.......");
          $("#loginform button[type=submit]").attr("disabled","disabled");
        },
        success: function(response){
            if (response.estado == "true"){
              $("body").overhang({
                type: "success",
                message: "Ingreso correcto lo estamos redirigiendo..!",
                callback: function(){
                   window.location.href = "homeAdmin.php";
                }
                });

            }else {
                $("body").overhang({
                  type: "error",
                  message: "Usuario o contraseña incorrecto",
                });
            }
            $("#loginform button[type=submit]").html("Ingresar");
            $("#loginform button[type=submit]").removeAttr("disabled");
        },
          error: function(){
            $("body").overhang({
              type: "error",
            });
        $("#loginform button[type=submit]").html("Ingresar");
        $("#loginform button[type=submit]").removeAttr("disabled");

        }


      });

    return false;

  });


});
