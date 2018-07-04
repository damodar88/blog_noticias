<?php
session_start();


include '../Controller/NoticiaController.php';

$idNoticia=$_GET['ID_NOTICIA'];

echo "El ID_Noticia es ---------:";
var_dump($idNoticia);
echo "<br>";





  //me sercioro de que no vengan vacios
  if(isset($_GET['ID_USUARIO'])
  & isset($_GET["administrador"])
  & isset($_GET["nombreUsuario"])
  & isset($_GET["apellidoPaternoUsuario"])
  & isset($_GET["apellidoMaternoUsuario"])
  & isset($_GET["usuarioUsuario"])
  & isset($_GET["passwordUsuario"])
  & isset($_GET["fechaModificacionUsuario"])
  & isset($_GET["ocupacionUsuario"])
  ){

    //absorbo en bariables lo que viene por POST de la vista
    //$idUsuario = (htmlentities(addslashes($_GET['ID_USUARIO'])));

    //ejecuto el metodo mandando datos a contolador
    //UsuarioController::eliminarUsuario($idUsuario);


  }else {
    //echo "error";
  }



 ?>
