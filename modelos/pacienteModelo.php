<?php 
	
	if($peticionAjax){

		require_once "../core/mainModel.php";
	}else{
		require_once "./core/mainModel.php";
	}

	class pacienteModelo extends mainModel{
		protected function agregar_paciente_modelo($datos){
		
			$sql=mainModel::conectar()->prepare("INSERT INTO `tpaciente`
			(`nombre_paciente`, `apellido_paciente`, `sexo_paciente`,
			 `fecha_nacimiento`, `dui_paciente`, `correo_paciente`, `telefonop_paciente`, 
			 `telefonos_paciente`, `direccion_paciente`)
			  VALUES (:nombre_paciente, :apellido_paciente, :sexo_paciente, :fecha_nacimiento, :dui_paciente,
			   :correo_paciente, :telefonop_paciente, :telefonos_paciente, :direccion_paciente)");

			
			$sql->bindParam(":nombre_paciente",$datos['nombre']);
			$sql->bindParam(":apellido_paciente",$datos['apellido']);
			$sql->bindParam(":sexo_paciente",$datos['sexo']);
			$sql->bindParam(":fecha_nacimiento",$datos['fecha']);
			$sql->bindParam(":dui_paciente",$datos['dui']);
			$sql->bindParam(":correo_paciente",$datos['correo']);
			$sql->bindParam(":telefonop_paciente",$datos['telefonop']);
			$sql->bindParam(":telefonos_paciente",$datos['telefonos']);
			$sql->bindParam(":direccion_paciente",$datos['direccion']);
			$sql->bindParam(":correo_paciente",$datos['correo']);
			$sql->execute();
			
               
			return $sql;
		}
	}