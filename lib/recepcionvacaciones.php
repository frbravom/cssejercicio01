<?php

include('constantes.php');
include('Vacaciones.php');

$oVacacion = new Vacaciones($_POST["rut"],
        $_POST["nombre"],
        $_POST["cargo"],
        "",
        "",
        "");


if (isset($_SESSION["aVacaciones"])) {
    $arrVacaciones = $_SESSION["aVacaciones"];
}

$arrVacaciones[] = $oVacacion;
$_SESSION["aVacaciones"] = $arrVacaciones;

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<pre>";
var_dump($_SESSION["aVacaciones"]);
echo "</pre>";

