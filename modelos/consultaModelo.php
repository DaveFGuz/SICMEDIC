<?php

if ($peticionAjax) {

	require_once "../core/mainModel.php";
} else {
	require_once "./core/mainModel.php";
}

class consultaModelo extends mainModel
{

	protected function crear_consulta_modelo($datos)
	{
		$sql = mainModel::conectar()->prepare("INSERT INTO `tconsulta` 
		(`idexamen`, `fecha_hora_consulta`, `razon_consulta`, `antecedentes_consulta`,
		 `diagnostico_consutla`, `observaciones_consulta`, `recomendacion_consulta`, `ordenexamen_consulta `) 
		VALUES (NULL, :ruta_imagen, :idconsulta);");

		$sql->bindParam(":ruta_imagen", $datos['ruta_imagen']);
		$sql->bindParam(":idconsulta", $datos['idconsulta']);
		$sql->bindParam(":ruta_imagen", $datos['ruta_imagen']);
		$sql->bindParam(":idconsulta", $datos['idconsulta']);
		$sql->bindParam(":ruta_imagen", $datos['ruta_imagen']);
		$sql->bindParam(":idconsulta", $datos['idconsulta']);
		$sql->bindParam(":ruta_imagen", $datos['ruta_imagen']);
		$sql->bindParam(":idconsulta", $datos['idconsulta']);
		$sql->execute();
	}

	protected function insertar_signos_vitales_modelo($json){
	}

	protected function insertar_examenes_clinicos_modelo($idconsulta)
	{
		session_start(['name' => 'SBP']);

		if (file_exists("../expediente/" . $_SESSION["expediente"])) {

			for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {

				$archivo = $_FILES["file"];

				$ruta_provisional = $archivo["tmp_name"][$i];

				$nombre_imagen = $archivo["name"][$i];

				$ruta_destino="expediente/".$_SESSION["expediente"]."/".$nombre_imagen;

				move_uploaded_file($ruta_provisional, "../expediente/" . $_SESSION["expediente"] . "/" . $archivo["name"][$i] . "");
				
				$dataCon = [
				"idconsulta" => $idconsulta,
				"ruta_imagen" => $ruta_destino
				];
				self::insertar_ruta_modelo($dataCon);
			}
		} else {

			if (mkdir("../expediente/" . $_SESSION["expediente"], 0777, true)) {
				for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {

					$ruta_provisional = $_FILES["file"]["tmp_name"][$i];

					move_uploaded_file($ruta_provisional, "../expediente/" . $_SESSION["expediente"] . "/" . $archivo["name"][$i] . "");
					
					$dataCon = [
						"idconsulta" => $idconsulta,
						"ruta_imagen" => $ruta_destino
						];
					self::insertar_ruta_modelo($dataCon);
				
				}
			}
		}
	}

	protected function insertar_ruta_modelo($datos)
	{

		$sql = mainModel::conectar()->prepare("INSERT INTO `texamen` (`idexamen`, `ruta_imagen`, `idconsulta`) 
		VALUES (NULL, :ruta_imagen, :idconsulta);");

		$sql->bindParam(":ruta_imagen", $datos['ruta_imagen']);
		$sql->bindParam(":idconsulta", $datos['idconsulta']);
		$sql->execute();
	}

	protected function insertar_receta_modelo($idconsulta,$jsonmedic){
		foreach ($jsonmedic as  $m) {
            $m = $m->idmedicamento;
            $m = $m->cantidad;
            $m = $m->idmedicamento;
        }
	}


}
