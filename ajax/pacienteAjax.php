<?php
$peticionAjax=true;
require_once "../core/configGeneral.php";

if(isset($_POST["accion"])){
if($_POST["accion"]=="save"){
require_once "../controladores/pacienteControlador.php";

$insAdmin = new pacienteControlador();
echo $insAdmin->agregar_paciente_controlador();  
 
}
if($_POST["accion"]=="obtenerdatos"){

    require_once "../controladores/pacienteControlador.php";
        $insAdmin = new pacienteControlador();
        echo $insAdmin->obtener_paciente_controlador();   
    
    }
    if($_POST["accion"]=="cambiarestado"){
        
        require_once "../controladores/pacienteControlador.php";
        $insAdmin = new pacienteControlador();
        echo $insAdmin->obtener_paciente_controlador();
    }

    if($_POST["accion"]=="alltabla"){
        
        require_once "../controladores/pacienteControlador.php";
        $insAdmin = new pacienteControlador();
        echo $insAdmin->paginador_administrador_controlador();
    }
}
?>