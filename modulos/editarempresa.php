<?php

$modelEmpresas= new ModelEmpresas();
if(isset($_POST['edit'])&&isset($_POST['nombre'])&&isset($_POST['email'])&&isset($_POST['direccion'])&&isset($_POST['telefono'])&&isset($_POST['localizacion'])&&isset($_POST['cpostal'])&&isset($_POST['poblacion'])&&isset($_POST['contacto'])){
    $empresa = new Empresa($_POST['nombre'],$_POST['email'],$_POST['direccion'],$_POST['telefono'],$_POST['localizacion'],$_POST['cpostal'],$_POST['poblacion'],$_POST['contacto']);
    print_r($_GET['id']);
    $modelEmpresas->editEmpresa($_GET['id'],$empresa);
}
if(isset($_GET['id'])){
    $consulta = $modelEmpresas->mostrarPorId($_GET['id']); 
    echo
"<form action= \"".$_SERVER["PHP_SELF"]."?edit=true&id=$_GET[id]\" method=\"post\" >
    <div class=\"col-xs-6 form-group\"><label for=\"\">Nombre</label><input type=\"text\" name=\"nombre\" value=\"$consulta[nombre]\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Email</label><input type=\"text\" value=\"$consulta[email]\" name=\"email\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Telefono</label><input type=\"text\" value=\"$consulta[telefono]\" name=\"telefono\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Direccion</label><input type=\"text\" value=\"$consulta[direccion]\" name=\"direccion\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Localizacion</label><input type=\"text\" value=\" $consulta[Localizacion]\"
    name=\"localizacion\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Cpostal</label><input type=\"text\" value=\"$consulta[cpostal]\"
    name=\"cpostal\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Poblacion</label><input type=\"text\" value=\"$consulta[poblacion]\" name=\"poblacion\" class=\"form-control\"></div>
    <div class=\"col-xs-6 form-group\"><label for=\"\">Contacto</label><input type=\"text\" value=\"$consulta[contacto]\" name=\"contacto\" class=\"form-control\">
     
    </div>
    <div class=\"form-group col-xs-6\">    <input type=\"submit\" name=\"edit\" class=\"btn btn-default\" value=\"editar\">
</div>   
</form>";

}
?>