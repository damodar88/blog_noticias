<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

      td{
          border:1px dotted #FF0000;      
      }

    </style>



  </head>
  <body>


    <table>
      <tr><td>NOMBRE</td>


    <?php
    foreach ($matrizRegion as $registro) {
      // code...
      echo "<tr><td>".$registro["nombreRegion"]."</td></tr>";
    }

    ?>

  </table>


  </body>
</html>
