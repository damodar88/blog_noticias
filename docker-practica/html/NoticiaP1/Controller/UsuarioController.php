<?php


include('../DAO/UsuarioDAO.php');
/**
 *
 */

class UsuarioController
{


  public function obtenerUsuario(){

    $usuario = new UsuarioDAO();

    $matrizUsuario = $usuario->get_usuario();

  }


  public static function ingresrUsuario($administrador,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaMod,$ocupacion)
  {

    $usuarioIngresar = new Usuario();

    $usuarioIngresar->setAdministradorUsuario($administrador);
    $usuarioIngresar->setNombreUsuario($nombre);
    $usuarioIngresar->setApellidoPaternoUsuario($apellidoP);
    $usuarioIngresar->setApellidoMaternoUsuario($apellidoM);
    $usuarioIngresar->setUsuarioUsuario($usuario);
    $usuarioIngresar->setPasswordUsuario($password);
    $usuarioIngresar->setFechaModificacionUsuario($fechaMod);
    $usuarioIngresar->setOcupacionUsuario($ocupacion);

    $ManejoObjetos = new ManejoObjetos($miconexion);

    $ManejoObjetos->insertaContenido($blog);

     UsuarioDAO::insertaUsuario($usuarioIngresar);
  }

  public static function leerUsuario(){

    $datosUsuario = array();

    $datosUSuario = UsuarioDAO::obtenerUsuario();

    return $datosUsuario;

  }




}








 ?>
