<?php
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['nombre'])) {
  header("Location: login.php");
}else{

 
require 'header.php';
require_once('../modelos/Usuario.php');
  $usuario = new Usuario();
  $rsptan = $usuario->cantidad_usuario();
  $reg=$rsptan->fetch_object();
  $reg->nombre;
?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="panel-body">

<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="small-box bg-blue">
    
    <a href="asistencia.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>Lista asistencias </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>
<?php } ?>
<?php if ($_SESSION['tipousuario']!='Administrador') {
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-aqua">
    
    <a href="asistenciau.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>Mi lista asistencias </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>
<?php } ?>



<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="small-box bg-orange">
    <div class="inner">
      <h4 style="font-size: 20px;">
        <strong>Empleados:   </strong>
      </h4>
      <p>Total <?php echo $reg->nombre; ?></p>
    </div>
    <div class="icon">
       <i class="fa fa-users" aria-hidden="true"></i>
    </div>
    <a href="usuario.php" class="small-box-footer">Agregar <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="small-box bg-aqua">
    
    <a href="licencia.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>Lista de Licencias </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>
<?php } ?>


<?php if ($_SESSION['tipousuario']=='Administrador') {
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
  <div class="small-box bg-red">
    
    <a href="rptasistencia.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>Reporte de asistencias </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>
<!-- QUITAR PENDIENTE -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Informe de asistencia mensual</h3>
              <div class="box-tools pull-right">
                <form class="form-inline">
                  <div class="form-group">
                    <label>Seleccionar Año: </label>
                    <select class="form-control input-sm" id="select_year">
                      <?php
                        for($i=2015; $i<=2065; $i++){
                          $selected = ($i==$year)?'selected':'';
                          echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                        }
                      ?>
                    </select>
                  </div>
                </form>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <br>
                <div id="legend" class="text-center"></div>
                <canvas id="barChart" style="height:350px"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- QUITAR PENDIENTE -->
<?php } ?>
<?php if ($_SESSION['tipousuario']!='Administrador') {
?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
  <div class="small-box bg-green">
    
    <a href="rptasistenciau.php" class="small-box-footer">
    <div class="inner">
      <h5 style="font-size: 20px;">
        <strong>Mi reporte de asistencias </strong>
      </h5>
      <p>Módulo</p>
    </div>
    <div class="icon">
      <i class="fa fa-list" aria-hidden="true"></i>
    </div>&nbsp;
     <div class="small-box-footer">
           <i class="fa"></i>
     </div>

    </a>
  </div>
</div>

<?php } ?>
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
}
ob_end_flush();
?>