<?php
session_start();

if(isset($_SESSION["usuario"]["nombreUsuario"])){
echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"];
echo "<br></br>";
echo "se puede ver has echo sesion correctamente";






}else{
	echo "no se puede ver";
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

	 	<a href="Login.php" class="btn btn-primary btn-lg">Cerrar Sesion</a>
	 </p>
<?php

 echo "Usuario---:".$_SESSION["usuario"]["nombreUsuario"] ;
?>

 </body>
 </html>
