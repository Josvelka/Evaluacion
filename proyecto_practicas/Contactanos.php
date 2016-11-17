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
        <li><a href="Index.php">Inicio</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="Galeria.php">Galería</a></li>
        <li class="active"><a href="Contactanos.php">Contáctanos</a></li>
        <li><a class="waves-effect waves-light btn" href="#modal1">Ingresa</a></li>
      </ul>
    </div>
  </nav>
<!-- fin Menu -->


<div class="row grey lighten-2">
  <div class="col s5 one-half">
  <br>
    <ul>
      <br>
      <br>
      <br>
      <li><i class="material-icons teal-text">stay_primary_portrait</i> 57554396 - 88581879</li>
      <br>
      <br>
      <li><i class="material-icons teal-text">location_on</i>UNION FENOSA 1C AL ESTE. Juigalpa-Chontales</li>
      <br>
      <br>
      <li><i class="material-icons teal-text" >email</i>www.powergym.juigalpachontales@gmail.com</li>
    </ul>                
  </div>
  <div class="col s7">
  <br>
    <h5 class="teal-text">Ubicación</h5>
    <iframe class="z-depth-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.1681431556835!2d-85.36513208594135!3d12.100639036665072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7363dd745cda8f%3A0x70f9e87e45828861!2sPowerGym!5e0!3m2!1ses!2sni!4v1478897308736" width="650" margin-bottom="200" height="380" frameborder="5" style="border:0" allowfullscreen></iframe> 
      <br><br>
  </div>
</div>


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