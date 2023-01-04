<?php

$host = 'localhost';
$user = 'root';
$clave = '';
$bd = 'cas_testing';

$conectar = mysqli_connect($host,$user,$clave,$bd);

$consulta = 'select * from prestamos';
$Rconsulta =  'select * from prestamos';
$Resultado = mysqli_query($conectar,$consulta);
?>
