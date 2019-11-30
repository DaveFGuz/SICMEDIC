<?php
$peticionAjax = true;
require_once "../core/configGeneral.php";

if (isset($_POST["accion"])) {

    if ($_POST["accion"] == "save") {
        require_once "../controladores/consultaControlador.php";
        $insAdmin = new consultaControlador();
        echo $insConsulta->agregar_consulta_controlador();
    }
}
