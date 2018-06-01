<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php

   try {



     $base= new PDO('mysql:host=docker-practica_mysql_1; port=3306; dbname=mydb', 'root', 'pass');

     echo "Conexion";

   } catch (Exception $e){
     die('Error--:'.$e->GetMessage());
   }finally{
     $base=null;
   }

   ?>



  </body>
</html>
