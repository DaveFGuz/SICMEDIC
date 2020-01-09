        <!--INICIO VENTANA EMERGENTE DE FORMULARIO PARA REGISTRO DE PACIENTES -->

        <div id="modal-rgrespaldo" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="width: 48%">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong>Nuevo Respaldo</strong>
                        </div>
                    </div>
                    <!-- CONTENIDO DE MODAL -->
                    <div class="modal-body no-padding" style="background: #fcf8e3">

                        <!--FORMULARIO PARA REGISTRO DE PACIENTE-->
                        <form id="formres" name="formres" data-form="save" action="<?php echo SERVERURL; ?>/ajax/respaldoAjax.php" method="POST">


                            <div class="col-sm-12" style="margin-top: 10px">
                                


                                    <div class="tab-content" style="height: 100px">
                                        <div id="home" class="tab-pane fade in active">

                                            <div class="form-group col-lg-6">
                                                <label for="nombre">Nombre de Archivo</label>
                                                <input type="text" class="form-control" id="nombre" placeholder="" value="<?php echo  "respaldo-sicmedic-".date("dmY-his-a", time()).".sql"; ?>" disabled="true"/>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="fecha">Fecha de Creacion </label>
                                                <input type="text" class="form-control" id="fecha" placeholder="" value="<?php echo  date('d/m/Y h:i a'); ?>" disabled="true"/>
                                            </div>


                                        </div>


                                    </div>
                                
                            </div>



                        </form>


                    </div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top ">


                        <button class="btn btn-primary btn-white btn-round pull-left " style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="<?php echo SERVERURL; ?>vistas/btn-agregar.png" style="width: 30px;height: 30px"> <strong>Crear</strong>

                        </button>


                        <button class=" btn btn-danger btn-white btn-round pull-left" style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="<?php echo SERVERURL; ?>vistas/btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Cancelar
                            </strong>
                        </button>



                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>

        <!--FIN VENTANA EMERGENTE DE FORMULARIO PARA REGISTRO DE PACIENTES -->