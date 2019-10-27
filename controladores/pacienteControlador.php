<?php
	if ($peticionAjax) {
		require_once "../modelos/pacienteModelo.php";
	} else {
		require_once "./modelos/pacienteModelo.php";
	}

	class pacienteControlador extends pacienteModelo{
		//Controlador para agregar administrador
		public function agregar_paciente_controlador(){

			
			$nombre=mainModel::limpiar_cadena($_POST['pacnombre']);
			$apellido=mainModel::limpiar_cadena($_POST['pacapellido']);
			$nexpediente=mainModel::generar_expediente_clinico(substr($nombre,0,1),substr($apellido,0,1));
			$sexo="";
			$fecha=mainModel::limpiar_cadena($_POST['pacfecha']);
			$fecha=str_replace("/", "-", $fecha);
			$fecha = date("Y-m-d", strtotime($fecha));
            $dui=mainModel::limpiar_cadena($_POST['pacdui']);
            $direccion=mainModel::limpiar_cadena($_POST['pacdireccion']);
            $correo=mainModel::limpiar_cadena($_POST['paccorreo']);
            $telefonop=mainModel::limpiar_cadena($_POST['pactelefonop']);
			$telefonos=mainModel::limpiar_cadena($_POST['pactelefonos']);

			$resnombre=mainModel::limpiar_cadena($_POST['resnombre']);
			$resapellido=mainModel::limpiar_cadena($_POST['resapellido']);
			$resrelacion=mainModel::limpiar_cadena($_POST['resrelacion']);
			$resdui=mainModel::limpiar_cadena($_POST['resdui']);
			$restelefonop=mainModel::limpiar_cadena($_POST['restelefonop']);
			$restelefonos=mainModel::limpiar_cadena($_POST['restelefonos']);
			$edad=intval($_POST["edad"],10);






			if($_POST['pacsexo']=='F'){
				$sexo="FEMENINO";
			}

			if($_POST['pacsexo']=='M'){
				$sexo="MASCULINO";
			}



			$consulta2=mainModel::ejecutar_consulta_simple("SELECT CONCAT(nombre_paciente,apellido_paciente) FROM tpaciente WHERE CONCAT(nombre_paciente,apellido_paciente)='$nombre$apellido'");
			$ec=$consulta2->rowCount();
			if ($ec>=1) {

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"NOmbre y Apellido ya pertenece a un paciente Registrado",
					"Texto"=>"No hemos podido registrar el paciente",
					"Tipo"=>"error"
					
				];

			
			}else{

			

			$consulta2=mainModel::ejecutar_consulta_simple("SELECT dui_paciente FROM tpaciente WHERE dui_paciente='$dui' AND dui_paciente !='' ");
			$ec=$consulta2->rowCount();
			if ($ec>=1) {

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Dui ya pertenece a un paciente",
					"Texto"=>"No hemos podido registrar el paciente",
					"Tipo"=>"error"
					
				];

			
			}else{
			
			
			$dataAD=[
		    "n_expediente"=>$nexpediente,						
			"nombre"=>$nombre,	
			"apellido"=>$apellido,
            "sexo"=>$sexo,
            "fecha"=>$fecha,
            "dui"=>$dui,
            "direccion"=>$direccion,
            "correo"=>$correo,
            "telefonop"=>$telefonop,
            "telefonos"=>$telefonos
	        ];
                                    
			$guardarPaciente=pacienteModelo::agregar_paciente_modelo($dataAD);
				
			if ($guardarPaciente->rowCount()>=1) {
				
					if($resnombre!="" && $resapellido!="" && $resrelacion!="" ){


						$id=mainModel::obtener_identificador_clinico($nexpediente);

						$dataRES=[
							"idpaciente"=>$id,						
							"resnombre"=>$resnombre,	
							"resapellido"=>$resapellido,
							"resrelacion"=>$resrelacion,
							"resdui"=>$resdui,
							"restelefonop"=>$restelefonop,
							"restelefonos"=>$restelefonos
							];



							$guardarResponsable=pacienteModelo::agregar_responsable_modelo($dataRES);

							if ($guardarResponsable->rowCount()>=1){

								$alerta=[
									"Alerta"=>"limpiar",
									"Titulo"=>"Paciente & Responsable Registrado",
									"Texto"=>" paciente & Responsable registrados con exito",
									"Tipo"=>"success",
									"form"=>"formpac"
								];

							}
							else{


								$alerta=[
									"Alerta"=>"simple",
									"Titulo"=>"Ocurrio un Error al Registrar El Responsable",
									"Texto"=>"No hemos podido registrar los datos del responsable ",
									"Tipo"=>"error"
									
								];

							}



						
					}else{
						$alerta=[
							"Alerta"=>"limpiar",
							"Titulo"=>"Paciente Registrado",
							"Texto"=>" paciente registrados con exito",
							"Tipo"=>"success",
							"form"=>"formpac"
						];
					}
				}
				
				else {

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrio un Error Inesperado",
					"Texto"=>"No hemos podido registrar el Paciente",
					"Tipo"=>"error"
					
				];
			}
		}
	}
		
			
			
									
								
								
					

			
			
			return  mainModel::sweet_alert($alerta);
		}


		public function cambiar_estado_paciente_controlador(){

			
			$nexpediente=mainModel::limpiar_cadena($_POST['nexpediente']);
			$estado=mainModel::limpiar_cadena($_POST['estado']);

			$dataAD=[
				"nexpediente"=>$nexpediente,						
				"estado"=>$estado	
			];
										
			$guardarEstado=pacienteModelo::cambiar_estado_paciente_modelo($dataAD);

			if($estado==0){
			
				$textoerror="No Se dio baja al paciente";
			}
			if($estado==1){
				
				$textoerror="No Se dio alta al paciente";
			}

			if ($guardarEstado->rowCount()>=1){


				$consulta=mainModel::ejecutar_consulta_simple("SELECT CONCAT(nombre_paciente,' ',apellido_paciente) as nombre FROM tpaciente WHERE n_expediente='$nexpediente'");
				foreach ($consulta as $row) {
					$nombrep=$row['nombre'];
				
				}
				$textoestado="";
				$textoerror="";

				if($estado==0){
					$textoestado="Se dio baja al paciente";
					$textoerror="No Se dio baja al paciente";
				}
				if($estado==1){
					$textoestado="Se dio alta al paciente";
					$textoerror="No Se dio alta al paciente";
				}

				$alerta=[
					"Alerta"=>"limpiar",
					"Titulo"=>$textoestado,
					"Texto"=>$nombrep,
					"Tipo"=>"success",
					"form"=>"formpac"
				];

			}else{

				$alerta=[
					"Alerta"=>"simple",
					"Titulo"=>"Ocurrio un Error Inesperado",
					"Texto"=>$textoerror,
					"Tipo"=>"error"
					
				];

			}
			return  mainModel::sweet_alert($alerta);
		}
		

		//Controlador para paginar administrador
		public function paginador_administrador_controlador(){
			
			$tabla="";

			
			$conexion = mainModel::conectar();

			$datos = $conexion->query("SELECT  TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS edad ,idpaciente,CONCAT(nombre_paciente,' ',apellido_paciente) as nombre, n_expediente,estado FROM tpaciente");
			
			echo '<table id=dynamic-table class="table table-striped table-bordered table-hover"   dataTable no-footer" role="grid">';
			
			echo '<thead>
			<tr role="row" style="background: #ffff">
				<th style="width: 15%"><strong>EXPEDIENTE</strong></th>
				<th style="width: 50%"><strong>NOMBRE</strong></th>
				<td style="width: 1%"><strong>EDAD</strong></td>
				<th style="width: 10%"><strong>ACCIÓN</strong>
				</th>
			</tr>
				</thead>
			<tbody>';
			foreach ($datos as $row) {

				echo  '<tr role="row" class="odd active">';
				echo  '<td>
								<a href="#" class="info tooltip-info" data-placement="right" data-rel="tooltip"title="Ir a Expediente">
									<i class="ace-icon fa fa-folder-open-o bigger-140"></i>
								<strong>'.$row['n_expediente'].'</strong></a>
					  		</td>';

					  echo '<td>'.$row['nombre'].'</td>
							  <td>'.$row['edad'].'</td>
							  
					  ';

					  echo '<td>
					  <div
					  class="hidden-sm hidden-xs action-buttons"> 
					  ';

					  echo '<a class="info tooltip-info" href="#"
					  data-rel="tooltip" title="Mas Datos" data-toggle="modal"
					  data-target="#modal-infopaciente" >
					  <i
						  class="ace-icon fa fa-list bigger-180"></i>
							  </a>';
					echo '<a class="info tooltip-info" href="expediente"
					data-rel="tooltip" title="ir a Expediente"
					>
					<i
						class="ace-icon fa fa-folder-open-o bigger-180"></i>
					</a>';

					echo '<a class="green tooltip-info" href="#" onclick="ExtraerDatosMod()"
					data-rel="tooltip"
					title="Modificar" data-toggle="modal"
					data-target="#modal-modificarpaciente">
					<i
						class="ace-icon fa fa-pencil bigger-180"></i>
				</a>';

					  if($row['estado']==0){

						echo "<a class='green tooltip-info' href='#'
						data-rel='tooltip' title='Dar Alta' onclick=cambiarestado('".$row['n_expediente']."',1)>
						<i
							class='ace-icon fa fa-arrow-up bigger-180'></i>
					</a>";

					  }
					  if($row['estado']==1){

						echo "<a class='red tooltip-info' href='#'
						data-rel='tooltip' title='Dar Baja' onclick=cambiarestado('".$row['n_expediente']."',0)>
						<i
							class='ace-icon fa fa-arrow-down bigger-180'></i>
					</a>";


					  }


					  


					  
				  	
					
					echo ' </div></td>';


		
			
			}

			echo '</tr></tbody></table>';


			




			

                                                               

                                                                


                                                                  
                                                                   


                                                                       

                                                                       


                                                                       


		}


		

		

		

	}