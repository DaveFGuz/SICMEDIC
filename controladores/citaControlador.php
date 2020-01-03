<?php
if ($peticionAjax) {
	require_once "../modelos/citaModelo.php";
} else {
	require_once "./modelos/citaModelo.php";
}

class citaControlador extends citaModelo
{
	//Controlador para agregar administrador

	public function selector_paciente_cita_controlador()
	{

		$conexion = mainModel::conectar();

		$datos = $conexion->query("SELECT * FROM tpaciente WHERE tpaciente.estado=1 ");

		echo '<select id="idpaciente" name="state" style="width: 550px" data-placeholder="buscar paciente">
				<option value="" selected="">[eliga un paciente]</option>
			';
		foreach ($datos as $row) {

			echo '<option value="' . $row['idpaciente'] . '">' . $row['n_expediente'] . ' ' . $row['nombre_paciente'] . ' ' . $row['apellido_paciente'] . '</option>';
		}
		echo '</select>';
	}

	public function agregar_cita_controlador()
	{

		$idpaciente = mainModel::limpiar_cadena(isset($_POST['idpac']) ? $_POST['idpac'] : '');
		$nombrecitado = mainModel::limpiar_cadena(isset($_POST['nombrecitado']) ? $_POST['nombrecitado'] : '');
		$telefono = mainModel::limpiar_cadena(isset($_POST['telefono']) ? $_POST['telefono'] : '');
		$hora = "";
		$hora = date("H:i", strtotime($_POST['horacita'])) . ':00';
		$es = mainModel::limpiar_cadena($_POST['es']);
		$fecha = mainModel::limpiar_cadena($_POST['fechacita']);
		$fecha = str_replace("/", "-", $fecha);
		$fecha = date("Y-m-d", strtotime($fecha));


		$fechahora = $fecha . ' ' . $hora;


		$consulta = mainModel::ejecutar_consulta_simple("SELECT * FROM `tcita` WHERE tcita.fecha_hora_cita='$fechahora' AND tcita.estado_cita!=0");
		$ec = $consulta->rowCount();
		if ($ec >= 1) {


			$alerta = [
				"Alerta" => "simple",
				"Titulo" => "ya existe una cita  ",
				"Texto" => "Cambiar Fecha o Hora ",
				"Tipo" => "error"

			];
		} else {

			$dataAD = [
				"idpaciente" => $idpaciente,
				"es" => $es,
				"nombre_citado" => $nombrecitado,
				"fechahoracita" => $fechahora,
				"telefono" => $telefono

			];

			$guardarCita = citaModelo::agregar_cita_modelo($dataAD);

			if ($guardarCita->rowCount() >= 1) {

				$alerta = [
					"Alerta" => "limpiarcita",
					"Titulo" => "Cita Registrada",
					"Texto" => "",
					"Tipo" => "success"
				];
			} else {
				$alerta = [
					"Alerta" => "simple",
					"Titulo" => "Ocurrio un Error ",
					"Texto" => "No se registro cita ",
					"Tipo" => "error"

				];
			}
		}

		return  mainModel::sweet_alert($alerta);
	}

