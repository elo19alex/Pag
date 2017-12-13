<?php

$enlace = mysqli_connect("localhost", "root", "","plymstone");

if ($enlace)
{
	mysqli_query("INSERT INTO comentarios (usuario, mensaje) VALUES ('".$_POST["usuario"]."', '".$_POST["mensaje"]."')", $enlace);
	header("Location: comentarios.php");
}

mysqli_close($enlace);

?>
