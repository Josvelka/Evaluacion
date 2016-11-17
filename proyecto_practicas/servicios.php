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
        <li class="active"><a href="servicios.php">Servicios</a></li>
        <li><a href="Galeria.php">Galería</a></li>
        <li><a href="Contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal1">Ingresa</a></li>
      </ul>
    </div>
  </nav>
<!-- fin Menu -->

<!--Inicio -->
      <div class="grey lighten-2 parallax"></div>
        <div id="p1" class="teal-text container N/A transparent">
          <h4>Te acercamos a lo que Sueñas</h4>
          <p>Atendiendo tus objetivos</p>
        </div>
<!--fin --> 
<!--Entrenadores --> 
<div class="white teal-text center-align">
<br>
<br>
  <h4>Entrenadores Especializados</h4>
  <br>
    <div id="c_entrenadores" class="row">
      <div class="col s4">
        <div class="card left-align">
          <div class="card-image">
            <img src="Imagenes/Entrenador.jpg">
          </div>
          <div class="card-content">
           <span class="card-title black-text">Pesas</span>
           <br>
            <p>Planifica rutinas de entrenamiento. Imparte el asesoramiento necesario en el uso correcto de los equipos e implementos y presta especial atención a los usuarios, según la edad y condiciones físicas.</p>
          </div>  
        </div>
      </div>

      <div class="col s4">
        <div class="card center-align">
          <div class="card-image">
          <br><br>
            <img src="Imagenes/aero.jpg">
          </div>
          <div class="card-content">
          <span class="card-title black-text">Aerobicos</span>
            <p>Instruyen y motivan a los individuos o grupos en sus actividades físicas, incluyendo los ejercicios cardiovasculares, de estiramiento y fortalecimiento muscular. Trabajan con personas de todas las edades y niveles de habilidad.</p>
          </div>  
        </div>
      </div>

      <div class="col s4">
        <div class="card right-align">
          <div class="card-image">
            <img src="Imagenes/mas.jpg">
          </div>
          <div class="card-content">
          <span class="card-title black-text">Masajes Reductivos</span>
            <p>Este tipo de masaje logra remover los tejidos adiposos acumulados en ciertas zonas que son más resistentes en el cuerpo, como los glúteos y abdomen por ejemplo, permitiendo que se active el sistema linfático y estos sean eliminados naturalmente por el organismo. </p>
          </div>  
        </div>
      </div>
    </div>
<!--Fin de entrenadores--> 

<!--servicios--> 
<div class="grey lighten-2 row">
 <br>
  <h4>Nuestros Servicios</h4>
  <br>
  <div class="row">

    <div class="col s4">
      <br>
      <img src="Imagenes/manc.png" width="220">
      <h5>Pesas</h5>
    </div>
    <div class="col s4">
      <img src="Imagenes/pelo.png" width="90">
      <h5>Aeróbicos</h5>
    </div>
    <div class="col s4">
      <img  src="Imagenes/m.png" width="100" alt="">
      <h5>Masajes</h5>
    </div>
  </div>   
</div>
<!--fin de servicios--> 

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
                <div>
              <div class="left-align">
                      <p>Encontrarás las mejores rutinas de entrenamiento, dietas, consejos saludables para ganar y perder peso, ejercicios y todo lo necesario para disfrutar de un estilo de vida Fitnes.</p>
                   
                </div>
                </div>
              </div>

              <div id="h" class="col s5">
                <br>
                <h5 class="white-text left-align">Horarios de Atención</h5>
                <br>
                <div class="left-align">
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
                <div class="left-align">
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
     });
</script>

</body>
</html>