<?php 

include '../../modelo/ControladorArtificial/DatosARController.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <title>NatuPoints</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="Imagenes/LogoNa.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body style="background-color: #AAD2A9" class="container-expand-xl">
  <div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up" style="background-color: #33a24f">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador" style="background-color: #33a24f">
  <div class="container-xl" style="background-color: #33a24f">
      <a href="../../.?controlador=pagina&accion=inicio" class="navbar-brand navegador__imagenboton">
        <img src="../../Imagenes/LogoN2.png" alt="" width="220" height="80" class="d-inline-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse opciones__nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../../.?controlador=pagina&accion=inicio" style="font-size:22px;">Inicio</a> 
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:22px;">
            Acciones
          </a>
          <ul class="dropdown-menu opciones__nav--desplegable" aria-labelledby="navbarDropdown"> 
            <li><a class="dropdown-item opciones__nav--desplegable" href="../../.?controlador=mapas&accion=mapa">Mapa</a></li>
            <li><a class="dropdown-item opciones__nav--desplegable" href="../../.?controlador=zonas&accion=zona">Nueva Zona</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="../../modelo/ControladorUsuario/Cierre.php" method="POST">
        <button class="btn btn-outline-warning boton__nav" type="submit" name="botonBuscar">Cerrar Sesion</button>
      </form>
      </nav>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <section style="margin-top:10%;">
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;padding:10px 0 10px 0 ;border:dashed 1px;"modelo/ControladorArtificial/EditarZonaAController.php" method="POST">
    <form action="../../modelo/ControladorArtificial/EditarZonaAController.php" method="POST" class="formularioT">
            <legend class="TituloReg">&nbsp Registrar Zona Artificial</legend>
            <p id="textopq">&nbsp&nbsp&nbsp&nbsp  Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" value="<?php echo $resultado->Nombre ?>" pattern="[A-Za-z]{1,100}"><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" value="<?php echo $resultado->Ubicacion ?>" pattern="[A-Za-z0-9 ]{1,100}"><br><br>
            <input type="text" placeholder="Descripcion" name="descrip" style="width:30%;height:80px;" value="<?php echo $resultado->Descripcion ?>" pattern="[A-Za-z0-9 ]{1,200}"><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" value="<?php echo $resultado->Imagen ?>"><br><br>
            <input type="submit" name="registro" value="Actualizar" class="btn btn-success"><br><br>
            <input type="hidden" name="oculto">
            <input type="hidden" name="idzonaA" value="<?php echo $resultado->ID_ZonaAR ?>">
        </form>
    </div>
    <div id="RRegistro">
    <?php 
    
    include ('../../modelo/Conectar.php');

    ?>
    </div>
    <br><br><br><br><br>
    <footer class="containter-xl" style=" border: solid #9de0ad;border: 8px;border-radius: 12px;background-color: #9de0ad;text-align: center;margin-left: 85px;margin-right: 75px;margin-top: -70px;margin-bottom: 50px;color: #41444b;font-family: 'Ubuntu', sans-serif;">
        <br>
        <legend class="containter-xl"> Contactenos </legend><br>
        <p class="containter-xl"> Linea Gratuita: <b>01 8000 8888</b> </p>
        <p class="containter-xl"> Correo: <b>NatuPoints@gmail.com </b></p>
        <li style="display:inline-block;"><a style="color:white;font-size:45px;padding:10px 5px;display:block;transition:all 0.5 ease-in-out;" href="https://www.facebook.com/NatuPoints/" target="blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
        <li style="display:inline-block;"><a style="color:white;font-size:45px;padding:10px 5px;display:block;transition:all 0.5 ease-in-out;" href="https://www.instagram.com/natupoints/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </footer>
</body>
</html>