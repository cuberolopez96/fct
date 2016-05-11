<?php

$modelEmpresas = new ModelEmpresas();
if(isset($_POST['add'])&&isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['direccion'])&&isset($_POST['telefono'])&&isset($_POST['localizacion'])&&isset($_POST['cpostal'])&&isset($_POST['poblacion'])&&isset($_POST['contacto'])){
    $empresa = new Empresa($_POST['nombre'],$_POST['email'],$_POST['direccion'],$_POST['telefono'],$_POST['localizacion'],$_POST['cpostal'],$_POST['poblacion'],$_POST['contacto']);
    print_r($empresa);
    $modelEmpresas->addEmpresa($empresa);
}
?>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="post" >
    <div class="col-xs-6 form-group"><label for="">Nombre</label><input type="text" name="nombre" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Email</label><input type="text" name="email" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Telefono</label><input type="text" name="telefono" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Direccion</label><input type="text" name="direccion" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Localizacion</label><input type="text"
    name="localizacion" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Cpostal</label><input type="text" name="cpostal" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Poblacion</label><input type="text" name="poblacion" class="form-control"></div>
    <div class="col-xs-6 form-group"><label for="">Contacto</label><input type="text" name="contacto" class="form-control">
     
    </div>
    <div class="form-group col-xs-6">    <input type="submit" name="add" class="btn btn-default" value="añadir">
</div>   
</form>


<?php require_once "modulos/footer.php"?>