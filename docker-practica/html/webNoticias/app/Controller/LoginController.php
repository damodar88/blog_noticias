<?php


include_once('../DAO/UsuarioDAO.php');
/**
 *
 */
class LoginController extends Controller
{

  function __construct()
  {
    parent::__construct();

  }

  public static function login($usuario,$password){

    $this->view->render($this,'Login');
    $usuarioEvaluar = new Usuario();
    $usuarioEvaluar->setUsuarioUsuario($usuario);
    $usuarioEvaluar->setPasswordUsuario($password);

    return UsuarioDAO::login($usuarioEvaluar);


  }





}








 ?>
