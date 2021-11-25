<div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up" style="background-color: #33a24f">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador" style="background-color: #33a24f">
  <div class="container-xl" style="background-color: #33a24f">
      <a href=".?controlador=pagina&accion=index" class="navbar-brand navegador__imagenboton">
        <img src="Imagenes/LogoN2.png" alt="" width="220" height="80" class="d-inline-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse opciones__nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=".?controlador=pagina&accion=index" style="font-size:22px;">Inicio</a> 
        </li>
      </nav>
    </div>
<section>
    <br>
    <div class="mb-3" style="text-align:center;background-color:#9de0ad;margin-left:18%;margin-right:18%;margin-top:-5%;padding:10px 0 10px 0 ;border:dashed 1px;">
        <form action="modelo/ControladorUsuario/AgregarUsuarioController.php" method="POST" class="formularioT">
            <legend><b> Registrate </b></legend>
            <p> Es rapido y facil </p>
            <input type="text" placeholder=" Nombres " name="nombres" class="cajitasW" pattern="[A-Za-z0-9 ]{1,100}" required><br><br>
            <input type="text" placeholder=" Apellidos " name="apellidos" class="cajitasW" pattern="[A-Za-z0-9 ]{1,100}" required><br><br>
            <p style="size: 10px;"> Fecha de Nacimiento </p>
            <input type="text" placeholder=" AAAA-MM-DD " name="fecha" class="cajitasW" required><br><br>
            <input type="number" placeholder="  Numero de telefono " name="numb" class="cajitasW" style="width:23%;" pattern="[0-9]{1,10}" required><br><br>
            <input type="email" placeholder="  Correo electronico " name="email" class="cajitasW" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
            <input type="password" placeholder="  Contraseña " name="pass" class="cajitasW" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe tener como minimo 8 caracteres" required><br><br><br>
            <input type="hidden" name="oculto">
            <input type="submit" name="registro" value="Registrarse" class="btn btn-success"><br><br>
        </form>
    </div>
    </section>
    <div id="RRegistro">
    <?php 
    
    include_once ('modelo/Conectar.php');

    ?>
    </div>
    <br><br><br><br><br><br>