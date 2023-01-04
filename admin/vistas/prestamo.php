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
  <h1 class="box-title">Prestamo </h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div class="panel-body table-responsive" id="listadoregistros">
  <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
    <thead>

      <th>Opciones</th>
      <th>id</th>
      <th>id socio</th>
      <th>id tasa</th>
      <th>observaciones</th>
      <th>plazo</th>
      <th>tipo de transaccion</th>
      <th>monto</th>
      <th>fecha </th>
      <th>refinanciamiento</th>
    </thead>
    <tbody> 
    </tbody>
    <tfoot>

    <th>Opciones</th>
      <th>id</th>
      <th>id socio</th>
      <th>id tasa</th>
      <th>observaciones</th>
      <th>plazo</th>
      <th>tipo de transaccion</th>
      <th>monto</th>
      <th>fecha </th>
      <th>refinanciamiento</th>
    </tfoot>   
  </table>
</div>


<div class="panel-body" id="formularioregistros">
  
   


    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">tasa:</label>
      <input class="form-control" type="text" name="id_tasa" id="id_tasa" maxlength="100" placeholder="Apellidos" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Observaciones: </label>
      <input class="form-control" type="email" name="observaciones" id="observaciones" maxlength="70" placeholder="obs">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">plazo:</label>
      <input class="form-control" type="text" name="plazo" id="plazo" maxlength="20" placeholder="nombre de usuario" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">tipo de transacion:</label>
      <input class="form-control" type="text" name="tipo_transaccion" id="tipo_transaccion" maxlength="64" placeholder="Clave">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">monto:</label>
      <input class="form-control" type="text" name="monto" id="monto" maxlength="64" placeholder="Clave">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">fecha:</label>
      <input class="form-control" type="text" name="fecha" id="fecha" maxlength="64" placeholder="Clave">
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
      <label for="">refinanciamiento:</label>
      <input class="form-control" type="text" name="refinanciamiento" id="refinanciamiento" maxlength="64" placeholder="Clave">
    </div>
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div>
  </form>
</div>
</div>
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
 <script src="scripts/prestamo.js"></script>
 <?php 
}

ob_end_flush();
  ?>

