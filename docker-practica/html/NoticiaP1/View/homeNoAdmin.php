<?php

  if(isset($_SESSION["usuario"]["nombreUsuario"])){

    if ($_SESSION["usuario"]["administrador"]==1) {

      header("location:homeAdmin.php");

    }

  }else {
    header("location:Login.php");
  }
?>
<?php include 'Default/head.php';?>

<?php include 'Default/menu.php';?>

<div class="satarter-template">
  <br>
  <br>
  <br>
  <div class="jumbotron">
    <div class="container text-center">
      <h1><strong>Bienevenido</strong> usuario <?php echo $_SESSION["usuario"]["nombreUsuario"];?></h1>

        <p>panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["administrador"] == 1 ?'Admin':'Cliente';?></span></p>

        <p>
          <a href="../Helper/CerarSesion.php" class="btn btn-primary btn-lg">Cerrar Sesion</a>
        </p>

    </div>

  </div>

</div>

<?php include 'Default/footer.php';?>
