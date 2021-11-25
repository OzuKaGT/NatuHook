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
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;padding:10px 0 10px 0 ;border:dashed 1px;">
        <form action="modelo/ControladorArtificial/AgregarZonaAController.php" method="POST" class="formularioT">
            <legend class="TituloReg"><b> Registrar Zona Artificial </b></legend>
            <p id="textopq"> Es rapido y facil </p>
            <input type="text" placeholder=" Nombre " name="nombre" class="cajitasW" pattern="[A-Za-z]{1,100}" required><br><br>
            <input type="text" placeholder=" Ubicacion " name="ubicacion" class="cajitasW" pattern="[A-Za-z0-9 ]{1,100}" required><br><br>
            <textarea placeholder="Descripcion" name="descrip" class="cajitasW" cols="30" rows="10" style="resize:none;" pattern="[A-Za-z0-9 ]{1,200}"></textarea><br><br>
            <input type="text" placeholder=" URL Imagen " name="image" class="cajitasW" required><br><br>
            <input type="submit" name="registro" value="Crear Zona" class="btn btn-success"><br><br>
            <input type="hidden" name="oculto">
        </form>
        <a href=".?controlador=crudartificial&accion=ConsultaZonaA" class="btn btn-info">Consultar Zonas Artificiales Creadas</a>
    </div>
    <div id="RRegistro">
    <?php 
    
    include_once ('modelo/Conectar.php');

    ?>
    </div>
    </section>
    <br><br><br><br><br>