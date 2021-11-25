<?php 

$pass='Natu2021';
$user='u991668360_Natu';
$nombredb='u991668360_NatuPoints';

try {
    $database= new PDO('mysql:host=sql437.main-hosting.eu;port=3306;dbname='.$nombredb,
        $user,
        $pass
    );
} 
catch (Exception $e) {
    echo 'Error de conexion'.$e->getMessage();
}

?>