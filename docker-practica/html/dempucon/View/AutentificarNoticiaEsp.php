<?php session_start(); ?>

<?php include('../Controller/NoticiaController.php'); ?>





<?php
 include('Default/head.php');




$idNoticia=$_GET['ID_NOTICIA'];

echo "idNoticia".$idNoticia;





 ?>



 <div class="starter-template">
     <div class="row">
       <div class="col-md-4 col-md-offset-4">
         <div class="panel panel-default">
           <div class="panel-body">
             <!--Form de Region,Ciudad, Calle-->
             <form class="" action="AutentificarUsuario.php" method="POST">
               <!--Titulos tabla-->
               <table class="table">
               <thead>
                 <tr>
                   <th scope="col">ID</th>
                   <th scope="col">Administrador</th>
                   <th scope="col">Nombre</th>
                   <th scope="col">ApellidoP.</th>
                   <th scope="col">ApellidoM.</th>
                   <th scope="col">Usuario</th>
                   <th scope="col">Password</th>
                   <th scope="col">fechaModif</th>
                   <th scope="col">Ocupacion</th>
                 </tr>
               </thead>
               <tr>

                 <?php $matrizNoticia = NoticiaController::leerNoticiaEspe();?>

                 <?php
                  foreach ($matrizNoticia as $noticia):?>

                  <?php if ($idNoticia==$noticia["ID_NOTICIA"]){?>

                    <td><?php echo $noticia["ID_NOTICIA"]?></td>
                    <td><?php echo $noticia["referenciaImagenNoticia"]?></td>
                    <td><?php echo $noticia["fechaNoticia"] ?></td>
                    <td><?php echo $noticia["secionNoticia"]?></td>
                    <td><?php echo $noticia["noticiaNoticia"]?></td>
                    <td><?php echo $noticia["tituloNoticia"]?></td>



                <?php  } ?>

                   <td></td>
                   </tr>
               <?php endforeach?>
               <!--<!-----------------><!--inico de paginacion-------->
               </table>

             </form>
         </div>
       </div>
     </div>
   </div>
 </div>


<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br>


<?php include('Default/footer.php'); ?>
