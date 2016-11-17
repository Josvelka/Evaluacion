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
    <h5 class="center-align teal-text"><i class="material-icons">supervisor_account</i>Búsqueda</h5>
    <br>
      <div class="input-field col s9">
        <i class="material-icons prefix">search</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Búsqueda</label>
      </div> 

          <div class="col l12">
            <table class="responsive-table col s9 striped">
              <thead>
                <tr>
                  <th data-field="id">#</th>
                  <th data-field="nombre">Nombre</th>
                  <th data-field="celular">Celular</th>
                  <th data-field="tipo">Tipo</th>
                  <th data-field="accion">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Josvelka</td>
                  <td>57554396</td>
                  <td>Administrador</td>
                  <td>
                    <a class="modal-trigger" href="#Modificar"><i class="material-icons small center teal-text">mode_edit</i>
                    <a href="#"><i class="material-icons small center teal-text">delete</i></a>
                  </td>
                </tr>  
              </tbody>
            </table>
          </div>
 <!--inicio Modal-->
          <div id="Modificar" class="modal">
              <div class="modal-content">
                  <h4>Modificar Servicios</h4>
                  <div class="row">
                      <form class="col s12">
                          <div class="row">
                            <input type="hidden" id="midservicios" value=""/>
                            <div class="input-field col s12">
                              <input id="mservicios" name="servicios" class="validate" value="" />                               
                              </div>
                          </div>
                          <button id="btmodificar" class="btn waves-effect waves-light light-teal darken-1">Guardar<i class="material-icons right">send</i></button>
                      </form>
                  </div>                                        
              </div>
              <div class="modal-footer">
                <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar Sesión</a>
              </div>
          </div>          
          <!--fin Modal-->
    </div>
  </div>
</div>


<div class="col s12 m4 l3">
    <ul class="collection with-header">
      <li class="collection-header teal-text"><h4>Empleados</h4></li>
      <a href="empleadoAdmin.php" class="collection-item">Nuevo Empleado</a>
      <a href="busquedaEmpleado.php" class="collection-item  active">Búsqueda de Empleado</a>
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