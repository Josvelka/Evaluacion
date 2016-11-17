<html lang="es">
<head>
  <meta charset="UTF-8">
    <title>Gym</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Iconos materialize-->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet"><!--Iconos redes sociales-->
</head>
<body>

 <!-- Menu -->
  <nav class="teal accent-4">
    <div class="brand-logo center">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="Index.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li class="active"><a href="Galeria.php">Galería</a></li>
        <li><a href="Contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal1">Ingresa</a></li>
      </ul>
    </div>
  </nav>
<!-- fin Menu -->
<body>


  <div class="row">
  <br>
    <h5 class="center teal-text">Eventos</h5>
      <br>
    <div class="col s4">
      <div class="material placeholder">
        <img class="left-align materialboxed" data-caption="Competencia de Fuerza y Definición" width="250" src="Imagenes/pess.png">
      </div>
    </div>
    <div class="col s4">
      <div class="material placeholder">
        <img class="center-align materialboxed" data-caption="Maratón de Aeróbicos" width="250" src="Imagenes/10.jpg">
      </div>
    </div>
    <div class="col s4">
      <div class="material placeholder">
        <img class="right-align materialboxed" data-caption="Masajista profesional" width="250" src="Imagenes/mjes.jpg">
      </div>
    </div>
  </div>

  <div id="ro2" class="row">
  <br>
  <br>
  <h5 class="center teal-text">Maquinas</h5>
  <br>
  <div class="row">
    <div id="ip" class="col s2">
      <div class="left-align mission-block-design">
        <img class="materialboxed" data-caption="Bicicleta" width="150" src="Imagenes/m1.png">
      </div>
    </div>
    <div class="col s3">
      <div class="right-align mission-block-design">
        <img class="materialboxed" data-caption="Plaquetas" width="250" src="Imagenes/m3.jpg">
      </div>
    </div>
   <div class="col s3">
       <div class="left-align mission-block-design">
        <img class="materialboxed" data-caption="Prensa de piernas" width="250" src="Imagenes/m2.jpg">
      </div>
     </div>
      <div class="col s3">
       <div class="right-align mission-block-design">
        <img class="materialboxed" data-caption="Predicador" width="250" src="Imagenes/m4.png">
      </div>
     </div>
  </div>
 </div>
    
<div class="row">
  <br>
  <br>
  <h5 class="center teal-text">Ejercicios</h5>
  <br>
    <div id="vid" class="left-align col s5">
      <video class="responsive-video" controls>
        <source src="Videos/Abdominales.mp4" type="video/mp4">
      </video>
    </div>
    <div id="vid" class="right-align col s5">
      <video class="responsive-video" controls>
        <source src="Videos/Gluteos.mp4" type="video/mp4">
      </video>
    </div>
</div>
</body>

<!--Modal-->      
 <div id="modal1" class="modal">
    <div class="modal-content">
     <div class="row">

      <form class="col s12">
        <br>
        <blockquote>
          <h5 align="center">LOGIN</h5>
        </blockquote>
      <br>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">perm_identity</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">User</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="icon_telephone" type="tel" class="validate">
            <label for="icon_telephone">Password</label>
          </div>
        </div>
      </form>
    </div>
      <a id="btlogin" class="waves-effect waves-light btn center-align" href="serviciosAdmin.php">GO</a>
      <br><br>
    </div>
</div>


<!--Inicio footer-->
    <footer id="pie" class="teal accent-4 page-footer">
          <div class="teal accent-4 container">
            <div class="row">
              <div class="col s4">
              <br>
                <h5 class="white-text left-align">Power Gym</h5>
                <br>
                <div class="left-align">
                      <p>Encontrarás las mejores rutinas de entrenamiento, dietas, consejos saludables para ganar y perder peso, ejercicios y todo lo necesario para disfrutar de un estilo de vida Fitnes.</p>
                </div>
              </div>

              <div id="h" class="col s5">
                <br>
                <h5 class="white-text left-align">Horarios de Atención</h5>
                <br>
                <div>
                  <ul>
                    <li>Lunes a Viernes: 5:00 A.M- 9:00 P.M</li>
                    <br>
                    <li>Sábados: 5:00 A.M- 12:00 P.M</li>
                  </ul>
                </div>
              </div>

               <div class="col s1">
                <br>
                <h5 class="white-text left-align">Siguenos</h5>
                <br>
                <div>
                  <ul>
                    <li><a href="https://www.facebook.com/powergym.juigalpachontales?ref=ts&fref=ts"><i class="socicon-facebook center-align"></i></a></li>
                    <br>
                    <li><a href="https://plus.google.com/105869217859190241307"><i class="socicon-googleplus"></i></a></li>
                    <br>
                    <li><a href="https://www.instagram.com/josvelkakarolina/"><i class="socicon-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class=" footer-copyright teal center">
            © 2016 Josvelka Mendoza, Yari Fonseca, Karen Alvarez.
          </div>
        </footer>
<!--fin footer-->

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js">
</script>
<script>
     $(document).ready(function(){
       $('.slider').slider({full_width: true});
       $('.parallax').parallax();
       $('.modal').modal();
       $('.materialboxed').materialbox();
     });
</script>

</body>
</html>