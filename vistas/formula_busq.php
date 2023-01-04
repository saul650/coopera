<link rel="stylesheet" href="../../css/login.css">


<div class="input-group mb-3">
    <form action="actions/busquedaSociosAction.php" method="post">
        <input  class="input input-bordered input-accent w-full max-w-xs" type="text" placeholder="llenar este campo" name="dato">
        <br>
        <br>
        <select class="select select-warning w-full max-w-xs" name="busqueda">
            <option value="apellido">apellido</option>
            <option value="ci"> carnet</option>
            <option value="papeleta">papeleta</option>
        </select> 
        <button class="btn btn-primary">buscar</button>
    </form>
</div>
