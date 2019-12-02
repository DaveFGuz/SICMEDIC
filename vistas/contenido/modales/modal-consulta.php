<div id="modal-table" class="modal fade " tabindex="-1">
    <div class="modal-dialog" style="width: 70%">
        <div class="modal-content">
            <div class="modal-header no-padding">
                <div class="table-header" style="background: #2aa5a5">
                    <button type="button" class="close" aria-hidden="true">
                        <span class="white">&times;</span>
                    </button>
                    <strong><i class="fa fa-heartbeat"></i> Nueva Consulta</strong>
                </div>
            </div>

            <div class="modal-body no-padding" style="background: #fcf8e3">


                <form>


                    <div class="col-sm-12" style="margin-top: 10px">



                        <div class="tab-content" style="overflow-y: scroll;height: 500px; ">
                            <div id="home" class="tab-pane fade in active">

                                <div class="row">

                                    <div class="col-xs-6">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title smaller"><i class="fa fa-heartbeat"></i> Mediciones/Signos Vitales </h4>


                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <dl id="dt-list-1">

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <dt style="margin-left: 45px;"> Presion Arterial</dt>
                                                                <div class="col-lg-5">

                                                                    <input class="form-control " type="text" id="presion1_consulta" />

                                                                </div>

                                                                <div class="col-lg-2" style="margin-top: 2px;font-size: 20px;">

                                                                    /

                                                                </div>
                                                                <div class="col-lg-5">

                                                                    <input class="form-control " type="text" id="presion2_consulta" />

                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6">
                                                                <dt>Frecuencia Cardiaca</dt>
                                                                <input class="form-control input-mask-phone" type="text" id="frecuencia_consulta" />
                                                            </div>

                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <dt>Temperatura</dt>
                                                                <input class="form-control input-mask-temo" type="text" id="temperatura_consulta" />
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <dt>Peso</dt>
                                                                <input class="form-control input-mask-peso" type="text" id="peso_consulta" />
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <dt>Estatura</dt>
                                                                <input class="form-control input-mask-esta" type="text" id="estatura_consulta" />
                                                            </div>
                                                        </div>



                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title smaller"><i class="red fa fa-question-circle"></i> Motivo de consulta </h4>


                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <dl id="dt-list-1">
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <textarea style="width: 100%;height: 190px;" id="motivo_consulta">

                                                                </textarea>
                                                            </div>

                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title smaller"><i class="red fa fa-heartbeat"></i> Antecedentes </h4>

                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <dl id="dt-list-1">
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <textarea style="width: 100%;height: 190px;" id="antecedentes_consulta">

                                                                                            </textarea>
                                                            </div>

                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title smaller"><i class="fa fa-edit purple"></i> Diagnóstico </h4>


                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <dl id="dt-list-1">

                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <textarea style="width: 100%;height: 190px;" id="diagnostico_consulta">

                                                                </textarea>
                                                            </div>

                                                        </div>

                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12">
                                        <div class="widget-box">
                                            <div class="widget-header widget-header-flat">
                                                <h4 class="widget-title smaller"><i class="red fa fa-heartbeat"></i> Observación</h4>


                                            </div>

                                            <div class="widget-body">
                                                <div class="widget-main">


                                                    <dl id="dt-list-1">
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <textarea style="width: 100%;height: 190px;" id="observacion_consulta">

                                                                </textarea>

                                                            </div>

                                                        </div>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller"><i class="fa fa-file"></i> Ordenes de Examen </h4>


                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">

                                                        <dl id="dt-list-1">

                                                            <div class="row">
                                                                <div class="col-lg-12">

                                                                    <textarea style="width: 100%;height: 190px;" id="ordenes_consulta">

                                                                    </textarea>

                                                                </div>

                                                            </div>

                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12">
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller"><i class="fa fa-upload"></i> Adjuntar Examenes </h4>


                                                </div>

                                                <div class="widget-body" style="overflow-y:auto;height: 237px">
                                                    <div class="widget-main">

                                                        <dl id="dt-list-1">

                                                            <div class="form-group">
                                                                <div class="col-xs-12">
                                                                    <input multiple="" type="file" id="id-input-file-3" />
                                                                </div>
                                                            </div>

                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-xs-12">
                                            <div class="widget-box">
                                                <div class="widget-header widget-header-flat">
                                                    <h4 class="widget-title smaller"><i class="fa fa-medkit"></i> Receta de medicamentos

                                                    </h4>


                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">


                                                        <dl id="dt-list-1">
                                                            <div class="row tab-content">



                                                                <div class="col-lg-12">
                                                                    <label for="state"><i class="fa fa-medkit"></i> Medicamentos </label>
                                                                    <br>
                                                                    <select id="medicamento" onchange="agregar()" class="select2">
                                                                        <option value="AL" title="50 unidades disponibles">Paracetamol Capsula 250mg</option>
                                                                        <option value="AL" title="50 unidades disponibles">Paracetamol Comprimidos 160mg</option>
                                                                        <option value="AL" title="50 unidades disponibles">Paracetamol Comprimidos 250mg</option>
                                                                        <option value="AL" title="50 unidades disponibles">Paracetamol Comprimidos 500mg</option>
                                                                        <option value="AL" title="50 unidades disponibles"></option>Paracetamol Suspensión de 120 mg/5 ml.

                                                                        </option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="row " style="padding: 15px">

                                                                <table id="tablamedicamento" style="width: 100%;" class="table table-striped table-bordered table-hover   dataTable no-footer" role="grid">

                                                                    <thead>
                                                                        <tr role="row" style="background: #ffff">
                                                                            <th style="width: 40%"><strong>Nombre de medicamento</strong></th>
                                                                            <th style="width: 10%"><strong>Cantidad </strong></th>
                                                                            <td style="width: 10%"><strong>Dosis </strong></td>
                                                                            <td style="width: 15%"><strong>Frecuencia </strong></td>
                                                                            <td style="width: 20%"><strong>Duración </strong></td>
                                                                            <td style="width: 5%"><strong></strong></td>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>

                                                                    </tbody>
                                                                </table>
                                                            </div>



                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>














                                    <p style="visibility: hidden">Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                    <p style="visibility: hidden">Raw denim you probably haven't heard of them jean shorts Austin.</p>

                                </div>

                                <div id="messages" class="tab-pane fade">

                                    <div class="form-group col-lg-3">

                                        <label for="telefono"><i class="ace-icon fa fa-phone"></i> Teléfono 1</label>



                                        <input class="form-control input-mask-phone" type="text" id="telefono" />



                                    </div>

                                    <div class="form-group col-lg-3">

                                        <label for="telefono"><i class="ace-icon fa fa-phone"></i> Teléfono 2</label>



                                        <input class="form-control input-mask-phone" type="text" id="telefono" />



                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Correo electrónico(opcional)</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="" />
                                    </div>
                                    <div class="form-group col-lg-12">

                                        <label for="inputName"><i class="ace-icon fa fa-home"></i> Dirección</label>
                                        <input type="text" class="form-control" id="inputName" placeholder="" />
                                    </div>

                                    <p style="visibility: hidden">Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                    <p style="visibility: hidden">Raw denim you probably haven't heard of them jean shorts Austin.</p>

                                </div>


                            </div>

                        </div>



                </form>


            </div>

            <!-- /.PIE DE VENTANA EMERGENTE -->

            <div class="modal-footer no-margin-top ">


                <button class="btn btn-primary btn-white btn-round pull-left" style="margin-top: 10px" name="botonconsulta">

                    <img src="<?php echo SERVERURL; ?>vistas/btn-agregar.png" style="width: 30px;height: 30px;"> Guardar

                </button>


                <button class=" btn btn-danger btn-white btn-round pull-left" style="margin-top: 10px">

                    <img src="<?php echo SERVERURL; ?>vistas/btn-cancelar.png" style="width: 30px;height: 30px;"> Cancelar

                </button>



            </div>

        </div>
        <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

    </div>
</div>


<script>
    function readFile(input, cantidad) {
        for (var i = 0; i < cantidad; i++) {


            if (input.files && input.files[i]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var filePreview = document.createElement('img');
                    filePreview.id = 'file-preview';
                    filePreview.src = e.target.result;


                }
                reader.readAsDataURL(input.files[i]);
            }
        }

    }

    var fileUpload = document.getElementById('');

    fileUpload.onchange = function(e) {

        readFile(e.srcElement, document.getElementById("id-input-file-3").files.length);


    }
</script>