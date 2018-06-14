<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>



<div class="starter-template">
<br></br>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">

          <form class="" role="form" id="loginform" action="AutentificarLogin.php" method="post">
            <legend>Login</legend>

            <div class="form-group">
              <label for="">Usuario</label>
              <input type="text" class="form-control" required autofocus name="txtUsuario" value="" placeholder="Usuario" >
            </div>

            <div class="form-group">
              <label for="">Contraseña</label>
              <input type="password" class="form-control" required name="txtPassword" value="" placeholder="*******">
            </div>

            <button type="submit" class="btn btn-success" name="button">Ingresar</button>
          </form>

        </div>
      </div>

    </div>
  </div>

</div>









<?php include('Default/footer.php') ?>
