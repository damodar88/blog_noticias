<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
	<p>se puede ver has echo sesion correctamente</p>
	 <a href="../Helper/CerarSesion.php" class="btn btn-primary btn-lg">Cerrar Sesion</a>


<?php


if(isset($_SESSION["usuario"]["nombreUsuario"])){

echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"];
echo "<br></br>";

echo "dato usuario---:".$_SESSION["usuario"]["ID_USUARIO"]."<br></br>";
echo "dato privielegio---:".$_SESSION["usuario"]["administrador"]."<br></br>";
echo "dato usuario---:".$_SESSION["usuario"]["nombreUsuario"]."<br></br>";
echo "dato apellidoP---:".$_SESSION["usuario"]["apellidoPaternoUsuario"]."<br></br>";
echo "dato apellidoM---:".$_SESSION["usuario"]["apellidoMaternoUsuario"]."<br></br>";
echo "dato usuario---:".$_SESSION["usuario"]["usuarioUsuario"]."<br></br>";
echo "dato fecha---:".$_SESSION["usuario"]["fechaModificacionUsuario"]."<br></br>";
echo "dato ocupacion---:".$_SESSION["usuario"]["ocupacionUsuario"]."<br></br>";

?>
 <
<?php

 echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"] ;
?>

 </body>
 </html>



<?php


}else{
	echo "no se puede ver";
 }
 ?>
