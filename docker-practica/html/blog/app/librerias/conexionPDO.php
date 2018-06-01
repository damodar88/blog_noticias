<?php

  try {

    $base= new PDO('mysql:host=dockerpractica_mysql_1; port=3306; dbname=mydb', 'root', 'pass');
    echo "Conexion";

  } catch (Exception $e){
    die('Error--:'.$e->getMessage());
    echo "Linea de error".$e->getLine();
  }catch(PDOExcetion $e){

  }






 ?>
