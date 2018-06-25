


<!-- Navigation -->
<!--fixed-top-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="#">Noticias Escuelas Municipales</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contacto.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Historia.php">Historia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="mision.php">Misión</a>
        </li>


        <?php if (!isset($_SESSION["usuario"]["nombreUsuario"])) {?>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Iniciar-Sesion</a>
        </li>
      <?php }else{ ?>
                    <?php if ($_SESSION["usuario"]["administrador"] === '1') {?>

                      <li class="nav-item">
                        <a class="nav-link" href="homeAdmin.php">Services</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarUsuario.php">Admin</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarNoticia.php">Nocias</a>
                      </li>

                    <?php }else{ ?>

                      <li class="nav-item">
                        <a class="nav-link" href="IngresarNoticia.php">Nocias</a>
                      </li>

                    <?php } ?>


        <li class="nav-item">
          <a class="nav-link" href="../Helper/CerarSesion.php">Salir</a>
        </li>


      <?php } ?>
      </ul>
    </div>
  </div>
</nav>
