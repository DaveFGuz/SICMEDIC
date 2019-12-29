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
		$conexion=mainModel::conectar();
		$sql = $conexion->prepare("INSERT INTO `tconsulta` (`idconsulta`, `idpaciente`,
		 `fecha_hora_consulta`, `razon_consulta`, `antecedentes_consulta`, `diagnostico_consutla`, 
		 `observaciones_consulta`, `ordenexamen_consulta`) 
		VALUES (NULL, :idpaciente, :fechahora, :razon, :antecedentes, :diagnostico, :observacion, :ordenexamen);");

		$sql->bindParam(":idpaciente", $datos['idpaciente']);
		$sql->bindParam(":fechahora", $datos['fechahora']);
		$sql->bindParam(":razon", $datos['motivo']);
		$sql->bindParam(":antecedentes", $datos['antecedentes']);
		$sql->bindParam(":diagnostico", $datos['diagnostico']);
		$sql->bindParam(":observacion", $datos['observacion']);
		$sql->bindParam(":ordenexamen", $datos['ordenexamen']);
		$sql->execute();

		$retorno = [
			"ultima" => $conexion->lastInsertId(),
			"afectados" => $sql->rowCount()

        ];

		return $retorno;
	}

	protected function insertar_signos_vitales_modelo($json)
	{
	}

	protected function insertar_examenes_clinicos_modelo($idconsulta)
	{
	

		if (file_exists("../expediente/" . $_SESSION["expediente"])) {

			for ($i = 0; $i < count($_FILES["file"]["name"]); $i++) {

				$archivo = $_FILES["file"];

				$ruta_provisional = $archivo["tmp_name"][$i];

				$nombre_imagen = $archivo["name"][$i];

				$ruta_destino = "expediente/" . $_SESSION["expediente"] . "/" . $nombre_imagen;

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

					$archivo = $_FILES["file"];

				$ruta_provisional = $archivo["tmp_name"][$i];

				$nombre_imagen = $archivo["name"][$i];

				$ruta_destino = "expediente/" . $_SESSION["expediente"] . "/" . $nombre_imagen;

				move_uploaded_file($ruta_provisional, "../expediente/" . $_SESSION["expediente"] . "/" . $archivo["name"][$i] . "");

				$dataCon = [
					"idconsulta" => $idconsulta,
					"ruta_imagen" => $ruta_destino
				];
				self::insertar_ruta_modelo($dataCon);

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

	protected function insertar_receta_modelo($idconsulta, $jsonmedic)
	{
		foreach ($jsonmedic as  $m) {
			$m = $m->idmedicamento;
			$m = $m->cantidad;
			$m = $m->idmedicamento;
		}
	}
}
