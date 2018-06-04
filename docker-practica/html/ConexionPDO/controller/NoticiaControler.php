<?php



  require_once('model/NoticiaModel.php');

  $noticia = new NoticiaModel();

  $matrizNoticia = $noticia->get_noticia();

  require_once('view/NoticiaView.php');


?>
