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
    <center>
    <div style="align-content:center;text-align:center;">
    <table>
            <tr>
                <td><br>
                <label style="font-size:22px;"><b> Parque Tibanica </b></label><br>
                <p> Parque ubicado en el barrio San Mateo - Soacha. Este parque cuenta con una gran cantidad de pasto, cuenta con canchas de tenis, futbol y baloncesto. Tambien cuenta con una edificacion para eventos y zonas recreativas para hacer ejercicio, tanto para adultos como para niños. </p><br>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3977.0613212581693!2d-74.1959812!3d4.5830133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x436b2001630fbc3b!2sParque%20Tibanica!5e0!3m2!1ses-419!2sco!4v1619183987983!5m2!1ses-419!2sco" width="800" height="600" style="margin-left:45px;margin-bottom:65px;border:0;border-radius:15px;" allowfullscreen="" loading="lazy" class="container-xl"></iframe>        
                </td>
                </center>
                </div>
    </table>
    </section>