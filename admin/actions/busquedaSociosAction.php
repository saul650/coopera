
<?php
    include '../controllers/busquedaSocios.php';
    include '../vistas/tablaSocios.php';
    require '../vistas/header.php';
    
    
  
?>


<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title"></h1>
  <div class="box-tools pull-right">
    <?php 
      
      $dato = $_POST[ 'dato' ];
      $busqueda = $_POST[ 'busqueda' ];
     
      $sociosObtenidos = getSocios( $dato ,$busqueda );
      
      tablaSocios( $sociosObtenidos );
     ?>
  </div>
</div>

 <script src="scripts/asistencia.js"></script>