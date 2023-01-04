

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
  <h1 class="box-title">Licencias  <button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>   Solicitar Nuevo</button></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
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
                    <th>A partir la fecha</th>
                    <th>Hasta la fecha</th>
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
  <form action="" name="formulario" id="formulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Tipo</label>
      <input class="form-control" type="hidden" name="iddepartamento" id="iddepartamento">
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Descripcion</label>
      <input class="form-control" type="text" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripcion">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">A Partir de la fecha   :  </label>
      <input type="date" class="form-control" name="desde" id="desde" value="<?php echo date("Y-m-d"); ?>">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Hasta la fecha   :   </label>
      <input type="date" class="form-control" name="hasta" id="hasta" value="<?php echo date("Y-m-d"); ?>">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>

      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div>
  </form>
  
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

