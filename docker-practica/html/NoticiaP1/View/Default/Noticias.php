<!-- Page Content -->
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
               $noticia = new  NoticiaController();
               //ejecuto el metodo que carga my array con valores DB
               $tabla_noticia = $noticia->getNoticia();

               //verifico si hay contenido en el array
               if(empty($tabla_noticia)){
                        echo "No hay entradas de blog";
                }else{
                      //recorro array contenido de la noticia
                    foreach ($tabla_noticia as $valor) {
                      // code...getIdNoticia()
               ?>

                  <div class="card mb-4">

                    <?php
                        //cargo la imagen en caso de estar vacia cargo una por defecto
                        if ($valor->getReferenImagenNoticia()=="") {
                             echo "<img src='imagenes/68.jpg' width='300px' height='200px'/>";
                          }else {
                      //si no es vacio cargo la imagen seleccionada
                    ?>
                           <img class="card-img-top" src="imagenes/<?php echo $valor->getReferenImagenNoticia() ;?>"width='300px' height='400px' alt="Card image cap">
                          <?php } ?>

                    <div class="card-body">
                        <!--Muestro contenido de noticia titulo -->
                        <h2 class="card-title"><?php echo "<h1>".$valor->getTituloNoticia()."</h1>"; ?></h2>
                        <p class="card-text"> <?php  echo "<h4>".$valor->getNoticiaNoticia();"</h4>" ; ?></p>
                        <p> <?php echo $valor->getSecionNoticia();  ?> </p>


                          <!--Leo id noticia-->
                          <?php $id= $valor->getIdNoticia();?>


                        <td class="bot"><a href="noticiaEspecifica.php?ID_NOTICIA=<?php  echo $valor->getIdNoticia();?>"><button name="" type="submit" class="btn btn-primary" >Leer mas &rarr;</button></a></td>

                    </div>
                    <div class="card-footer text-muted">
                        <?php echo $valor->getFechaNoticia();?>
                    </div>
                  </div>
              <?php
                 }//fin del foreach
                       echo "<br><hr/><br>";
                }//fin del else

              ?>



         <!-- Pagination -->
         <tr>
           <td>
         <?php include('../Helper/PaginacionNoticias.php'); ?>
             <!------------------------------------------------------------------------------------------>
         <?php
             echo     "<!--Paginacion-->";
             echo "<div class='bottom'>";
             echo "<nav aria-label='Page navigation example'>";
             echo "<ul class='pagination justify-content-center'>";
             echo "<li class='page-item disabled'>";
             echo "<a class='page-link' href='#' tabindex='-1'>Previous</a>";
             echo "</li>";
         ?>
         <?php
            for ($i=1; $i <= $total_pagina ; $i++) {

             echo "<li class='page-item'><a class='page-link' href='?pagina=".$i."'>".$i."</a></li>";
           }
         ?>
         <?php
             echo "<li class='page-item'>";
             echo "<a class='page-link' href='#'>Next</a>";
             echo "</li>";
             echo "</ul>";
             echo "</nav>";
             echo "</div>";
           ?>
           </td>
         </tr>

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
