<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/bootstrap.min.css"  />

  </head>
  <body>

Agregar usuario:
<br><br>
    <!--Form de registro de usuario-->
    <form>
        <!--nombres y apellidos-->
        <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="">Nombre y apellidos</span>
            </div>
          <input type="text" name="usuarioNombre" class="form-control" placeholder="Nombres">
          <input type="text" name="usuarioApellidoP" class="form-control" placeholder="Apellido paterno">
          <input type="text" name="usuarioApellidoM" class="form-control" placeholder="Apellido materno">
        </div>
        <br>
        <!--ocupacion-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Ocupacion</span>
          </div>
          <input type="text" class="form-control" placeholder="Ocupacion en el colegio" >
        </div>

        <!--Si es administrador -->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <td><label class="input-group-text" for="inputGroupSelect01">Seleccione administrador:</label></td>
          </div>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Elija una opcion para el usuario si o no </option>
              <option value="si">Si es administrador</option>
              <option value="no">No es administrador</option>
            </select>
        </div>

        <!--Region-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Region</span>
          </div>
          <input type="text" class="form-control" placeholder="Araucania" >
        </div>

        <!--Ciudad-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Ciudad</span>
          </div>
          <input type="text" class="form-control" placeholder="Pucon" >
        </div>

        <!--Calle-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Direccion</span>
          </div>
          <input type="text" class="form-control" placeholder="numero de calle" >
        </div>

        <!--Telefono-->
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Numero telefono</span>
          </div>
          <input type="text" class="form-control" placeholder="numero de calle" >
        </div>


        <!--Usuario-->
        <div class="form-group col-md-6">
            <label for="inputEmail4">Usuario</label>
            <input type="email" name="usuarioUsuario" class="form-control" id="inputEmail4" placeholder="Usuario">
        </div>
        <!--Contraseña-->
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="usuarioPassword" class="form-control" id="inputPassword4" placeholder="Password">
        </div>



        <!--check-->
        <div class="form-check">
          <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Estoy de acuerdo con el envio de datos:</label>
        </div>
        <br>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>






  </body>
</html>
