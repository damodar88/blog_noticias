<?php

require_once('../DAO/RegionDAO.php');


$tamano_pagina = 3;

    if(isset($_GET["pagina"])){

       $pagina = $_GET["pagina"];

    }else{
      // code...
      $pagina = 1;//$_GET["pagina"];
    }

    $empezar_desde = ($pagina-1) * $tamano_pagina;

    $matrizRegion = RegionDAO::paginacionRegion();

    $num_filas = $matrizRegion;

    $total_pagina = ceil($num_filas/$tamano_pagina);




 ?>
