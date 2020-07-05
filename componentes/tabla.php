
<?php
session_start();
require_once "../php/conexion.php";
$conexion = conexion();
?>


<div class="rows">
    <div class="col-sm-12">
        <caption>
        <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#modalAgregar">
            Agregar corredor
        <span class="glyphicon glyphicon-plus"></span>
        </button>
        </caption>
        <table class="table table-hover  table-bordered">
        
        <thead class="thead-dark">
            <tr>
                <td>#</td>
                <td>Nombre</td>
                <td>Institucion</td>
                <td>Edad</td>
                <td>Telefono</td>
                <td>Numero</td>
                <td>KIT</td>
        </thead>

            </tr>
            <?php
            if(isset($_SESSION['consulta'])){
                if($_SESSION['consulta'] > 0){
                    $num=$_SESSION['consulta'];
                    $sql="SELECT nombre,institucion,edad,telefono,numero from runner where numero='$num'";
                }else{
                   // $sql="SELECT * from runner";
                }
            }else{
            
                $sql="SELECT * from runner";
            }
            $result=mysqli_query($conexion,$sql);
            foreach ($result as $ver ):?>
            <tr>
                <td><?php echo $ver['id']?></td>
                <td><?php echo $ver['nombre']?></td>
                <td><?php echo $ver['institucion']?></td>
                <td><?php echo $ver['edad']?></td>
                <td><?php echo $ver['telefono']?></td>
                <td><?php echo $ver['numero']?></td>
                <td> 
                <?php if($ver['entregado'] == 0){?>   
                <button class="btn btn-warning" onclick="entregar(<?=$ver['id']?>)">Sin entregar</button>
                <?php }else{ ?>
                    <button class="btn btn-success">Entregado</button>
                    <?php } ?>
                </td> 
            </tr>
            <?php
             endforeach;
            ?>
        </table>
    </div>
</div>



<script type="text/javascript">

  function entregar(ide){
    var id=ide;
    $.ajax({
    type:"POST",
    data: {"id":id},
    dataType: 'JSON',
    url:"php/actualizar_datos.php",
    success: function(data){
        $('#entregar').removeClass("btn-warning");
        $('#entregar').addClass('btn-success');
        $('#tabla').load('componentes/tabla.php');
        $('#buscador').load('componentes/buscador.php');
        $('#entregar').html('Entregado');

    }
    });
}

</script>