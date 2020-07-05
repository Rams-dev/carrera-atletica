<?php
session_start();

$num=$_POST['valor'];

$_SESSION['consulta']=$num;

echo $num;

?>