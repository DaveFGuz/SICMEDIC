<?php
$peticionAjax=true;
require_once "../core/configGeneral.php";

if(isset($_POST["accion"])){
if($_POST["accion"]=="save"){
require_once "../controladores/pacienteControlador.php";
$insAdmin = new pacienteControlador();
echo $insAdmin->agregar_paciente_controlador();   
}
}
?>