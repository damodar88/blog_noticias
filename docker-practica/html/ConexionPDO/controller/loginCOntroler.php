<?php



  require_once('model/loginModel.php');

  $login = new loginModel();

  $login = $noticia->get_autentificacion();

  require_once('view/login.php');


?>
