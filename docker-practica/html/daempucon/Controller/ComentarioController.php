<?php

include('../DAO/ComentarioDAO.php');
/**
 *
 */
class ComentarioController
{

  public static function ingresarComentario($fechaComentario,$comentario,$idNoticiaComentario,$nombreLector)
  {

    $comentarioIngresar = new Comentario();

    $comentarioIngresar->setComentarioComentario($comentario);
    $comentarioIngresar->setIdNoticiaComentario($idNoticiaComentario);
    $comentarioIngresar->setFechaComentario($fechaComentario);
    $comentarioIngresar->setIdLectorComentario($nombreLector);

     ComentarioDAO::insertarComentario($comentarioIngresar);

  }

  public static function leerComentario(){

    $datosComentario = array();

    $datosComentario = ComentarioDAO::obtenerComentario();

    return $datosComentario;

  }

  public static function leerLector(){

    $datosLector = array();

    $datosLector = ComentarioDAO::obtenerLector();

    return $datosLector;

  }








}







 ?>
