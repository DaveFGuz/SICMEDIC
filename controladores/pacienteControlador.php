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
			$sexo=mainModel::limpiar_cadena($_POST['pacsexo']);
			$fecha=mainModel::limpiar_cadena($_POST['pacfecha']);
            $dui=mainModel::limpiar_cadena($_POST['pacdui']);
            $direccion=mainModel::limpiar_cadena($_POST['pacdireccion']);
            $correo=mainModel::limpiar_cadena($_POST['paccorreo']);
            $telefonop=mainModel::limpiar_cadena($_POST['pactelefonop']);
            $telefonos=mainModel::limpiar_cadena($_POST['pactelefonos']);

							
									$dataAD=[
										
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
                                    
									$guardarAdmin=pacienteModelo::agregar_paciente_modelo($dataAD);
									if ($guardarAdmin->rowCount()>=1) {
										$prueba="guardo";
									} else {
								
										$prueba="no guardo";
                                    }
									
								
								
					

			
			
			return $prueba;
		}
		//Controlador para paginar administrador
		

	}