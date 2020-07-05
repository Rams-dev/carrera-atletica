<?php

require_once 'conexion.php';
$conexion = conexion();
$id = $_POST['id'];
$sql = "UPDATE runner SET entregado=1 where id='$id'";
echo $result=mysqli_query($conexion,$sql);

?>