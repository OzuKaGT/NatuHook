<?php
session_start();
if(isset($_SESSION["usuario"])){
?>
<div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up" style="background-color: #33a24f">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador" style="background-color: #33a24f">
  <div class="container-xl" style="background-color: #33a24f">
      <a href="?controlador=pagina&accion=inicio" class="navbar-brand navegador__imagenboton">
        <img src="Imagenes/LogoN2.png" alt="" width="220" height="80" class="d-inline-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse opciones__nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=".?controlador=pagina&accion=inicio" style="font-size:22px;">Inicio</a> 
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:22px;">
            Acciones
          </a>
          <ul class="dropdown-menu opciones__nav--desplegable" aria-labelledby="navbarDropdown"> 
            <li><a class="dropdown-item opciones__nav--desplegable" href=".?controlador=mapas&accion=mapa">Mapa</a></li>
            <li><a class="dropdown-item opciones__nav--desplegable" href=".?controlador=zonas&accion=zona">Nueva Zona</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" action="modelo/ControladorUsuario/Cierre.php" method="POST">
        <button class="btn btn-outline-warning boton__nav" type="submit" name="botonBuscar">Cerrar Sesion</button>
      </form>
      </nav>
    </div>
<section>
        <table class="container-sm">
            <tr>
                <aside class="container-md" style="text-align:center;width:50%;background-color:#9de0ad;margin-top:1%;margin-bottom:5%;border-radius:15px;border:dashed 1px;font-size:20px;">
                    <legend class="container-md"><b> Nuestra Pagina </b></legend>
                    <p class="container-md">La pagina NatuPoints está hecha con el proposito de ayudar un poco a la economia turistica del municiío de Soacha. </p>
                    <p class="container-md">En está pagina podrás encontrar diferentes zonas turisticas, tanto naturales como artificiales, las cuales podras encontrar informacion como su ubicacion, algunas fotos, etc.</p>
                    <img src="Imagenes/Natu.png" class="container-md" style="width:50%;">
                </aside>
            </tr>
            <h1 style="text-align:center;">Zonas Recomendadas</h1>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:-5%;"><br>
                    <legend class="tituloC"><b> Humedal Neuta </b></legend><br>
                    <img src="Imagenes/Humedal.jpg" alt="humedal" class="image" style="border-radius:10%;width:20%;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Humedal que se encuentra por la via indumil, este pequeño ecosistema se encuentra protegido por la alcaldia soachuna para poderlo preservar. Sin embargo han habido diversas falencias en la proteccion de este lugar. <br>
                    <a href=".?controlador=pagina&accion=Neuta" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://www.eltiempo.com/bogota/espejo-de-agua-del-humedal-neuta-37428" target="blank"> eltiempo.com </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Humedal Tierra Blanca </b></legend><br>
                    <img src="Imagenes/Humedal1.jpg" alt="humedal" class="image" style="border-radius:10%;width:20%;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Humedal ubicado en el barrio Compartir de Soacha. Este humedal se creia perdido, pero las autoridades se hicieron cargo de limpiarlo y dejarlo nuevamente como un pequeño habitat. <br>
                    <a href=".?controlador=pagina&accion=TierraB" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:2%;font-size:12px;">Imagen tomada de <a href="https://www.car.gov.co/saladeprensa/tierra-blanca-el-humedal-que-se-creia-perdido-esta-a-un-paso-de-ser-recuperado" target="blank"> car.gov.co </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Parque Tibanica </b></legend><br>
                    <img src="Imagenes/Parque.jpg" alt="parque" class="image" style="border-radius:10%;width:20%;height:180px;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Parque ubicado en el barrio San Mateo - Soacha. Este parque cuenta con una gran cantidad de pasto, cuenta con canchas de tenis, futbol y baloncesto. Tambien cuenta con una edificacion para eventos y zonas recreativas para hacer ejercicio, tanto para adultos como para niños. <br>
                    <a href="?controlador=pagina&accion=tibanica" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://periodismopublico.com/nuevo-campo-sintetico-de-futbol-para-la-comuna-cinco-de-soacha/cancha-tibanica-soacha-1" target="blank"> periodismopublico.com </a></p>
                </td>
            </tr>
            <br><br>
            <tr>
                <td style="text-align:center;float:left; width:100%;background-color:#9de0ad;border-radius:15px;border:dashed 1px;margin-top:5%;"><br>
                    <legend class="tituloC"><b> Polideportivo Compartir </b></legend><br>
                    <img src="Imagenes/Polideportivo.jpg" alt="parque" class="image" style="border-radius:10%;width:20%;height:180px;float:left;margin-left:2%;margin-right:2%;">
                    <p class="contenido" style="margin-top: 3%;text-align:left;"> Parque que se encuentra ubicado en el barrio Compartir - Soacha. Este parque cuenta con gran cantidad de pasto, cuenta con diversas canchas deportivas y una gran pista de patinaje. Tambien cuenta con zonas recreativas para adultos o niños. <br>
                    <a href=".?controlador=pagina&accion=Poli" style="color: red;
	background-color: #9de0ad;"> Ver Más </a></p><br><br>
                    <p style="text-align:left;margin-left:2%;margin-top:1%;font-size:12px;">Imagen tomada de <a href="https://periodismopublico.com/en-soacha-se-entrega-primera-pista-profesional-de-patinaje" target="blank"> periodismopublico.com </a></p></td>
            </tr>
        </table>
    </section><br><br><br><br><br><br>
<?php 
}else{
    header("location:vistas/Index.php");
}
?>