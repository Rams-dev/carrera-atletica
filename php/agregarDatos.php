<?php

require_once "conexion.php";
$conexion=conexion();

$nom=$_POST['nombre'];
$inst=$_POST['institucion'];
$e=$_POST['edad'];
$tel=$_POST['telefono'];
$num=$_POST['numero'];

$sql="INSERT into runner (nombre,institucion,edad,telefono,numero,entregado) values ('$nom','$inst','$e','$tel','$num',0)"; 
echo $result=mysqli_query($conexion,$sql);

?>
