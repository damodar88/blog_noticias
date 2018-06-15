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


               $noticia = new  NoticiaController();

               $tabla_noticia = $noticia->getNoticiaEspecifica();

               //var_dump($tabla_noticia);

                 foreach ($tabla_noticia as $valor) {
                   // code...getIdNoticia()

              ?>

                 <div class="card mb-4">
                     <img class="card-img-top" src="imagenes/<?php echo $valor->getReferenImagenNoticia() ;?>"width='300px' height='400px' alt="Card image cap">
                     <div class="card-body">

                       <h2 class="card-title"><?php echo "<h1>".$valor->getTituloNoticia()."</h1>"; ?></h2>
                       <p class="card-text"> <?php  echo "<h4>".$valor->getNoticiaNoticia();"</h4>" ; ?></p>
                       <p> <?php echo $valor->getSecionNoticia();  ?> </p>

                     </div>
                     <div class="card-footer text-muted">
                       <?php echo $valor->getFechaNoticia();?>


                     </div>
                   </div>
                   <?php

                      //   if ($valor->getReferenImagenNoticia()!="") {
                           // code...

                          // echo "<img src='../imagenes/".$valor->getReferenImagenNoticia()."' ' width='300px' height='200px'/>";

                         }



                     //}
                     ?>



         <!-- Pagination -->
         <ul class="pagination justify-content-center mb-4">
           <li class="page-item">
             <a class="page-link" href="#">&larr; Older</a>
           </li>
           <li class="page-item disabled">
             <a class="page-link" href="#">Newer &rarr;</a>
           </li>
         </ul>

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

   <!-- Footer -->
   <footer class="py-5 bg-dark">
     <div class="container">
       <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
     </div>
     <!-- /.container -->
   </footer>
