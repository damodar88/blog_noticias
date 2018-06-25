<?php session_start(); ?>
  <?php include('Default/head.php'); ?>

  <?php include('Default/Carusel.php') ?>

    <?php include('Default/menu.php') ?>



    <table  class="table">
  <thead>
    <tr>
      <th>Escuela</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Correo</th>
    </tr>
  </thead>
  <tbody>
    <tr class="light">
      <td>Palguin Bajo</td>
      <td>Camino internacional km 20</td>
      <td>1971746</td>
      <td>escuelag799@gmail.com</td>
    </tr>
    <tr class="dark">
      <td>Quelhue</td>
      <td>Camino vecinal Km.10 </td>
      <td>8797084 </td>
      <td>eligiosalamanca@gmail.com</td>
    </tr>
    <tr class="light">
      <td>El Claro</td>
      <td>Camino internacional KM 4.5</td>
      <td>442795 </td>
      <td>elclaroe@gmail.com</td>
    </tr>
    <tr class="dark">
      <td>Carlos Holzapel</td>
      <td>Variante camino internacional 1110</td>
      <td>441069 </td>
      <td>esc.f782@hotmail.com</td>
    </tr>
    <tr class="light">
      <td>Villa Sanpedro</td>
      <td>Liucura S/N Villa San Pedro,  Pucon</td>
      <td>1971748</td>
      <td>escuelavillasanpedro783@gmail.com</td>
    </tr>
    <tr class="dark">
      <td>Pichares</td>
      <td>Camino Huife Km 20</td>
      <td>442519 </td>
      <td>pichares786@hotmail.com</td>
    </tr>
    <tr class="light">
      <td>Candelaria</td>
      <td>Camino Al Volcan Km7</td>
      <td>293141</td>
      <td>candelaria788@hotmail.com</td>
    </tr>
    <tr class="dark">
      <td>Carileufu</td>
      <td>Camino A Caburgua Km.18 </td>
      <td>--</td>
      <td>patriciamenav@yahoo.es</td>
    </tr>
    <tr class="light">
      <td>Paillaco</td>
      <td>Camino parque nacional Huerquehue KM30 </td>
      <td>1971746 </td>
      <td>escuelag799@gmail.com</td>
    </tr>
    <tr class="dark">
      <td>Arrayanes</td>
      <td>Los Tilos 55</td>
      <td>443634</td>
      <td>arrayanespucon@yahoo.es</td>
    </tr>
    <tr class="light">
      <td>Hoteleria Turismo</td>
      <td>Bernardo O'Higgins 1085</td>
      <td>(45) 244 1787</td>
      <td>director@liceohoteleriapucon.cl</td>
    </tr>
  </tbody>
</table>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h2>Ponte en contacto</h2>
    <div id="respond">
      <form action="#" method="post">
        <p>
          <input type="text" name="name" id="name" value="" size="22"/>
          <label for="name"><small>Nombre (requerido)</small></label>
        </p>
        <p>
          <input type="text" name="email" id="email" value="" size="22" />
          <label for="email"><small>Correo (requerido)</small></label>
        </p>

        <p>
          <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
          <label for="msg" style="display:none;"><small>Comment (required)</small></label>
        </p>


        <p>
          <input name="submit" type="submit" id="submit" class="btn btn-success" value="Aceptar" />
          &nbsp;
          <input name="reset" type="reset" id="reset" tabindex="5" class="btn btn-success" value="Borrar" />
        </p>
      </form>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>






  <?php include('Default/footer.php') ?>
