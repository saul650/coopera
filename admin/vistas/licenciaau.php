

<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
}else{


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
  <h1 class="box-title">Licencias </h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover" style="border-color: blue;">
    <thead>
    
    <th>Opciones</th>
					          <th>Tipo de licencia</th>
                    <th>A partir la fecha</th>
                    <th>Hasta la fecha</th>
                    <th>Descripción</th>
                    <th >Fecha de publicación</th>
                    <th>Comentario admin</th>
                    <th>Estado</th>
                    <th>Leido</th>
                    <th>Empleado</th>
    </thead>
    <tbody> 

    </tbody>
    <tfoot>
    <th>Opciones</th>
					          <th>Tipo de licencia</th>
                    <th>De</th>
                    <th>A</th>
                    <th>Descripción</th>
                    <th >Fecha de publicación</th>
                    <th>Comentario admin</th>
                    <th>Estado</th>
                    <th>Leido</th>
                    <th>Empleado</th>
    </thead>
    </tfoot>   
  </table>
</div>
<div class="panel-body" style="height: 400px;" id="formularioregistros">

 <!-- formulario para agregar uno nuevo
 inicio -->
  
  
</div>
<!--fin formulario-->
<!--fin centro-->
      </div>
      </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
<?php 


require 'footer.php';
 ?>
 <script src="scripts/licencia.js"></script>
 <?php 
}

ob_end_flush();
  ?>
