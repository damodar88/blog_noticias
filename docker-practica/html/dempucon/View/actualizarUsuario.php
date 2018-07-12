<?php
session_start();


include '../Controller/UsuarioController.php';

$date = new DateTime('1024' ,new DateTimeZone('America/Santiago'));
date_default_timezone_set('America/Santiago');


    $idUsuario=$_GET['ID_USUARIO'];
    $admin = $_GET["administrador"];
    $nombre = $_GET["nombreUsuario"];
    $apellidoP = $_GET["apellidoPaternoUsuario"];
    $apellidoM = $_GET["apellidoMaternoUsuario"];
    $usuario = $_GET["usuarioUsuario"];
    $password = $_GET["passwordUsuario"];
    $fechaModificacion = $_GET["fechaModificacionUsuario"];
    $ocupacion = $_GET["ocupacionUsuario"];

    echo "El ID_USUARIO es ---------:";
    var_dump($idUsuario);
    echo "<br> admin--:";
    var_dump($admin);
    echo "<br> nombre--:";
    var_dump($nombre);
    echo "<br> apellido--:";
    var_dump($apellidoP);
    echo "<br> apellido matr--:";
    var_dump($apellidoM);
    echo "<br> usuario ---:";
    var_dump($usuario);
    echo "<br> pass--:";
    var_dump($password);
    echo "<br> fecha--:";
    var_dump($fechaModificacion);
    echo "<br> ocupacion";
    var_dump($ocupacion);
    echo "<br>";



  //me sercioro de que no vengan vacios
  if(isset($_GET['ID_USUARIO'])
  && isset($_GET["administrador"])
  && isset($_GET["nombreUsuario"])
  && isset($_GET["apellidoPaternoUsuario"])
  && isset($_GET["apellidoMaternoUsuario"])
  && isset($_GET["usuarioUsuario"])
  && isset($_GET["passwordUsuario"])
  && isset($_GET["fechaModificacionUsuario"])
  && isset($_GET["ocupacionUsuario"])){




/*
    //absorbo en bariables lo que viene por POST de la vista
    $idUsuario =(htmlentities(addslashes($_GET['ID_USUARIO'])));
    $admin =(htmlentities(addslashes($_GET["administrador"])));
    $nombre =(htmlentities(addslashes($_GET["nombreUsuario"])));
    $apellidoP=(htmlentities(addslashes($_GET["apellidoPaternoUsuario"])));
    $apellidoM=(htmlentities(addslashes($_GET["apellidoMaternoUsuario"])));
    $usuario =(htmlentities(addslashes($_GET["usuarioUsuario"])));
    $password=(htmlentities(addslashes($_GET["passwordUsuario"])));
    $fechaModificacion =(Date("Y-m-d H:i:s"));
    $ocupacion =(htmlentities(addslashes($_GET["ocupacionUsuario"])));

    //ejecuto el metodo mandando datos a contolador
    UsuarioController::modificarUsuario($idUsuario,$admin,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaModificacion,$ocupacion);

    //echo "<script> location.replace('IngresarNoticia.php'); </script>";
    //echo "imagen no bacia";
*/
  }else {
    //echo "error";
  }



 ?>
