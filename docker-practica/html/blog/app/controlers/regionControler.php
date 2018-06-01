<?php

  require_once("model/regionModelo.php");


  $region=new  regionModelo();

  $matrizRegion=$region->get_region();


  require_once("vistas/paginas/regionViu.php");


 ?>
