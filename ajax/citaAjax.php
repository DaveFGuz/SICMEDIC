<?php
$peticionAjax=true;
require_once "../core/configGeneral.php";

if(isset($_POST["accion"])){
if($_POST["accion"]=="save"){
require_once "../controladores/citaControlador.php";

$insAdmin = new citaControlador();
echo $insAdmin->agregar_cita_controlador();  

 
}

if($_POST["accion"]=="cambiarestado"){

  require_once "../controladores/citaControlador.php";
  $insAdmin = new citaControlador();
   echo $insAdmin->cambiar_estado_cita_controlador();
 }

   

    if($_POST["accion"]=="paginado"){

        require_once "../controladores/citaControlador.php";
            $insAdmin = new citaControlador();
            echo $insAdmin->paginador_cita_controlador();   
        
        }
}
?>