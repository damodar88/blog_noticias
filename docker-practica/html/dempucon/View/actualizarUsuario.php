<?php
session_start();


include '../Controller/UsuarioController.php';

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
echo "<br>";
var_dump($admin);
echo "<br>";
var_dump($nombre);
echo "<br>";
var_dump($apellidoP);
echo "<br>";
var_dump($apellidoM);
echo "<br>";
var_dump($usuario);
echo "<br>";
var_dump($fechaModificacion);
echo "<br>";
var_dump($ocupacion);
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
