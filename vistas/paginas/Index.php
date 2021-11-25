<div class="container-xxl fw-bolder contenedor__navegador" data-aos="fade-up" style="background-color: #33a24f">
    <nav class="topnav navbar navbar-expand-xl navbar-light fixed-top bg-light0 navbar-light shadow-sm scrollednav py-2 navegador" style="background-color: #33a24f">
  <div class="container-xl" style="background-color: #33a24f">
      <a href="?controlador=pagina&accion=inicio" class="navbar-brand navegador__imagenboton">
        <img src="Imagenes/LogoN2.png" alt="" width="220" height="80" class="d-inline-block align-text-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      </nav>
    </div>
<section style="margin-top:10%;">
        <table class="container-sm">
            <tr>
                <aside class="container-md" style="text-align:center; width:36%;background-color:#33a24f;border-radius:15px;border:dashed 1px;color:black;margin-top:-5%;">
                <form method="POST"> 
                    <legend class="container-md"><b> INGRESA A TU CUENTA </b></legend>
                    <h5 class="container-md"> Correo: </h5>
                    <input type="text" placeholder="Correo Electronico" style="text-align:center;border-radius:8px;" class="container-md" name="Correo" required><br><br>
                    <h5> Contraseña: </h5>
                    <input type="password" placeholder="Contraseña" style="text-align:center;border-radius:8px;" class="container-md" name="Contra" required><br><br>
                    <legend > ¿No tienes cuenta? Registrate <a href="?controlador=pagina&accion=registrarusuario">aquí</a></legend><br>
                    <input type="submit" name="entrar" value="Ingresar" class="btn btn-light container-md" style="width:30%;"><br><br>           
                    <?php 
                        include_once ('modelo/ControladorUsuario/Sesion.php');
                    ?> 
                </form>
                </aside>
            </tr>
        </table>
</section><br><br>