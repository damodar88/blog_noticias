<?php

include('../DAO/ComentarioDAO.php');
/**
 *
 */
class ComentarioController
{

  public static function ingresarComentario($comentario,$idNoticiaComentario,$fechaComentario,$nombreLector)
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








}







 ?>
