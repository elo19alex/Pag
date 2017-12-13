<?php
include ("conexion.php");
if(isset($_POST['nombre completo']) && !empty($_POST['nombre completo']) && 
isset($_POST['user']) && !empty($_POST['user']) && 
isset($_POST['contraseña']) && !empty($_POST['contraseña']) && 
isset($_POST['confirmar contraseña']) && !empty($_POST['confirmar contraseña']) && 
isset($_POST['email']) && !empty($_POST['email']) && 
isset($_POST['forma de pago']) && !empty($_POST['forma de pago']) &&
$_POST['contraseña'] == $_POST['confirmar contraseña'])
{

   $con=mysql_connect($host,$user,$pw)
   or die("problemas al conectar server");

   mysql_select_db($db,$con)
   or die("problemas al conectar db");


   mysql_query("INSERT INTO registros (NOMBRE COMPLETO,USUARIO,CONTRASEÑA,EMAIL,FORMA DE PAGO)
VALUES ('$_POST[nombrecompleto]','$_POST[user]','$_POST[contraseña]','$_POST[email]','$_POST[formadepago]')",$con);
   echo "Su registro se ha realizado con exito<br>";

   echo "Nombre:".$_POST['nombre completo']."<br>";
   echo "Usuario:".$_POST['user']."<br>";
   echo "Contraseña:".$_POST['contraseña']."<br>";
   echo "Email".$_POST['email']."<br>";
   echo "Forma de pago:".$_POST['forma de pago']."<br>";
}else{
echo "Verifica que llenaste correctamente los campos y las contraseñas coinciden";
}	

?>