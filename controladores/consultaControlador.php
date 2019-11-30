<?php
if ($peticionAjax) {
    require_once "../modelos/citaModelo.php";
} else {
    require_once "./modelos/citaModelo.php";
}

class citaControlador extends citaModelo
{
    //Controlador para agregar administrador

    

    public function agregar_consulta_controlador()
    {

        
        $presionAr = mainModel::limpiar_cadena(isset($_POST['nombrecitado']) ? $_POST['nombrecitado'] : '');
        $frecuenciaCar = mainModel::limpiar_cadena(isset($_POST['telefono']) ? $_POST['telefono'] : '');
        $Temperatura = mainModel::limpiar_cadena(isset($_POST['nombrecitado']) ? $_POST['nombrecitado'] : '');
        $Peso = mainModel::limpiar_cadena(isset($_POST['telefono']) ? $_POST['telefono'] : '');
        $estatura = mainModel::limpiar_cadena(isset($_POST['telefono']) ? $_POST['telefono'] : '');

        $sintoma = mainModel::limpiar_cadena(isset($_POST['sintomas']);
        $antecedentes = mainModel::limpiar_cadena($_POST['antecedentes']);
        $diagnostico = mainModel::limpiar_cadena($_POST['diagnostico']);
        $observacion = mainModel::limpiar_cadena($_POST['observacion']);
        $ordenexamen = mainModel::limpiar_cadena($_POST['diagnostico']);




       


        

        return  "";
    }

    public function obtener_medicamentos_controlador()
    { }

    public function paginador_historial_consulta_controlador()
    { }

    public function actualizar_ultima_Consulta_controlador()
    { }
}
