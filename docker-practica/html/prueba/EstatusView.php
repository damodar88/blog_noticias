<?php
require_once('StatusModel.php');


echo "<h1>crud con mvc de las tablas<h1>";


$status = new StatusModel();

$status->read();


?>
