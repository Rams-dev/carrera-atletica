<?php
    session_start();
    unset($_SESSION['consulta']);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>3 CARRERA ATLETICA</title>
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
<link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">

<script src="librerias/jquery-3.2.1.min.js"></script>
<script src="js/funciones.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="librerias/select2/js/select2.js"></script>
</head>
<body>
  

    <div class="container">
      <h2 class="row justify-content-lg-center mt-4 mb-0">REGISTRO DE CORREDORES</h2>
    <div id="buscador"></div>
    <br>
    <div id="tabla"></div>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modalAgregar" tabindex="-2" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"> Agregar corredor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      
      </div>
      <div class="modal-body">
      <label>Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control input-sm">
      <label>Institucion</label>
      <input type="text" name="institucion" id="institucion" class="form-control input-sm">
      <label>Edad</label>
      <input type="text" name="edad" id="edad" class="form-control input-sm">
      <label>Telefono</label>
      <input type="text" name="telefono" id="telefono" class="form-control input-sm">
      <label>numero</label>
      <input type="text" name="numero" id="numero" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo"> Agregar</button>
      </div>
    </div>
  </div>
</div>

</body>
<html>

<script type="text/javascript">
$(document).ready(function(){
    $('#tabla').load('componentes/tabla.php');
    $('#buscador').load('componentes/buscador.php');
});

</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
            nombre=$('#nombre').val();
            institucion=$('#institucion').val();
            edad=$('#edad').val();
            telefono=$('#telefono').val();
            numero=$('#numero').val();
            agregardatos(nombre,institucion,edad,telefono,numero);
        });



    });
</script>
