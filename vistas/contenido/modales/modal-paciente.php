 <!--Modal para registrar informacion de pacientes nuevo -->

 <div id="modal-rgpaciente" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong><i class="fa fa-user"></i> Nuevo Paciente</strong>
                        </div>
                    </div>
                
<div class="modal-body no-padding" style="background: #fcf8e3">

     <form id="formpac" name="formpac" data-form="save" action="<?php echo SERVERURL?>/ajax/pacienteAjax.php"  method="POST" >
     
            <div class="col-sm-12" style="margin-top: 10px">

                <div class="" style="height:500px;overflow-y: scroll;">

                        <div id="home" class="tab-pane">
                        
                        <div class="widget-header widget-header-small">
                                <h4 class="widget-title blue ">
                                Datos Generales
                                    <a class="pull-right" style="font-size: 12px">(*)Datos Obligatorios</a>
                                </h4>  
                        </div>

                    <div class="tab-content" style="height: 400px;">
                            
                            <div class="form-group col-lg-6">
                                <label for="pacnombre">Nombre(s) <a>*</a></label>
                                    <input type="text" class="form-control" name="pacnombre" id="pacnombre"  placeholder="" onkeypress="return soloLetras(event)" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="pacapellido">Apellido(s) <a>*</a></label>
                                    <input type="text" class="form-control" id="pacapellido" placeholder="" onkeypress="return soloLetras(event)" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="pacsexo"><i class="fa fa-male bigger-110"></i>Sexo</label>
                                    <select class="form-control " id="pacsexo">
                                        <option value=""> Seleccionar sexo</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                    </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="pacfecha"><i class="fa fa-calendar bigger-110"></i> Fecha de Nacimiento <a>*</a></label>
                                    <input class="form-control date-picker input-mask-date"
                                    id="pacfecha" type="text"  data-date-format="dd/mm/yyyy">
                            </div>

                            <input type="hidden" id="fechaactual" value="<?php echo date("Y");?>" />

                            <div class="form-group col-lg-6">
                                <label for="pacdui"><i class="fa fa-credit-card bigger-110"></i>DUI</label>
                                    <input type="text" class="form-control" id="pacdui" name="pacdui" placeholder="" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="paccorreo"><i class="ace-icon fa fa-envelope"></i> Email </label>
                                    <input type="text" class="form-control" id="paccorreo" name="paccorreo" placeholder="" />
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label for="pactelefonop"><i class="ace-icon fa fa-phone"></i> Teléfono Primario<a> *</a></label>
                                    <input class="form-control input-mask-phone" type="text" id="pactelefonop"name="pactelefonop" />
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label for="pactelefonos"><i class="ace-icon fa fa-phone"></i> Teléfono Secundario <a> </a></label>
                                    <input class="form-control input-mask-phone" type="text" id="pactelefonos" name="pactelefonos" />
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="pacdireccion"><i class="ace-icon fa fa-home"></i>Direcci�n</label>
                                    <input type="text" class="form-control" id="pacdireccion" name="pacdireccion" placeholder="" />
                            </div>

                    </div>

                        <br>
                                                            
                            <div class="widget-header widget-header-small"> 
                                <h4 class="widget-title blue ">
                                    Datos de Encargado  
                                </h4>
                            </div>


                        <div class="tab-content" style="height: 250px">

                            <div class="form-group col-lg-6">
                                <label for="ennombre">Nombre(s) <a>*</a></label>
                                    <input type="text" class="form-control" id="ennombre" name="ennombre" placeholder="" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="enapellido">Apellido(s) <a>*</a></label>
                                    <input type="text" class="form-control" id="enapellido" name="enapellido" placeholder="" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="enquees"><i class="fa fa-male bigger-110"></i> Relación </label>
                                    <select class="form-control " id="enquees" name="enquees">
                                        <option value="AL">Conocido/a</option>
                                        <option value="AK">Padre</option>
                                        <option value="AK">Madre</option>
                                        <option value="AK">Tio/a</option>
                                        <option value="AK">Primo/a</option>
                                    </select>
                            </div>



                            <div class="form-group col-lg-6">
                                <label for="endui"><i class="fa fa-credit-card bigger-110"></i>DUI</label>
                                    <input type="text" class="form-control" id="endui" name="endui" placeholder="" />
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="entelefonop"><i class="ace-icon fa fa-phone"></i> Teléfono Primario <a>*</a></label>
                                    <input class="form-control input-mask-phone" type="text" id="entelefonop" />
                            </div>
                            
                            <div class="form-group col-lg-6">
                                <label for="entelefonosec"><i class="ace-icon fa fa-phone"></i> Telefono Secundario</label>
                                    <input class="form-control input-mask-phone" type="text" id="entelefonosec" />
                            </div>

                        </div>
                </div>
            </div>  
        </div>
    </form>
</div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top ">


                        <button class="btn btn-primary btn-white btn-round pull-left "
                            style="margin-top: 10px;color:#2aa5a5" id="btnguardar" disabled >

                            <img src="<?php echo SERVERURL."vistas/"?>btn-agregar.png" style="width: 30px;height: 30px"> <strong>Guardar</strong>

                        </button>


                        <button class=" btn btn-danger btn-white btn-round pull-left"
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="<?php echo SERVERURL."vistas/"?>btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Cancelar
                            </strong>
                        </button>


                        <button class="btn btn-warning btn-white btn-round pull-rigth "
                            style="margin-top: 10px;color:#2aa5a5;visibility: hidden" id="alerta"  >

                             <strong>Complete los campos Marcados</strong>

                        </button>


                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
</div>



         




        