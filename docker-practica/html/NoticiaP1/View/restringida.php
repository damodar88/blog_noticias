<?php session_start();?>
<?php
if(isset($_SESSION["usuario"]["nombreUsuario"])){


echo "<br>******** has echo session *******<br> ";

echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"];
echo "<br></br>";

echo "dato ID---:".$_SESSION["usuario"]["ID_USUARIO"]."<br></br>";
echo "dato privielegio---:".$_SESSION["usuario"]["administrador"]."<br></br>";
echo "dato usuario---:".$_SESSION["usuario"]["nombreUsuario"]."<br></br>";
echo "dato apellidoP---:".$_SESSION["usuario"]["apellidoPaternoUsuario"]."<br></br>";
echo "dato apellidoM---:".$_SESSION["usuario"]["apellidoMaternoUsuario"]."<br></br>";
echo "dato usuario---:".$_SESSION["usuario"]["usuarioUsuario"]."<br></br>";
echo "dato fecha---:".$_SESSION["usuario"]["fechaModificacionUsuario"]."<br></br>";
echo "dato ocupacion---:".$_SESSION["usuario"]["ocupacionUsuario"]."<br></br>";

?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="Default/css/bootstrap.min.css">

    <link rel="stylesheet" href="Default/css/overhang.min.css">
    <link rel="stylesheet" href="Default/css/css/bootstrap.css">
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
    </style>


</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item ">
        <img class="d-block w-100" src="imagenes/m.jpg" width='300px' height='400px' alt="First slide">
      </div>
      <div class="carousel-item active">
        <img class="d-block w-100" src="imagenes/ed.jpg" width='300px' height='400px'  alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagenes/hola.jpg" width='300px' height='400px' alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>




  </div>

  </div>
  </div>

  <p></p>
   <a href="../Helper/CerarSesion.php" class="btn btn-primary btn-lg">Cerrar Sesion</a>




<?php

 echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"] ;
?>

 </body>
 </html>



<?php
}else{
	echo "no se puede ver";
 }
?>
