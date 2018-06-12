<?php


include('../DAO/UsuarioDAO.php');
/**
 *
 */
class UsuarioController
{

  function __construct()
  {

  }

  public static function ingresrUsuario($administrador,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaMod,$ocupacion)
  {


    $usuarioEvaluar = new Usuario();
    $usuarioEvaluar->setUsuarioUsuario($usuario);
    $usuarioEvaluar->setPasswordUsuario($password);

    return UsuarioDAO::login($usuarioEvaluar);


  }





}








 ?>
