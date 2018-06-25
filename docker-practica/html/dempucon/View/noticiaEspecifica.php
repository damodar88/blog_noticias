<?php session_start(); ?>
<?php include('Default/head.php'); ?>

<?php include('Default/Carusel.php'); ?>

    <?php include('Default/menu.php'); ?>

<?php include('../Controller/NoticiaController.php');?>

    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Noticias
            <small>de su comuna</small>
          </h1>

 <br><br>

                <?php


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
                     </div>
                     <div class="card-footer text-muted">
                         <?php echo $noticia["fechaNoticia"] ?>
                     </div>
                   </div>


                 <?php  } ?>

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


    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>

        <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.0';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>





    <?php $matrizComentario = NoticiaController::leerComentario();  ?>

    <?php
    foreach ($matrizComentario as $comentario):
    ?>


      <div class="panel panel-info">
        <img  src="imagenes/comentario.png" width='40px' height='30px' >
        <h4 class="card-title"><?php echo $comentario["nombreLector"]."</h1>"; ?></h4>
        <p class="card-text"><?php echo $comentario["comentarioComentario"];?></p>
        <?php echo $comentario["fechaComentario"]?>

      </div>

    <?php endforeach?>



  <form action="AutentificarComentario.php" method="get" enctype="multipart/form-data" name="form1">
    <table>
      <tr>
        <td>Nombre:
        <label for="campo_titulo"></label></td>
      	<td><input type="text" name="txtNombre"  placeholder="Nombre"  required/></td>
    	</tr>
      <div class="form-group">
        <tr><td>Comentario:<label for="area_comentarios"></label></td>
          <td><textarea class="form-control" name="txtcomentario" id="txtnotica"  placeholder="El comentario" rows="10" cols="50" required/></textarea></td>
        </tr>
      </div>
      <div class="">
        <tr>
          <input type="hidden" name="id" value="<?php echo $idNoticia;?>">

        <td class="bot"><a href="AutentificarComentario.php?txtNombre&txtcomentario&id"><button name="" type="submit" class="btn btn-primary" >Comentar</button></a></td>
        </tr>
      </div>
    </table>
  </form>





<?php include('Default/footer.php') ?>
