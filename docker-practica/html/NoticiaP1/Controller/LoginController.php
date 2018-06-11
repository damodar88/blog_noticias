<?php


include('../DAO/UsuarioDAO.php');
/**
 *
 */
class LoginController
{

  function __construct()
  {

  }

  public static function login($usuario,$password){


    $usuarioEvaluar = new Usuario();
    $usuarioEvaluar->setUsuarioUsuario($usuario);
    $usuarioEvaluar->setPasswordUsuario($password);

    return UsuarioDAO::login($usuarioEvaluar);


  }





}








 ?>
