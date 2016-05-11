<?php
require_once 'modulos/header.php';
require_once 'modulos/nav.php';
require_once 'includes/ModelEmpresas.php';
$modelEmpresas = new ModelEmpresas;

?>
<div id="empresas">
    <?php require_once "adminEmpresas.php"; ?>
</div>
 <?php
require_once 'modulos/footer.php';
?>