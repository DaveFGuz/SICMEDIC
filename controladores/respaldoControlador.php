<?php
if ($peticionAjax) {
	require_once "../modelos/proveedorModelo.php";
} else {
	require_once "./modelos/proveedorModelo.php";
}
class respaldoControlador extends proveedorModelo
{

    public function eliminar_respaldo_controlador(){
        $archivo = mainModel::limpiar_cadena($_POST['archivo']);
		$respaldo = ("../myphp-backup-files/$archivo");

		if (!unlink($respaldo)) {


			$alerta = [
				"Alerta" => "recargar",
				"Titulo" => "Ocurrio un error inesperado",
				"Texto" => "No se pudo encontrar el archivo",
				"Tipo" => "error"
			];
		} else {

			$alerta = [
				"Alerta" => "recargar",
				"Titulo" => "Exito",
				"Texto" => "Archivo eliminado",
				"Tipo" => "success"

			];
        }

		return  mainModel::sweet_alert($alerta);
	
    }

    //Controlador para paginar respaldo
    public function paginador_respaldo_controlador()
    {
        echo '<table id="dynamic-table" class="table table-striped table-bordered table-hover">

                                                <thead>
                                                    <tr role="row" style="background: #ffff">
                                                        <th style="width: 70%"><strong>ARCHIVO</strong></th>
                                                        <th style="width: 17%"><strong>CREADO </strong></th>
                                                        <th style="width: 10%"><strong>ACCION</strong></th>

                                                    </tr>
                                                </thead>

                                                <tbody>';

                                                
        $directorio = opendir("./myphp-backup-files"); //ruta actual
        while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
        {
            if (is_dir($archivo)) //verificamos si es o no un directorio
            {
                // echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
            } else {

                echo '<tr role="row" class="odd active">


                      <td>
                        <a href="myphp-backup-files/'.$archivo.'" class="info tooltip-info " data-placement="right"><i class="ace-icon fa fa-folder-open-o bigger-140"></i>' . $archivo . '</a>
                      </td>
                      ';
                      echo'
                       <td>';
                echo date("d/m/Y h:i:s a", filemtime("./myphp-backup-files" . "/" . $archivo));
                echo '</td>

                <td>
                                                            <div class="hidden-sm hidden-xs action-buttons">




                                                                <a class="green tooltip-info" href="#" data-rel="tooltip" title="restaurar" onclick=restore("' . $archivo . '")>
                                                                    <i class="ace-icon fa fa-undo bigger-180"></i>
                                                                </a>

                                                                <a class="red tooltip-info" href="#" data-rel="tooltip" title="Eliminar " onclick=eliminar("' . $archivo . '")>
                                                                    <i class="ace-icon fa fa-trash bigger-180"></i>
                                                                </a>
                                                            </div>

           
                                                        </td>

                                                    </tr>';
            }
        }

        echo '           </tbody>
                                            </table>
                                            
                                           ';
    }
}
