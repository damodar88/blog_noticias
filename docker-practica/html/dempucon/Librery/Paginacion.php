<?php

  require_once('Conectar.php');

  $base = Conectar::conexion();



  $tamano_pagina = 3;

      if(isset($_GET["pagina"])){

        if ($_GET["pagina"]==1) {
          // code...
          header("Location:index.php");

        }else {
          // code...
          $pagina = $_GET["pagina"];
        }

      }else {
        // code...
        $pagina = 1;
      }

  $empezar_desde = ($pagina-1)*$tamano_pagina;

  $sql_total = "SELECT * FROM REGION";

  $resultado = $base->prepare($sql_total);

  $resultado->execute(array());

  $num_filas = $resultado->rowCount();

  $total_pagina = ceil($num_filas/$tamano_pagina);
