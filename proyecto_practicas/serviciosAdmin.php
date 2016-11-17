<?php 
  require('inc/conexion.php');
 ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <title>Gym</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/Estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Iconos materialize-->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet"><!--Iconos redes sociales-->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css"/>
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

<div class="container">
    <div class="card-panel col s12 m12 l7">
  <div class="row">
    <div class="col s12">
      <ul class="tabs" color="#009688">
        <li class="tab col s5"><a class="active" href="#test1">Nuevo</a></li>
      </ul>
    </div>
    <!--NUEVO SERVICIO-->
    <div id="test1" class="col s12">
      <div class="card-panel col s12">
        
            <div class="row">
                <div class="col s6">
                  <form action="inc/tipospago.php" method="POST" class="col s12">     
           
                    <div class="row">
                         <div class="input-field col s12">
                            <p>
                            <input id="" type="text" name="servicio" class="validate" required>
                            <label for="">Servicio</label>  
                            </p>
                            
                          </div>
                      <div class="col s12">
                          <p>
                            <input type="checkbox" id="check1" name="chrutina" />
                            <label for="check1">Rutina</label>
                          </p>
                          <div class="input-field col s12">
                             <p><input  type="number"  name="prutina" class="validate" pvalue=""/><label for="">Precio</label></p>
                          </div>
                      </div>
                      <div class="col s12">
                            <p>
                              <input type="checkbox" id="check2" name="chsemanal" />
                              <label for="check2">Semanal</label>
                            </p>
                            <div class="input-field col s12">
                             <p><input  type="number"  name="psemanal" class="validate" pvalue=""/><label for="">Precio</label></p>
                          </div>
                      </div>

                      <div class="col s12">
                        <p>
                          <input type="checkbox" id="check3" name="chquincenal"/>
                          <label for="check3">Quincenal</label>
                        </p>
                          <div class="input-field col s12">
                             <p><input  type="number"  name="pquincenal" class="validate" pvalue=""/><label for="">Precio</label></p>
                          </div>
                      </div>
                      <div class="col s12">
                        <p>
                          <input type="checkbox" id="check4" name="chmensualidad" />
                          <label for="check4">Mensualidad</label>
                        </p>
                        <div class="input-field col s12">
                             <p><input  type="number"  name="pmensualidad" class="validate" pvalue=""/><label for="">Precio</label></p>
                          </div>
                      </div>

                    </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                    <i class="material-icons right">send</i>
                  </button>

                 </form>
               
                </div>
                <div class="col s6">
                  <table id="tabla" class="responsive-table">
                      <thead>
                        <tr>
                            <th data-field="name">Servicio</th>
                            <th>Tipo</th>
                            <th data-field="name">Precio</th>
                            <th>Acción</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 

                            $resultado  = $mysqli->query("SELECT * FROM detallepago");

                            while($fila = $resultado->fetch_assoc()){                        

                         ?>

                        <tr>
                          <td><?php echo $fila['nombreS']; ?></td>                     
                          <td><?php echo $fila['tipo']; ?></td>
                          <td><?php echo $fila['precio']; ?></td>
                          <td>
                          <a class="modal-trigger" href="#Modificar<?php echo $fila['iddetallepago'];?>"><i class="material-icons small center teal-text">mode_edit</i>
                           <a href="inc/eliminarTipoPago.php?id=<?php echo $fila['iddetallepago']; ?>"><i class="material-icons small center teal-text">delete</i></a>
                          </td>
                          <div id="Modificar<?php echo $fila['iddetallepago'];?>" class="modal">
                            <div class="modal-content">
                                <h4>Modificar Servicios</h4>
                                <div class="row">
                                    <form action="inc/ModificarTipoPago.php" class="col s12">
                                        <div class="row">
                                           <input type="hidden" name="middetallepago" value="<?php echo $fila['iddetallepago']; ?>"/>
                                            <div class="input-field col s12">
                                              <input name="servicios" class="validate" value="<?php echo $fila['nombreS'];?>" />
                                              <label>Servicios</label>
                                            </div>
                                             <div class="input-field col s12">
                                              <input name="rutina" class="validate" value="<?php echo $fila['tipo'];?>" />
                                              <label>Rutina</label>
                                            </div>
                                             <div class="input-field col s12">
                                              <input type="number" name="precio" class="validate" value="<?php echo $fila['precio'];?>" />
                                              <label>Precio</label>
                                        </div>
                                        <button id="btmodificar" class="btn waves-effect waves-light light-teal darken-1">Guardar<i class="material-icons right">send</i></button>
                                    </form>
                                </div>                                         
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                            </div>
                        </div>

                        </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                </div>
               

              
            </div>

               
                
                
            
        </div>
      </div>
  
<!--Inicio de tabla-->
      
    </div>

  
  </div>
</div>
<!--fin tab-->
</div>
<!--inicio tab-->


</main>
<footer>
  <div class=" footer-copyright teal center">
    © 2016 Josvelka Mendoza, Yari Fonseca, Karen Alvarez.
  </div>        
</footer>

<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js">
</script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script>
     $(document).ready(function(){
       $('ul.tabs').tabs();
       $('.modal').modal();
       $('#tabla').DataTable();
     });
</script>

</body>
</html>