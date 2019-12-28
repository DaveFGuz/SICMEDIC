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
        $medicamentos = json_decode($_REQUEST["medicamentos"]);
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
