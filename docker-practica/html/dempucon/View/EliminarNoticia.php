<?php
session_start();


include '../Controller/NoticiaController.php';

//$idNoticia=$_GET['ID_NOTICIA'];

//echo "El ID_Noticia es ---------:";

//var_dump($idNoticia);

//me sercioro de que no vengan vacios

if(isset($_GET['ID_NOTICIA'])){

    //absorbo en bariables lo que viene por POST de la vista
    $idNoticia = (htmlentities(addslashes($_GET['ID_NOTICIA'])));

    //ejecuto el metodo mandando datos a contolador
    NoticiaController::eliminarNoticia($idNoticia);

  }else {
    echo "error";

  }



 ?>
