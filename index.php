<?php

require_once "controllers/plantilla.controlador.php";
require_once "controllers/formularios.controlador.php";
require_once "models/formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
 