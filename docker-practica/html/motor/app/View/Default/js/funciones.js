/*Validar los campos del login*/
$().ready(function(){
    $("#Session").validate({
      rules:{
        email:{
          required:true,
          email:true
        },
        password:{
          required:true,
          minlength:6
        }
      },


    })


  })
