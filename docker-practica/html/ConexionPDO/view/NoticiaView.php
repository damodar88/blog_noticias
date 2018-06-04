
      <?php
        require('model/Paginacion.php');
      ?>

        <form action="<?php echo "".$SERVER['PHP_SELF'] ;?>" method="post">
          <table width="80%" border="0" align="center">
          <tr>
            <td class="primera fila">Fecha noticia</td>
            <td class="primera fila">Seccion</td>
            <td class="primera fila">Noticia</td>
            <td class="primera fila">Titulo</td>
          </tr>
            <?php
            foreach ($matrizNoticia as $noticia):
            ?>

            <tr>
              <td><?php echo $noticia["fechaNoticia"]?></td>
              <td><?php echo $noticia["secionNoticia"]?></td>
              <td><?php echo $noticia["noticiaNoticia"]?></td>
              <td><?php echo $noticia["tituloNoticia"]?></td>
            </tr>

            <?php endforeach ?>

            <tr>
              <td >
                <?php
    //------------------paginacion-----------
                  for ($i=1; $i <= $total_pagina ; $i++) {
                    // code...
                    echo "<a href='?pagina=".$i."'>".$i."</a>   ";
                  }

                ?>
              </td>
            </tr>
          </table>
        </form>
