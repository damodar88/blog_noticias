


<!-- Navigation -->
<!--fixed-top-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <!--div class="container" -->
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="nav navbar-nav navbar-left"> <!-- -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><h4>Inicio</h4>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php"><h4>Contacto</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Historia.php"><h4>Historia</h4></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mision.php"><h4>Misión</h4></a>
        </li>
        <?php if (!isset($_SESSION["usuario"]["nombreUsuario"])) {?>
        <li class="nav-item">
          <a class="nav-link" href="Login.php"><h4>Iniciar-Sesion</h4></a>
        </li>
        <?php }else{ ?>
                    <?php if ($_SESSION["usuario"]["administrador"] === '1') {?>

                      <li class="nav-item">
                        <a class="nav-link" href="homeAdmin.php"><h4>Services</h4></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarUsuario.php"><h4>Admin</h4></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarNoticia.php"><h4>Noticias</h4></a>
                      </li>

                    <?php }else{ ?>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarNoticia.php"><h4>Nocias</h4></a>
                      </li>

                    <?php } ?>


          <li class="nav-item">
            <a class="nav-link" href="../Helper/CerarSesion.php"><h4>Salir</h4></a>
        </li>
         <?php } ?>
      </ul>
    </div>
  <!--/div-->
</nav>
