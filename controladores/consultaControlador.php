<?php
if ($peticionAjax) {
    require_once "../modelos/consultaModelo.php";
} else {
    require_once "./modelos/consultaModelo.php";
}

class consultaControlador extends consultaModelo
{
    //Controlador para agregar administrador



    public function crear_consulta_controlador()
    {
        //Valores de signos vitales
        session_start(['name' => 'SBP']);
        $idpaciente = mainModel::limpiar_cadena($_SESSION['idpaciente']);
        $presion = mainModel::limpiar_cadena($_POST['presion']);
        $frecuencia = mainModel::limpiar_cadena($_POST['frecuencia']);
        $temperatura = mainModel::limpiar_cadena($_POST['temperatura']);
        $peso = mainModel::limpiar_cadena($_POST['peso']);
        $estatura = mainModel::limpiar_cadena($_POST['estatura']);
        //Valores de consultas
        $motivo = mainModel::limpiar_cadena($_POST['motivo']);
        $antecedente = mainModel::limpiar_cadena($_POST['antecedente']);
        $observacion = mainModel::limpiar_cadena($_POST['observacion']);
        $diagnostico = mainModel::limpiar_cadena($_POST['diagnostico']);
        $ordenexamen = mainModel::limpiar_cadena($_POST['ordenexamen']);
        $fecha = date("Y") . "-" . date("m") . "-" . date("d");
        $hora = date("H:i:s");

        $datosCon = [
            "idpaciente" => $idpaciente,
            "motivo" => $motivo,
            "antecedentes" => $antecedente,
            "observacion" => $observacion,
            "diagnostico" => $diagnostico,
            "ordenexamen" => $ordenexamen,
            "fechahora" => $fecha . " " . $hora
        ];

        $insCon = consultaModelo::crear_consulta_modelo($datosCon);

        if ($insCon["afectados"] == 1) {
            $insConx = consultaModelo::insertar_examenes_clinicos_modelo($insCon["ultima"]);

            $datosCon = [
                "idconsulta" => $insCon["ultima"],
                "presion" => $presion,
                "frecuencia" => $frecuencia,
                "temperatura" => $temperatura,
                "peso" => $peso,
                "estatura" => $estatura,

            ];

            $insCony = consultaModelo::insertar_signos_vitales_modelo($datosCon);
        }



        consultaModelo::capturando_receta_modelo($insCon["ultima"]);



        return $insCon["afectados"];
    }

    public function obtener_medicamentos_controlador()
    {

        $conexion = mainModel::conectar();

        $presentacion = $conexion->query("SELECT tipo FROM `tmedicamento` ");

        //echo '<select   name="state"  data-placeholder="buscar paciente">';
        echo '<select class="chosen-select form-control" style="width: 100%" id="medicamento" onchange="agregar()" style="width: 830px;
        height: 30px;" data-placeholder="Eliga Un Medicamento...">';

        echo '<option selected="" value=""></option>';




        foreach ($presentacion as $roww) {

            echo '<optgroup style="background: #d7cccc;" label="' . $roww["tipo"] . '">';

            $datos = $conexion->query("SELECT * FROM tinventario_medicamento  INNER JOIN tmedicamento ON tinventario_medicamento.idmedicamento = tmedicamento.idmedicamento WHERE tmedicamento.tipo='" . $roww['tipo'] . "' ");



            foreach ($datos as $row) {

                $fecha = str_replace("/", "-", $row['fecha_vencim_medicamento']);
                $fecha = date("d/m/Y", strtotime($fecha));

                echo '<option title="' . $row['cantidad_medicamento'] . ' unidades disponibles / vence : ' . $fecha . ' ubicacion : ' . $row['ubicacion'] . '" value="' . $row['idreferencia_medicamento'] . '">' . $row['nombre_medicamento'] . ' ' . $row['presentacion_medicamento'] . ' ' . $row['concentracion_medicamento'] . $row['unidad'] . '</option>';
            }
            echo '</optgroup>';
        }
        echo '</select>';
    }

