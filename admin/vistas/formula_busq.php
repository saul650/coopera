
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
  <h1 class="box-title">creacion de un prestamo</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>


<div class="panel-body table-responsive" id="listadoregistros">
 
<div class="input-group mb-3">
    <form action="../actions/busquedaSociosAction.php" method="post">
        <input  class="input input-bordered input-accent w-full max-w-xs" type="text" placeholder="llenar este campo" name="dato">
        <br>
        <br>
        <select class="select select-warning w-full max-w-xs" name="busqueda">
            <option value="apellido">apellido</option>
            <option value="ci"> carnet</option>
            <option value="papeleta">papeleta</option>
        </select> 
        <button class="btn btn-primary">buscar</button>
        <br>
    </form>
</div>
   
</body>

<?php 

require 'footer.php';
 ?>
 <script src="scripts/asistencia.js"></script>
 <?php 
