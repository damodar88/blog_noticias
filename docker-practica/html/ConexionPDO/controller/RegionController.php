<?php

  require_once('model/RegionModelo.php');

  $region = new RegionModelo();

  $matrizRegion = $region->get_nombreRegion();

  require_once('view/Region.php');

?>
