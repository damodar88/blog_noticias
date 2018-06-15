<?php


include '../Controller/NoticiaController.php';


$noticia = new  NoticiaController();

$tabla_noticia = $noticia->getNoticia();

//var_dump($tabla_noticia);

if (empty($tabla_noticia)){

  echo "No hay entradas de blog";


}else{

  foreach ($tabla_noticia as $valor) {
    // code...getIdNoticia()


    echo "<h3>".$valor->getTituloNoticia()."</h3>";
    echo "".$valor->getFechaNoticia() ."<br>";
    echo $valor->getSecionNoticia();
    echo "<div style='width:400px'>";
    echo "<h1>".$valor->getNoticiaNoticia()."</h1>" ;
    echo "</div>";

    if ($valor->getReferenImagenNoticia()!="") {
      // code...

      echo "<img src='../imagenes/".$valor->getReferenImagenNoticia()."' ' width='300px' height='200px'/>";

    }

  echo "<br><hr/><br>";
  }

}

?>
