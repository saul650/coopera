<link rel="stylesheet" href="css/bootstrap.min.css">
<?php


?>

<?php
//activamos almacenamiento en el buffer
ob_start(); 
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
 }else{
 }
 require 'header.php';
 ?>
 <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Lista de prestamos</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>

<!-- --------empieza el contenido------- -->


<!-- --------termina el contenido------- -->
<?php 

require 'footer.php';
 ?>
 <script src="scripts/departamento .js"></script>
 <?php 
