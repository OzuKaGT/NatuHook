<?php 

if($_POST){

session_start();

require ('modelo/Conectar.php');

$email=$_POST['Correo'];
$pass=$_POST['Contra'];

$database -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = $database -> prepare("SELECT * FROM inicio_usuario_natu WHERE Correo= :e AND Contraseña= :p");
$query ->bindParam(":e", $email);
$query ->bindParam(":p", $pass);
$query ->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if ($usuario){
    $_SESSION['usuario'] = $usuario["Correo"];
    header("location:.?controlador=pagina&accion=inicio");
}else{  
    echo ("Usuario y/o contraseña incorrectos... Intente nuevamente");
}
}
?>