	public function paginador_cita_controlador()
	{

		$conexion = mainModel::conectar();

		$fechaini = mainModel::limpiar_cadena(isset($_POST['fechaini']) ? $_POST['fechaini'] : '');
		$fechafin = mainModel::limpiar_cadena(isset($_POST['fechafin']) ? $_POST['fechafin'] : '');

		if ($fechaini == '' && $fechafin == '') {
			$fechaini = date("Y") . date("m") . date("d");
			$fechafin = date("Y") . date("m") . date("d");
		} else {

			$fechaini = str_replace("/", "-", $fechaini);
			$fechaini = date("Y-m-d", strtotime($fechaini));
			$fechaini = str_replace("-", "", $fechaini);
			$fechafin = str_replace("/", "-", $fechafin);
			$fechafin = date("Y-m-d", strtotime($fechafin));
			$fechafin = str_replace("-", "", $fechafin);
		}





		$busqueda = isset($_REQUEST["busqueda"]) ? $_REQUEST["busqueda"] : '';
		$porpagina = isset($_REQUEST["porpagina"]) ? $_REQUEST["porpagina"] : 10;
		$pagina = isset($_REQUEST["pagina"]) ? $_REQUEST["pagina"] : 1;

		$consulta = mainModel::ejecutar_consulta_simple("SELECT IF(tcita.idpaciente IS NULL ,tcita.nombre_citado,
			CONCAT(tpaciente.nombre_paciente,' ',tpaciente.apellido_paciente)) as nombre,
			IF(tcita.idpaciente IS NULL ,tcita.telefono_citado,tpaciente.telefonop_paciente) as telefono,
			tcita.nombre_citado, tcita.idcita, tcita.idpaciente, 
			TIME_FORMAT(TIME(tcita.fecha_hora_cita), '%r') AS hora, 
			DATE_FORMAT(DATE(tcita.fecha_hora_cita), '%d/%m/%Y') AS fecha, tcita.estado_cita 
			FROM tcita LEFT JOIN tpaciente ON tcita.idpaciente = tpaciente.idpaciente WHERE tcita.estado_cita!=0  
			AND DATE(tcita.fecha_hora_cita)>='" . $fechaini . "' AND  DATE(tcita.fecha_hora_cita)<='" . $fechafin . "'");



		$totalregistros = $consulta->rowCount();
		$totalpaginas = ceil($totalregistros / $porpagina);
		$desde = ($pagina - 1) * $porpagina;

		$datos = $conexion->query("SELECT IF(tcita.idpaciente IS NULL ,tcita.nombre_citado,
			CONCAT(tpaciente.nombre_paciente,' ',tpaciente.apellido_paciente)) as nombre,
			IF(tcita.idpaciente IS NULL ,tcita.telefono_citado,tpaciente.telefonop_paciente) as telefono,
			tcita.nombre_citado, tcita.idcita, tcita.idpaciente,
			IF(tcita.idpaciente IS NULL ,0,1) as estarg, 
			TIME_FORMAT(TIME(tcita.fecha_hora_cita), '%r') AS hora, 
			DATE_FORMAT(DATE(tcita.fecha_hora_cita), '%d/%m/%Y') AS fecha, tcita.estado_cita 
			FROM tcita LEFT JOIN tpaciente ON tcita.idpaciente = tpaciente.idpaciente WHERE tcita.estado_cita!=0  
			AND DATE(tcita.fecha_hora_cita)>='" . $fechaini . "' AND  DATE(tcita.fecha_hora_cita)<='" . $fechafin . "' 
			 ORDER BY DATE(tcita.fecha_hora_cita) ASC,TIME(tcita.fecha_hora_cita) 
			 ASC LIMIT " . $desde . "," . $porpagina . " ");



		echo '<table id="dynamic-table" class="table table-striped table-bordered table-hover   dataTable no-footer" role="grid">
                            
			<thead >
				<tr role="row" style="background: #ffff">
					
					<th style="width: 50%"><strong>CITADO</strong></th>
					<th style="width: 5%"><strong>TELEFONO</strong></th>
					<td style="width: 15%"><strong>FECHA /  HORA</strong></td>
					<td style="width: 7%"><strong>ESTADO</strong></td>
					<th style="width: 7%"><strong>ACCIÓN</strong></th>
				</tr>
			</thead>

			<tbody>
			';

		if ($datos->rowCount() == 0) {
			echo '<tr><td colspan="5" style="text-align:center">No se encontraron registros de citas</td></tr>';
			echo '</tr></tbody></table>';
		} else {



			foreach ($datos as $row) {

				echo '<tr role="row" class="odd active">';

				if ($row['estarg'] == 0) {

					echo '<td style="background-color:#fbe5e5"> ' . $row['nombre'] . '</td>';
				}
				if ($row['estarg'] == 1) {

					echo '<td style="background-color:#cfecc2"> ' . $row['nombre'] . '</td>';
				}




				echo '<td>' . $row['telefono'] . '</td>
					<td><span class="label label-primary">
			<i class="fa fa-calendar "></i> ' . $row["fecha"] . '  &nbsp; &nbsp;  <i class="fa fa-clock-o">

										</i>  ' . $row["hora"] . ' </span></td>
										';

				$esta = $row["estado_cita"];



				if ($row["estado_cita"] == 1) {
					echo '		
								<td><span class="label label-warning " onclick="cambiarestadocita(' . $row["idcita"] . ',2,' . $esta . ')">PENDIENTE</span>
								<td>';
				}
				if ($row["estado_cita"] == 2) {
					echo '		
									<td><span class="label label-success icon-animated-bell" onclick="cambiarestadocita(' . $row["idcita"] . ',1,' . $esta . ')">EN ESPERA</span>
									<td>';
				}
				if ($row["estado_cita"] == 3) {
					echo '		
										<td><span class="label label-primary icon-animated-bell" >EN CONSULTA</span>
										<td>';
				}


				echo '<div class="hidden-sm hidden-xs action-buttons">

											
											<a class="green tooltip-info" href="vista-expediente.html" data-rel="tooltip" title="Iniciar Consulta">
													<i class="ace-icon glyphicon glyphicon-folder-open bigger-180"></i>
												</a> 
										<a class="red tooltip-info" href="#" data-rel="tooltip" onclick="eliminar(' . $row["idcita"] . ',0)" title="cancelar">
											<i class="ace-icon glyphicon glyphicon-remove bigger-180"></i>
										</a>
									</div>

									<div class="hidden-md hidden-lg">
										<div class="inline pos-rel">
											<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
													<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
												</button>

											<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
												<li>
													<a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
														<span class="blue">
																<i class="ace-icon fa fa-search-plus bigger-120"></i>
															</span>
													</a>
												</li>

												<li>
													<a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
														<span class="green">
																<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
															</span>
													</a>
												</li>

												<li>
													<a href="#" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
														<span class="red">
																<i class="ace-icon glyphicon glyphicon-remove bigger-120"></i>
															</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</td>

							</tr>
							
							
			';
			}

			echo '</tbody>

			</table>';

			echo '<div class="row tab-content" >
			<div class="col-xs-6">
				';

			if ($totalregistros < $porpagina) {
				echo '<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
					Mostrando 1 a ' . $totalregistros . ' de ' . $totalregistros . ' registros
				</div>';
			} else {
				echo '<div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
					Mostrando 1 a ' . $porpagina . ' de ' . $totalregistros . ' registros
				</div>';
			}

			echo '</div>';

			echo '
			<div class="col-xs-6">
            <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
			<ul class="pagination">';

			if ($pagina != 1)
				echo '<li class="paginate_button previous " onclick="paginador(' . ($pagina - 1) . ')" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
            <a href="#">Previos</a>
			</li>';

			for ($i = 1; $i <= $totalpaginas; $i++) {
				if ($i == $pagina) {
					echo '<li class="paginate_button active disabled" onclick="paginador(' . $i . ')" aria-controls="dynamic-table" tabindex="0"><a href="#">' . $i . '</a>
				</li>';
				} else {
					echo '<li class="paginate_button " style="cursor:pointer" onclick="paginador(' . $i . ')" aria-controls="dynamic-table" tabindex="0"><a href="#">' . $i . '</a>
				</li>';
				}
			}


			if ($pagina != $totalpaginas) {
				echo '<li class="paginate_button next" onclick="paginador(' . ($pagina + 1) . ')" aria-controls="dynamic-table" tabindex="0" 
			id="dynamic-table_next"><a>Siguiente</a>
			</li>';
			}

			echo '</ul>
            </div>
            </div>
		</div>';
		}
	}

	public function cambiar_estado_cita_controlador()
	{
		$idcita = mainModel::limpiar_cadena(isset($_POST['idcita']) ? $_POST['idcita'] : '');
		$estado = mainModel::limpiar_cadena(isset($_POST['estado']) ? $_POST['estado'] : '');

		$dataAD = [
			"idcita" => $idcita,
			"estado" => $estado,
		];

		$guardarCita = citaModelo::cambiar_estado_cita_modelo($dataAD);
	}

	public function cancelar_cita_controlador(){


		
	}
}