    public function paginador_historial_consulta_controlador()
    {



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
        

        /**/
        
        $fechas = consultaModelo::obtener_consultas_modelo($fechaini,$fechafin);



        echo '<div id="accordion" class="accordion-style1 panel-group">';
        if ($fechas->rowCount() == 0) {
            echo '<div style="text-align:center"> <label>NO SE ENCONTRARON CONSULTA </label></div>';
            echo '</div>';
        } else {
            $contador = 1;
            foreach ($fechas as $row) {

                echo '<div class="panel panel-default">

            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" aria-expanded="false" data-parent="#accordion" href="#collapseOne' . $contador . '">
                    <i class="bigger-110 ace-icon fa fa-angle-down" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                        &nbsp;' . $row["fecha_hora_consulta"] . '
                    </a>
                </h4>
            </div>

            <div class="panel-collapse collapse in" id="collapseOne' . $contador . '">
                <div class="panel-body">
                    <div id="timeline-1' . $contador . '">
                        <div>
                            <div class="col-xs-12">

                            <div class="clearfix">

                            <div class="row">
                                <button type="button" class="pull-right btn btn-success btn-yellow btn-round" style="margin-right: 23px;margin-bottom: 10px" data-dismiss="alert">
                                    <i class="ace-icon fa fa-print bigger-150"></i>
                                </button>
                                <button type="button" class="pull-right btn btn-success btn-primary btn-round" data-toggle="modal" data-target="#modal-modi" style="margin-right: 10px;margin-bottom: 10px" data-dismiss="alert">
                                    <i class="ace-icon fa fa-edit  bigger-150"></i>
                                </button>
                            </div>





                            <div class="col-lg-6">

                                <p class="tab-content">

                                    <strong>
                                        <i class="ace-icon fa fa-heartbeat"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Razon de consulta:<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                        <textarea style="width:560.3px;height:192.25px" readonly="false">'.$row["razon_consulta"].'</textarea>
                                        </font>
                                    </font>
                                </p>
                                <p class="tab-content" style="height: 252px;">


                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Mediciones / Signos Vitales <br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Presion Arterial:120/90mmg<br><br>Temperatura:39°c<br><br>Frecuencia Cardiaca:100ppm<br><br>Peso:999 <br> <br>estatura:180 cms
                                        </font>
                                    </font>
                                </p>

                                <p class="tab-content">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Antecedentes<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            
                                        <textarea style="width:560.3px;height:192.25px" readonly="false">'.$row["antecedentes_consulta"].'</textarea>
                                            

                                        </font>
                                    </font>
                                </p>

                                <p class="tab-content">
                                    <strong>
                                        <i class="ace-icon fa fa-heartbeat"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Diagnostico<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                        <textarea style="width:560.3px;height:192.25px" readonly="false">'.$row["diagnostico_consutla"].'</textarea>
                                            
                                        </font>
                                    </font>
                                </p>

                               


                            </div>
                            <div class="col-lg-6">

                            <p class="tab-content">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Observaciones<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                        <textarea style="width:560.3px;height:192.25px" readonly="false">'.$row["observaciones_consulta"].'</textarea>
                                            

                                        </font>
                                    </font>
                                </p>

                                <p class="tab-content">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Ordenes de Examen<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                           <textarea style="width:560.3px;height:192.25px" readonly="false">'.$row["ordenexamen_consulta"].'</textarea>
                                        </font>
                                    </font>
                                </p>


                                <div class="tab-content" style="height: 252px;">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;font-size:15px">
                                                Examenes Realizados<br>
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    <div>
                                                        <ul class="ace-thumbnails clearfix">


                                                        <li>
                                                        <a href="http://localhost/SICMEDIC/expediente/OP05/email1.png" data-rel="colorbox" class="cboxElement">
                                                            <img alt="150x150" src="http://localhost/SICMEDIC/expediente/OP05/email1.png" width="150" height="150">
                                                            <div class="text">
                                                                <div class="inner"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Leyenda de muestra al pasar el mouse</font></font></div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                            
                                                            




                                                        </ul>
                                                    </div><!-- PAGE CONTENT ENDS -->
                                                </div>
                                            </font>
                                        </font>
                                </div>

                                <br>

                                <p class="tab-content">
                                    <strong>
                                        <i class="ace-icon fa fa-check"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Receta de Medicamentos<br>
                                            </font>
                                        </font>
                                    </strong>
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA<br>
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA<br>
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA<br>
                                            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA<br>

                                        </font>
                                    </font>
                                </p>












                            </div>




                        </div>
                               


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>';
                $contador = $contador + 1;
            }
        }
        echo  '</div>';
    }

    public function actualizar_ultima_Consulta_controlador()
    {
    }
}
