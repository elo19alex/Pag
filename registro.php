
<?php
  session_start();
   
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $apma = $_POST['apma'];
  $app = $_POST['app'];  
  $usu = $_POST['usu'];  
  $cont = $_POST['cont'];
  
   
  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "login";
  
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
   
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  }
   
  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT * FROM usuarios WHERE email='sir_en_y@hotmail.com' AND password = 12345");
  $resultado = $conn->query($sql);
   
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("Location: micuenta.php");
  }else{
    echo 'El email o password es incorrecto, <a href="sesion.html">vuelva a intenarlo</a>.<br/>';
  }
 
