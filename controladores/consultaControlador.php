<?php
if ($peticionAjax) {
    require_once "../modelos/citaModelo.php";
} else {
    require_once "./modelos/citaModelo.php";
}

class consultaControlador extends citaModelo
{
    //Controlador para agregar administrador



    public function agregar_consulta_controlador()
    {

        $medicamentos = json_decode($_REQUEST["medicamentos"]);

        foreach ($medicamentos as  $m) {
            $m = $m->idmedicamento;
            $m = $m->cantidad;
            $m = $m->idmedicamento;
        }
    }

    public function obtener_medicamentos_controlador()
    {

        $conexion = mainModel::conectar();

		$datos = $conexion->query("SELECT * FROM tinventario_medicamento WHERE tpaciente.estado=1 ");

		echo '<select id="medicamento" name="state" style="width: 550px" data-placeholder="buscar paciente">
				<option value="" selected="">[eliga un paciente]</option>
			';
		foreach ($datos as $row) {

			echo '<option value="' . $row['idpaciente'] . '">' . $row['n_expediente'] . ' ' . $row['nombre_paciente'] . ' ' . $row['apellido_paciente'] . '</option>';
		}
		echo '</select>';

    }

    public function paginador_historial_consulta_controlador()
    { }

    public function actualizar_ultima_Consulta_controlador()
    { }
}
