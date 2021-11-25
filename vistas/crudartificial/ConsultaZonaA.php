<?php 

include_once 'modelo/ControladorArtificial/BuscarZonaAController.php';

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
        <table style="background-color:white;border:solid darkgrey;">
      <thead style="border:solid darkgrey;">
        <tr style="border:solid darkgrey;">
          <th scope="col" style="border:solid darkgrey;">#ID</th>
          <th scope="col" style="border:solid darkgrey;">Nombre</th>
          <th scope="col" style="border:solid darkgrey;">Ubicacion</th>
          <th scope="col" style="border:solid darkgrey;">Descripcion</th>
          <th scope="col" style="border:solid darkgrey;">Imagen</th>
          <th scope="col" style="border:solid darkgrey;">Accion</th>
        </tr>
      </thead>
      <tbody> 
        <?php 
          foreach ($solicitudes as $dato) {
        ?>
        <tr style="border:solid darkgrey;">
          <th style="border:solid darkgrey;"><?php echo $dato->ID_ZonaAR; ?></th>
          <td style="border:solid darkgrey;"><?php echo $dato->Nombre; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Ubicacion; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Descripcion; ?></td>
          <td style="border:solid darkgrey;"><?php echo $dato->Imagen; ?></td>
          <td style="border:solid darkgrey;"><a href="vistas/crudartificial/EditarZonaA.php?id=<?php echo $dato->ID_ZonaAR; ?>" class="btn btn-primary" style="margin-top:5px;"> Editar </a> &nbsp&nbsp
            <a href="modelo/ControladorArtificial/EliminarZonaAController.php?id=<?php echo $dato->ID_ZonaAR; ?>" class="btn btn-danger" style="margin-top:5px;margin-bottom:5px;"> Eliminar </a></td>
        </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
    </section>
    <br><br><br><br><br><br><br><br><br><br>