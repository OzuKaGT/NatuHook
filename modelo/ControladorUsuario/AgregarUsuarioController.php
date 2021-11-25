<?php 

if (!isset($_POST['oculto'])){
    exit();
}

include ('../Conectar.php');
$nomb=$_POST['nombres'];
$apel=$_POST['apellidos'];
$date=$_POST['fecha'];
$num=$_POST['numb'];
$mail=$_POST['email'];
$contra=$_POST['pass'];

if (isset($_POST['registro'])) {          
    $usuario = $database->prepare("INSERT INTO usuarios_natu (Nombres, Apellidos, Fecha_Nacimiento, Telefono, Correo, Contraseña) 
    VALUES (?,?,?,?,?,?)");
    $lanzamiento= $usuario -> execute([$nomb, $apel, $date, $num, $mail, $contra]);


    if ($lanzamiento === True) {
        echo "<meta http-equiv='refresh' content='4; url=../../?controlador=pagina&accion=Index'>";

        echo "Se agrego todo correctamente// Redirigiendo ....";
    }else{
        echo 'Hubo un error en la insercion, Intente nuevamente';
    }
}

?>