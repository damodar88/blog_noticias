<?php
  //abro session
  session_start();
  //destrullo la session
  session_destroy();
  //redirigo al home
  session_unset();
//echo '<script> window.location="index.php";</script>';

  header("location:../View/index.php");
  //echo "serro secion ";


?>
