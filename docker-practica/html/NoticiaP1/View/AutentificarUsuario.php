<?php  session_start(); ?>
<?php



$resultadoUsuario = array();

  if( isset($_POST["txtAdministrador"]) &&
      isset($_POST["txtNombre"]) &&
      isset($_POST["txtApellidoP"]) &&
      isset($_POST["txtApellidoM"]) &&
      isset($_POST["txtUsuario"]) &&
      isset($_POST["txtPassword"]) &&
      isset($_POST["txtFechaMod"]) &&
      isset($_POST["txtOcupacion"])
    ){

  $administrador=$_POST["txtAdministrador"];
  $nombre = $_POST["txtNombre"];
  $apellidoP = $_POST["txtApellidoP"];
  $apellidoM = $_POST["txtApellidoM"];
  $usuario = $_POST["txtUsuario"];
  $password = $_POST["txtPassword"];
  $fechaMod = $_POST["txtFechaMod"];
  $ocupacion = $_POST["txtOcupacion"];

  $resultadoUsuario = array("estado"=>"true");

      if(LoginController::ingresrUsuario($administrador,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaMod,$ocupacion)){

        return print(json_encode($resultadoUsuario));

      }else {
        $resultadoUsuario = array("estado"=>"false");
        return print(json_encode($resultado));
      }

  }else {

  }









 ?>
