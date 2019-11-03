<?php
	if ($peticionAjax) {
		require_once "../modelos/citaModelo.php";
	} else {
		require_once "./modelos/citaModelo.php";
	}

	class citaControlador extends citaModelo{
        //Controlador para agregar administrador
        
        public function selector_paciente_cita_controlador(){
		
			$conexion = mainModel::conectar();

			$datos = $conexion->query("SELECT * FROM tpaciente WHERE tpaciente.estado=1 ");

			echo '<select
			id="idpaciente" name="state"   
			style="width: 550px" data-placeholder="buscar paciente">
			<option selected="">[eliga un paciente]</option>
			';
			foreach ($datos as $row) {

			echo '<option value="'.$row['idpaciente'].'">'.$row['n_expediente'].' '.$row['nombre_paciente'].' '.$row['apellido_paciente'].'</option>';
				
			


			}
			echo '</select>';
		}

		public function agregar_cita_controlador(){

			$idpaciente=mainModel::limpiar_cadena(isset($_POST['idpac']) ? $_POST['idpac'] : '' );
			$nombrecitado=mainModel::limpiar_cadena(isset($_POST['nombrecitado']) ? $_POST['nombrecitado'] : '' );
			$hora=mainModel::limpiar_cadena($_POST['horacita']);
			$es=mainModel::limpiar_cadena($_POST['es']);
			$fecha=mainModel::limpiar_cadena($_POST['fechacita']);
			$fecha=str_replace("/", "-", $fecha);
			$fecha = date("Y-m-d", strtotime($fecha));
		
			
			$fechahora=$fecha.' '.$hora;

			
			$consulta=mainModel::ejecutar_consulta_simple("SELECT * FROM `tcita` WHERE tcita.fecha_hora_cita='$fechahora' AND tcita.estado_cita=1 ");
			$ec=$consulta->rowCount();
			if ($ec>=1) {

				
				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"ya existe una cita  ",
					"Texto"=>"Cambiar Fecha o Hora ",
					"Tipo"=>"error"
					
				];
			
			}else{

				$dataAD=[
					"idpaciente"=>$idpaciente,	
					"es"=>$es,						
					"nombre_citado"=>$nombrecitado,	
					"fechahoracita"=>$fechahora,
					
					];
											
					$guardarCita=citaModelo::agregar_cita_modelo($dataAD);

					if ($guardarCita->rowCount()>=1) {

						$alerta=[
							"Alerta"=>"limpiarcita",
							"Titulo"=>"Cita Registrado",
							"Texto"=>"",
							"Tipo"=>"success"
						];

					}else{
						$alerta=[
							"Alerta"=>"simple",
							"Titulo"=>"Ocurrio un Error ",
							"Texto"=>"No se registro cita ",
							"Tipo"=>"error"
							
						];
					}



				
			}

			return  mainModel::sweet_alert($alerta);
			


			
		}

		public function paginador_cita_controlador(){

			$conexion = mainModel::conectar();

			$datos = $conexion->query("SELECT
			tcita.nombre_citado,
			tcita.idcita,
			tcita.idpaciente,
			TIME_FORMAT(TIME(tcita.fecha_hora_cita), '%r') AS hora,
			DATE_FORMAT(DATE(tcita.fecha_hora_cita), '%d/%m/%Y') AS fecha,
			tcita.estado_cita,
			tpaciente.estado
			FROM
			tcita
			INNER JOIN tpaciente ON tcita.idpaciente = tpaciente.idpaciente
			WHERE
			tpaciente.estado!=0");

			echo '<table id="dynamic-table" class="table table-striped table-bordered table-hover   dataTable no-footer" role="grid">
                            
			<thead >
				<tr role="row" style="background: #ffff">
					
					<th style="width: 50%"><strong>CITADO</strong></th>
					<td style="width: 15%"><strong>FECHA /  HORA</strong></td>
					<td style="width: 7%"><strong>ESTADO</strong></td>
					<th style="width: 10%"><strong>ACCIÓN</strong></th>
				</tr>
			</thead>

			<tbody>
			';
			
			
			foreach ($datos as $row) {

				echo'
					<tr role="row" class="odd active">';

							


								if($row["nombre_citado"]==""){

									$datoss = $conexion->query("SELECT
									CONCAT(tpaciente.nombre_paciente,' ',tpaciente.apellido_paciente) as  nombre 
									
									FROM
									tpaciente
									WHERE tpaciente.idpaciente=".$row['idpaciente']."");
									foreach ($datoss as $roww) {
								
								echo '<td> '.$roww['nombre'].'</td>';
									}


								}
								
							else{
								echo '<td> '.$row['nombre_citado'].'(registro pendiente)</td>';
							}


								echo'

								<td><span class="label label-primary">
										<i class="fa fa-calendar "></i> '.$row["fecha"].'  &nbsp; &nbsp;  <i class="fa fa-clock-o">

										</i>  '.$row["hora"].' </span></td>
										';

								if($row["estado_cita"]==1){
								echo'		
								<td><span class="label label-warning " onclick="cambiarestadocita('.$row["idcita"].',2)">PENDIENTE</span>
								<td>';
								}
								if($row["estado_cita"]==2){
									echo'		
									<td><span class="label label-success icon-animated-bell" onclick="cambiarestadocita('.$row["idcita"].',1)">EN ESPERA</span>
									<td>';
									}
									

									echo'<div class="hidden-sm hidden-xs action-buttons">

											
											<a class="green tooltip-info" href="vista-expediente.html" data-rel="tooltip" title="Iniciar Consulta">
													<i class="ace-icon glyphicon glyphicon-folder-open bigger-180"></i>
												</a> 
										<a class="red tooltip-info" href="#" data-rel="tooltip" title="cancelar">
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





			

		}

		public function cambiar_estado_cita_controlador(){
			$idcita=mainModel::limpiar_cadena(isset($_POST['idcita']) ? $_POST['idcita'] : '' );
			$estado=mainModel::limpiar_cadena(isset($_POST['estado']) ? $_POST['estado'] : '' );

			$dataAD=[
				"idcita"=>$idcita,	
				"estado"=>$estado,						
				];
										
				$guardarCita=citaModelo::cambiar_estado_cita_modelo($dataAD);
		}

	}