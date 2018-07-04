<?php
session_start();


include '../Controller/UsuarioController.php';

$idUsuario=$_GET['ID_USUARIO'];

//echo "El ID_USUARIO es ---------:";

//var_dump($idUsuario);

  //me sercioro de que no vengan vacios
  if(isset($_GET['ID_USUARIO'])){

    //absorbo en bariables lo que viene por POST de la vista
    $idUsuario = (htmlentities(addslashes($_GET['ID_USUARIO'])));

    //ejecuto el metodo mandando datos a contolador
    UsuarioController::eliminarUsuario($idUsuario);

    //redirige a index
    echo "<script> location.replace('IngresarUsuario.php');</script>";

  }else {
    echo "error";

  }



 ?>
