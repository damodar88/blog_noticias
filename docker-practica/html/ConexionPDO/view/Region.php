<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <style>
    td{
      border:1px dotted #aa2020;
    }

  </style>


  </head>
  <body>

  <table>
    <tr><td>Nombre de la Regione</td></tr>

      <?php

      foreach ($matrizRegion as $registro){
        echo "<tr><td>".$registro["nombreRegion"]."</td></tr>";
      }

      ?>

  </table>


  </body>
</html>
