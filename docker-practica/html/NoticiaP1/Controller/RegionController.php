<?php


/**
 *
 */
class RegionController
{

  public static function ingresrRegion($administrador,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaMod,$ocupacion)
  {

    $regionIngresar = new Usuario();

    $usuarioIngresar->setAdministradorUsuario($administrador);
    $usuarioIngresar->setNombreUsuario($nombre);
    $usuarioIngresar->setApellidoPaternoUsuario($apellidoP);

     UsuarioDAO::insertaUsuario($usuarioIngresar);


  }



}







 ?>
