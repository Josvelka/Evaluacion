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

<main>
 <!-- Menu -->
  <nav class="teal accent-4">
    <div class="brand-logo center">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="active"><a href="Index.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="Galeria.php">Galería</a></li>
        <li><a href="Contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal1">Ingresa</a></li>
      </ul>
    </div>
  </nav>
<!-- fin Menu -->


<!--Inicio slider -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="Imagenes/d.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3 class="teal-text text-accent-4">Power Gym</h3>
          <h5 class="light teal-text text-accent-4">Estas aqui para ser feliz.</h5>
        </div>
      </li>
      <li>
        <img src="Imagenes/b.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3 class="teal-text text-accent-4">Te ayudamos a lograr tu objetivo</h3>
          <h5 class="light teal-text text-accent-4">Ven y compruébalo</h5>
        </div>
      </li>
      <li>
        <img src="Imagenes/a.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3 class="teal-text text-accent-4">Te cuidamos!</h3>
          <h5 class="light teal-text text-accent-4">Cuidate tú tambien.</h5>
        </div>
      </li>
      <li>
        <img src="Imagenes/c.jpg"> 
        <div class="caption center-align">
          <h3 class="teal-text text-accent-4">Regitrate!</h3>
          <h5 class="light teal-text text-accent-4">Empieza ahora.</h5>
        </div>
      </li>
    </ul>
  </div>

<!-- fin slider -->

<!-- Inicio de mision-vision -->
  <div class="row">
    <div class="container">

      <div class="col s1">
        <img class="circle responsive-img" src="Imagenes/mision.png">
      </div>
      <div class="col s3">
        <span class="teal-text">
          <h5>Misión</h5>
          <br>
          Mantener a nuestros colaboradores motivados y capacitados en las últimas tendencias sobre entrenamiento y atención al público, contando con gimnasios modernos, bien equipados y ubicados estratégicamente para la comodidad de nuestros socios.
        </span>
      </div>
      <div class="col s1 offset-s3">
        <img class="circle responsive-img" src="Imagenes/vision.png">
      </div>
      <div class="col s3 offset">
        <span class="teal-text">
          <h5>Visión</h5>
          <br>
          Ser reconocida como una de las mejores cadenas de gimnasios de Latinoamérica, superándonos constantemente y transformando la calidad de vida de nuestros socios y colaboradores a través de una cultura de salud y ejercicio físico.
        </span>
      </div>
    </div>
  </div>
<!-- fin mision-vision -->

<!--Inicio parallax-->
    <div class="parallax-container">
      <div class="parallax">
      <img style="display:block; transform: translate3d(-50%,359px, 0px);" src="Imagenes/f.jpg">
      </div>
        <div id="p" class="teal-text container N/A transparent">
          <h4>Comienza tu nueva Vida</h4>
          <h2>INCRIBETE HOY</h2>
          <a class="waves-effect waves-light btn" href="Contactanos.php">Contáctanos</a>
        </div>
    </div>
<!--fin parallax-->  
</main>
  
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
                  <ul>
                    <li><a class="white-text" href="#!">
                    	<p>Encontrarás las mejores rutinas de entrenamiento, dietas, consejos saludables para ganar y perder peso, ejercicios y todo lo necesario para disfrutar de un estilo de vida Fitnes.</p>
                    </a></li>
                    <br>
                  </ul>
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
   	 });
</script>



</body>
</html>