<?php
    require_once "../php/conexion.php";
    $conexion=conexion();

    $sql="SELECT * from runner";
        $result=mysqli_query($conexion,$sql);


?>
<br><br>
    <div class="row">
        <div class="col-sm-8"></div>
            <div class="col-sm-4">
                <label> Buscar </label>
                    <select id="buscar" class="form-control input-sm">
                    <option value="0">buscar</option>
                        <?php
                            while($ver=mysqli_fetch_row($result)):
                         ?>
                            <option value="<?php echo $ver[0]?>">
                              <?php echo $ver[1]?>
                            </option>
                            <?php endwhile; ?>
                    </select>
            </div>
        </div>


<script >
 $(document).ready(function(){
    $('#buscar').select2();
    $('#buscar').change(function(){
        $.ajax({
            type:"post",
            data:'valor=' + $('#buscar').val(),
            url:'php/crearsesion.php',
            success:function(r){
                $('#tabla').load('componentes/tabla.php');
            }
        });
    });
 });

</script>