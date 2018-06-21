<?php session_start(); ?>
<?php include('Default/head.php'); ?>

<?php include('Default/Carusel.php') ?>

    <?php include('Default/menu.php') ?>


    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Noticias
            <small>de su comuna</small>
          </h1>

 <br><br>

                <?php

                include '../Controller/NoticiaController.php';
                //instancio la clase
                $idNoticia=$_GET['ID_NOTICIA'];

                $matrizNoticia = NoticiaController::leerNoticiaEspe();

                foreach ($matrizNoticia as $noticia):?>

                <?php if ($idNoticia==$noticia["ID_NOTICIA"]){?>


                   <div class="card mb-4">

                     <?php
                         //cargo la imagen en caso de estar vacia cargo una por defecto
                         if ($noticia["referenciaImagenNoticia"]=="") {
                              echo "<img src='imagenes/68.jpg' width='300px' height='200px'/>";
                           }else {
                       //si no es vacio cargo la imagen seleccionada
                     ?>
                            <img class="card-img-top" src="imagenes/<?php echo $noticia["referenciaImagenNoticia"]?>"width='300px' height='400px' alt="Card image cap">
                           <?php } ?>

                     <div class="card-body">
                         <!--Muestro contenido de noticia titulo -->
                         <h2 class="card-title"><?php echo $noticia["tituloNoticia"]."</h1>"; ?></h2>
                         <p class="card-text"><?php echo $noticia["noticiaNoticia"]."</h4>" ; ?></p>
                         <p> <?php echo $noticia["secionNoticia"]?></p>


                           <!--Leo id noticia-->
                         <td class="bot"><a href="AutentificarNoticiaEsp.php?ID_NOTICIA=<?php  echo $valor->getIdNoticia();?>"><button name="" type="submit" class="btn btn-primary" >Leer mas &rarr;</button></a></td>

                     </div>
                     <div class="card-footer text-muted">
                         <?php echo $noticia["fechaNoticia"] ?>
                     </div>
                   </div>


                 <?php  } ?>

                    <td></td>
                    </tr>
                <?php endforeach?>



        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Educacion</a>
                    </li>
                    <li>
                      <a href="#">Ciencia</a>
                    </li>
                    <li>
                      <a href="#">Cultura</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Escuelas</a>
                    </li>
                    <li>
                      <a href="#">Logros</a>
                    </li>
                    <li>
                      <a href="#">Tutoriales</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Sitio de noticias</h5>
            <div class="card-body">
              Sito de noticias creado por la municipalidad para las escuelas de la comuna para fomentar la comunicacion con la zona.
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->






<?php include('Default/footer.php') ?>
