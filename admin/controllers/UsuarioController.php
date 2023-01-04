<?php
require '../modelus/Usuario.php';
class UsuarioController extends Usuario{
public function LoginView(){
    require '../vistas/Usuario/login.php';
}

}
if (isset($_GET['action']) && $_GET['action']=='login'){
$instanciacontrolador = new UsuarioController();
$instanciacontrolador->LoginView();

}

?>