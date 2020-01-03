<?php
if ($peticionAjax) {
    require_once "../modelos/consultaModelo.php";
} else {
    require_once "./modelos/consultaModelo.php";
}

class consultaControlador extends consultaModelo
{
    //Controlador para agregar administrador



    public function crear_consulta_controlador()
    {
        //Valores de signos vitales
        session_start(['name' => 'SBP']);
        $idpaciente = mainModel::limpiar_cadena($_SESSION['idpaciente']);
        $presion = mainModel::limpiar_cadena($_POST['presion']);
        $frecuencia = mainModel::limpiar_cadena($_POST['frecuencia']);
        $temperatura = mainModel::limpiar_cadena($_POST['temperatura']);
        $peso = mainModel::limpiar_cadena($_POST['peso']);
        $estatura = mainModel::limpiar_cadena($_POST['estatura']);
        //Valores de consultas
        $motivo = mainModel::limpiar_cadena($_POST['motivo']);
        $antecedente = mainModel::limpiar_cadena($_POST['antecedente']);
        $observacion = mainModel::limpiar_cadena($_POST['observacion']);
        $diagnostico = mainModel::limpiar_cadena($_POST['diagnostico']);
        $ordenexamen = mainModel::limpiar_cadena($_POST['ordenexamen']);
        $fecha = date("Y") . "-" . date("m") . "-" . date("d");
        $hora = date("H:i:s");

        $datosCon = [
            "idpaciente" => $idpaciente,
            "motivo" => $motivo,
            "antecedentes" => $antecedente,
            "observacion" => $observacion,
            "diagnostico" => $diagnostico,
            "ordenexamen" => $ordenexamen,
            "fechahora" => $fecha . " " . $hora
        ];

        $insCon = consultaModelo::crear_consulta_modelo($datosCon);

        if ($insCon["afectados"] == 1) {
            $insConx=consultaModelo::insertar_examenes_clinicos_modelo($insCon["ultima"]);

            $datosCon = [
                "idconsulta" => $insCon["ultima"],
                "presion" => $presion,
                "frecuencia" => $frecuencia,
                "temperatura" => $temperatura,
                "peso" => $peso,
                "estatura" => $estatura,

            ];

            $insCony=consultaModelo::insertar_signos_vitales_modelo($datosCon);
        }



        return $insCon["afectados"];
    }

    public function obtener_medicamentos_controlador()
    {

        $conexion = mainModel::conectar();

        $datos = $conexion->query("SELECT * FROM tinventario_medicamento INNER JOIN tmedicamento ON tinventario_medicamento.idmedicamento = tmedicamento.idmedicamento ");

        echo '<select id="medicamento" onchange="agregar()" name="state" style="width: 100%" data-placeholder="buscar paciente">
				<option value="" selected="">[eliga medicamento]</option>
			';
        foreach ($datos as $row) {

            echo '<option title="' . $row['cantidad_medicamento'] . ' unidades disponibles / vence : ' . $row['fecha_vencim_medicamento'] . ' ubicacion : ' . $row['ubicacion'] . '" value="' . $row['idreferencia_medicamento'] . '">' . $row['nombre_medicamento'] . ' ' . $row['presentacion_medicamento'] . ' ' . $row['concentracion_medicamento'] . $row['unidad'] . '</option>';
        }
        echo '</select>';
    }

    public function paginador_historial_consulta_controlador()
    {
    }

    public function actualizar_ultima_Consulta_controlador()
    {
    }
}
