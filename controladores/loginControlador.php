<?php

if ($peticionAjax) {

	require_once "../modelos/loginModelo.php";
} else {
	require_once "./modelos/loginModelo.php";
}

/**
 * 
 */
class loginControlador extends loginModelo
{
	public function iniciar_sesion_controlador()
	{
		$usuario = mainModel::limpiar_cadena($_POST['usuario']);
		$clave = mainModel::limpiar_cadena($_POST['clave']);
		$clave = mainModel::encryption($clave);
		$accion="";

		$datosLogin = [
			"usuario" => $usuario,
			"clave" => $clave
		];

		$datosCuenta = loginModelo::iniciar_sesion_modelo($datosLogin);

		if ($datosCuenta->rowCount() == 1) {
			$row = $datosCuenta->fetch();

			$fechaActual = date("Y-m-d");
			$yearActual = date("Y");
			$horaActual = date("H:i") . ":00";

			$datosBitacora = [

				"fechahora" => $fechaActual,
				"accion" => "Inicio de sesión",
				"modulo" => "LOGIN",
				"idusuario" => $row['idusuario']

			];
			$insertarBitacora = mainModel::guardar_bitacora($datosBitacora);
			if ($insertarBitacora->rowCount() >= 1) {
				session_start(['name' => 'SBP']);
				$_SESSION['idusuario_sbp'] = $row['idusuario'];
				$_SESSION['usuario_sbp'] = $row['nombre'];
				$_SESSION['tipo_sbp'] = $row['tipo'];
				$_SESSION['token_sbp'] = md5(uniqid(mt_rand(), true));


				if ($row['tipo'] == "admin") {
					$url = "inicio";
					$accion= '<script> location.href="' . SERVERURL.''.$url . '"</script>';
				} else {
					$url = "inicio";
					$accion='<script> location.href="' . SERVERURL.''.$url . '"</script>';
				}
			} else {
				$alerta = [
					"Alerta" => "simple",
					"Titulo" => "Ocurrio un Error Inesperado",
					"Texto" => "No se ha podido iniciar la sesión por problemas técnicos, por favor intente nuevamente",
					"Tipo" => "error"
				];
				$accion=mainModel::sweet_alert($alerta);
			}
		} else {
			$alerta = [
				"Alerta" => "simple",
				"Titulo" => "Ocurrio un Error Inesperado",
				"Texto" => "El nombre de usuario y contraseña no son correctos o su cuenta puede estar deshabilitada",
				"Tipo" => "error"
			];
			$accion=mainModel::sweet_alert($alerta);
		}
		return $accion;
	}


	public function cerrar_sesion_controlador()
	{
		session_start(['name' => 'SBP']);
		$token = mainModel::decryption($_POST['Token']);
		$datos = [
			"usuario" => $_SESSION['usuario_sbp'],
			"Token_S" => $_SESSION['token_sbp'],
			"Token" => $token
			
			
		];
		echo loginModelo::cerrar_sesion_modelo($datos);
	}



	public function forzar_cierre_sesion_controlador()
	{
		session_destroy();
		return header("Location: " . SERVERURL . "login/");
	}
}
