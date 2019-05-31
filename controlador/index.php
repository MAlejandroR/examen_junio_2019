<?php
require_once "../clases/Plantilla.php";


$plantilla = Plantilla::getPlantilla();


$plantilla->display("index.tpl");



?>
