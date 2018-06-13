

<?php
  require_once('model/Usuario_model.php');

  $usuario = new Usuario_model();

  $matrizUsuario = $usuario->get_usuario();

  require_once('view/Usuario_view.php');

?>
