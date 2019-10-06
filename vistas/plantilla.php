<!DOCTYPE html>
<html lang="en">

<?php include 'contenido/css/css-cita.php';?>

<body class="no-skin">

<?php
$peticionAjax=false;
require_once "./controladores/vistasControlador.php";
$vt =new vistasControlador();
$vst=$vt->obtener_vista_controlador();
if($vst=="login"|| $vst=="404"){
    
if($vst=="login"){
require_once "contenido/vista-login.php";
}else{
require_once "contenido/404-view.php";
}
}else{
    session_start();

?>

    <!--barra superior de pagina -->

    <?php include 'modulos/barrasuperior.php';?>

    <!--Fin barra superior (logo y notificaciones) -->

    <div class="main-container ace-save-state" id="main-container">

    <!--menu superior de pagina -->


    <?php include 'modulos/menusuperior.php';?>

    <!--Fin menu superior de pagina -->
        

        <!--inicio contenido de la pagina -->

        <div class="main-content">
            <div class="main-content-inner">
            <?php require_once $vst; ?>
            </div>
        </div>

        <!--fin contenido de la pagina -->

        <!--inicio pie de pagina -->

        <?php include 'modulos/piepagina.php';
      }?>

        

        <!--fin pie de pagina -->

    </div>



    
    

</body>

</html>