
<div class="container">

   <div class="card card card-container">

     <!--div se inicio de secion-->
     <h2 class="titlelogin">Iniciar sesi&oacute;n</h2>
     <!--form del login-->
     <form class="form-signin" action="#" method="POST" name="Session" id="Session" >
       <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
       <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
       <button type="submit" onclick="userLogin()" class="btn btn-signin">Iniciar sesi&oacute;n</button>
     </form>

   </div>

</div>


<script>
  function userLogin(){

    var email = $('form[name=Session] input[name=email]')[0].value;
    var password = $('form[name=Session] input[name=password]')[0].value;

    if(email=="" || password==""){

    }else {
      $.ajax({
        type:"POST",
        url:"<?php echo URL;?>Controller/UserController/userLogin",
        data:{email:email,password:password}

      }).done(function(response){

        if (response == 1) {

          document.location = "<?php echo URL; ?>Controller/Principal/principal"

        }else {
          alert("email o contraseña incorrectos ");
        }

      });

    }

  }
</script>
<?php
var_dump(URL);
echo "<br>";
var_dump(URI);
?>
