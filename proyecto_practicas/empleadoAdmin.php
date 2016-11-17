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
        <li><a href="serviciosAdmin.php">Servicio</a></li>
        <li><a href="empleadoAdmin.php">Empleado</a></li>
        <li><a href="clienteAdmin.php">Cliente</a></li>
        <li><a href="Index.php">Salir</a></li>
      </ul>
    </div>
  </nav>
<!-- fin Menu -->
<div class="col col s12 m8 l6">
  <div class="card-panel">
    <div class="row">
    <h5 class="center-align teal-text"><i class="material-icons">supervisor_account</i>Nuevo</h5>
    <br>
    <div class="input-field col s9">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Nombre</label>
    </div>
    <div class="input-field col s9">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Apellidos</label>
    </div>
    <div class="input-field col s9">
      <textarea id="textarea1" class="materialize-textarea"></textarea>
      <label for="textarea1">Dirección</label>
    </div>
    <div class="input-field col s9">
      <input id="icon_prefix" type="text" class="validate">
      <label for="icon_prefix">Celular</label>
    </div>

    <div class="col s12 m12 l9">
      <div class="card-panel">
      <di class="row">
          <div class="input-field col s4">
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Alias</label>
          </div>
          <div class="input-field col s4">
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Contraseña</label>
          </div> 
          <div class="input-field col s3">
            <select>
              <option value="" disabled selected>Seleccione</option>
              <option value="1">Administrador</option>
              <option value="2">Empleado</option>
            </select>
            <label>Tipo de Permiso</label>
          </div>

          <a class="btn-floating btn-large waves-effect waves-light teal"><i class="material-icons">add</i></a>                  
      </di>    
      </div>
    </div>

    </div>
  </div>
</div>
<div class="col s12 m4 l3">
    <ul class="collection with-header">
      <li class="collection-header teal-text"><h4>Empleados</h4></li>
      <a href="empleadoAdmin.php" class="collection-item active">Nuevo Empleado</a>
      <a href="busquedaEmpleado.php" class="collection-item">Búsqueda de Empleado</a>
    </ul>
</div>


<footer>
  <div class=" footer-copyright teal center">
    © 2016 Josvelka Mendoza, Yari Fonseca, Karen Alvarez.
  </div>        
</footer>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js">
</script>
<script>
     $(document).ready(function(){
       $('.modal').modal();
      $('select').material_select();
     });
</script>

</body>
</html>