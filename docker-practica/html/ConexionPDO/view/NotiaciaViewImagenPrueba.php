<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <link rel="stylesheet" href="../css/bootstrap.min.css"  />
  <body>

<?php

  include('../model/ManejoObjetos.php');

  try {

        $miconexion = new PDO('mysql:host=docker-practica_mysql_1;dbname=mydb;', 'root', 'pass');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



        $ManejoObjetos = new ManejoObjetos($miconexion);

        $tabla_blog = $ManejoObjetos->getContenidoPorFecha();

        if (empty($tabla_blog)) {
          // code...

          echo "No hay entradas de blog";


        }else {

          foreach ($tabla_blog as $valor) {
            // code...
            echo "<h3>".$valor->get_tituloNoticia()."</h3>";
            echo "".$valor->get_fechaNoticia() ."<br>";
            echo $valor->get_seccionNoticia();
            echo "<div style='width:400px'>";
            echo "<h1>".$valor->get_noticia()."</h1>" ;
            echo "</div>";

            if ($valor->get_imagen()!="") {
              // code...

              echo "<img src='../imagenes/".$valor->get_imagen()."' ' width='300px' height='200px'/>";

            }

          echo "<br><hr/><br>";
          }

        }




      } catch (Exception $e) {

      die("Error---:".$e->getMessage());

      }





?>


<!--Paginacion-->
<?php

require('../model/Paginacion.php');
//------------------paginacion-----------
  for ($i=1; $i <= $total_pagina ; $i++) {
    // code...
    echo "<a href='?pagina=".$i."'>".$i."</a>   ";

    }
 ?>






  </body>
</html>
