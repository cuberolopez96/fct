<?php 
?>
<div id="tools" class="row">
    
        <div id="formulario" class="col-xs-6">
            <form action="" class="form-inline">
           
                <input type="text" class="form-control" id="buscar">
          
            <input type="submit" class="btn btn-default" value="buscar">
        </form>
        </div>
        
        
    <div class="col-xs-3">
        <a href="" class="btn btn-default">añadir</a>
    </div>
</div>
<div id="empresas">
    <table class="table">
        <tr>
            <th>nombre</th>
            <th>email</th>
            <th>Direccion</th>
            <th>telefono</th>
            <th>Localizacion</th>
            <th>cpostal</th>
            <th>poblacion</th>
            <th>Contacto</th>
            <th>Editar</th>
        </tr>
        <?php
            $consulta = $modelEmpresas->mostrar();
        
            foreach($consulta as $fila){
                echo "<tr>
                <td>$fila[nombre]</td>
                <td>$fila[email]</td>
                <td>$fila[direccion]</td>
                <td>$fila[telefono]</td>
                <td>$fila[Localizacion]</td>
                <td>$fila[cpostal]</td>
                <td>$fila[poblacion]</td>
                <td>$fila[contacto]</td>
                <td><a href=\"$_SERVER[PHP_SELF]?edit=true&id=$fila[id]\">editar</a></td>
                </tr>";
            }
        ?>
    </table>
</div>
<?php require_once "modulos/footer.php";?>