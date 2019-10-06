<!--INICIO VENTANA EMERGENTE DE FORMULARIO PARA REGISTRO DE PACIENTES -->

<div id="modal-table" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong><i class="fa fa-user"></i> Nuevo Medicamento</strong>
                        </div>
                    </div>
                
                    <div class="modal-body no-padding" style="background: #fcf8e3">
                        
                        <form>

                            <div class="col-sm-12" style="margin-top: 10px">



                                <div class="tab-content" style="height:450px;">
                                    <div id="home" class="tab-pane fade in active">

                                        <strong>Datos<a class="pull-right" style="font-size: 10px;margin-left: 15px">(*) Campos Obligatorios</a>  </strong>


                                        <div class="tab-content" style="height: 400px;">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Cantidad <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage">
                                                    Presentacion <a>*</a></label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Capsula</option>
                                                    <option value="AK">Pastilla</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group col-lg-4">

                                                <label for="inputName">
                                                    Contenido <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>
                                            <div class="form-group col-lg-2 " style="margin-top: 6px">
                                                    <label for="inputMessage"></i>
                                                        </label>
                                                    <select class="form-control " id="form-field-select-1">
                                                        <option value="AL">mg</option>
                                                        <option value="AK">ml</option>
                                                    </select>
                                                </div>

                                            <div class="form-group col-lg-6">
                                                    <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha de Ingreso
                                             <a>*</a></label>
                                                    <input class="form-control date-picker input-mask-date"
                                                        id="form-field-mask-1" type="text" disabled="true" data-date-format="dd-mm-yyyy">
                                                </div>
                                                <div class="form-group col-lg-6">
                                                        <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha de
                                                            de Vencimiento <a>*</a></label>
                                                        <input class="form-control date-picker input-mask-date"
                                                            id="form-field-mask-1" type="text" data-date-format="dd-mm-yyyy">
                                                    </div>

                                                   <div class="form-group col-lg-6">

                                                <label for="inputName">
                                                    Stock Minimo <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>

                                           <div class="form-group col-lg-6">

                                                <label for="inputName">
                                                    Ubicación <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>

                                            <div class="form-group col-lg-6 " style="margin-top: 6px">
                                                    <label for="inputMessage"></i>Administración
                                                        </label>
                                                    <select class="form-control " id="form-field-select-1">
    
                                                        <option value="AK">Orales</option>
                                                        <option value="AL">Intravenosa</option>
                                                        <option value="AL">Topicos</option>
                                                        
                                                    </select>
                                                </div>


                                            


                                        </div>
                                        <br>

                                        
                                        
                                      

                                        


                                     






                                        </div>




                                    </div>

                                </div>



                        </form>


                    </div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top ">


                        <button class="btn btn-primary btn-white btn-round pull-left "
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="btn-agregar.png" style="width: 30px;height: 30px"> <strong>Guardar</strong>

                        </button>


                        <button class=" btn btn-danger btn-white btn-round pull-left"
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Cancelar
                            </strong>
                        </button>



                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>



        <!--INICIO VENTANA MODAL PARA ACERCA DE -->


        <!--INICIO VENTANA EMERGENTE DE FORMULARIO PARA REGISTRO DE PACIENTES -->

        <div id="modal-modificarmedic" class="modal fade" tabindex="-1">
                <div class="modal-dialog" style="width: 50%">
                    <div class="modal-content">
                        <div class="modal-header no-padding">
                            <div class="table-header" style="background: #2aa5a5">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <span class="white">&times;</span>
                                </button>
                                <strong><i class="fa fa-user"></i> Modificar Medicamento</strong>
                            </div>
                        </div>
                    
                        <div class="modal-body no-padding" style="background: #fcf8e3">
                            
                            <form>
    
                                <div class="col-sm-12" style="margin-top: 10px">
    
    
    
                                    <div class="tab-content" style="height:450px;">
                                        <div id="home" class="tab-pane fade in active">
    
                                            <strong>Datos<a class="pull-right" style="font-size: 10px;margin-left: 15px">(*) Campos Obligatorios</a>  </strong>
    
    
                                            <div class="tab-content" style="height: 400px;">
                                                <div class="form-group col-lg-6">
                                                    <label for="inputName">Nombre <a>*</a></label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
                                                </div>
    
                                                <div class="form-group col-lg-6">
                                                    <label for="inputName">Cantidad <a>*</a></label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
                                                </div>
    
                                                <div class="form-group col-lg-6">
                                                    <label for="inputMessage">
                                                        Presentacion <a>*</a></label>
                                                    <select class="form-control " id="form-field-select-1">
                                                        <option value="AL">Capsula</option>
                                                        <option value="AK">Pastilla</option>
                                                    </select>
                                                </div>
    
                                                
                                                <div class="form-group col-lg-4">
    
                                                    <label for="inputName">
                                                        Dosis <a>*</a></label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
    
                                                </div>
                                                <div class="form-group col-lg-2 " style="margin-top: 6px">
                                                        <label for="inputMessage"></i>
                                                            </label>
                                                        <select class="form-control " id="form-field-select-1">
                                                            <option value="AL">mg</option>
                                                            <option value="AK">ml</option>
                                                        </select>
                                                    </div>
    
                                                <div class="form-group col-lg-6">
                                                        <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha de Ingreso
                                                 <a>*</a></label>
                                                        <input class="form-control date-picker input-mask-date"
                                                            id="form-field-mask-1" type="text" disabled="true" data-date-format="dd-mm-yyyy">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                            <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha de
                                                                de Vencimiento <a>*</a></label>
                                                            <input class="form-control date-picker input-mask-date"
                                                                id="form-field-mask-1" type="text" data-date-format="dd-mm-yyyy">
                                                        </div>
    
                                                       <div class="form-group col-lg-6">
    
                                                    <label for="inputName">
                                                        Stock Minimo <a>*</a></label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
    
                                                </div>
    
                                               <div class="form-group col-lg-6">
    
                                                    <label for="inputName">
                                                        Ubicación <a>*</a></label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
    
                                                </div>

                                                <div class="form-group col-lg-6 " style="margin-top: 6px">
                                                        <label for="inputMessage"></i>Administración
                                                            </label>
                                                        <select class="form-control " id="form-field-select-1">
        
                                                            <option value="AK">Orales</option>
                                                            <option value="AL">Intravenosa</option>
                                                            <option value="AL">Topicos</option>
                                                            
                                                        </select>
                                                    </div>
    
    
                                            </div>
                                            <br>
    
                                            
                                            
                                            <br>
    
                                            
    
    
                                         
    
    
    
    
    
    
                                            </div>
    
    
    
    
                                        </div>
    
                                    </div>
    
    
    
                            </form>
    
    
                        </div>
    
                        <!-- /.PIE DE VENTANA EMERGENTE -->
    
                        <div class="modal-footer no-margin-top ">
    
    
                            <button class="btn btn-primary btn-white btn-round pull-left "
                                style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">
    
                                <img src="btn-agregar.png" style="width: 30px;height: 30px"> <strong>Guardar</strong>
    
                            </button>
    
    
                            <button class=" btn btn-danger btn-white btn-round pull-left"
                                style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">
    
                                <img src="btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Cancelar
                                </strong>
                            </button>
    
    
    
                        </div>
    
                    </div>
                    <!-- /.CONTENIDO DE VENTANA EMERGENTE -->
    
                </div>
            </div>
    
    
    
            <!--INICIO VENTANA MODAL PARA ACERCA DE -->

        <div id="modal-acerca" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong>Acerca de</strong>
                        </div>
                    </div>
                    <!-- CONTENIDO DE MODAL -->
                    <div class="modal-body no-padding" style="background: #fcf8e3">


                        <!--FORMULARIO PARA REGISTRO DE PACIENTE-->
                        <form>


                            <div class="col-sm-12" style="margin-top: 10px">



                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active">

                                        <strong>SICMEDIC</strong> surge al conocer la situación la necesidad del
                                        consultorio médica de la Doctor
                                        Ana Luisa Velázquez, puesto que ellos no contaban con un sistema informático
                                        para la sistematización de sus
                                        pacientes.
                                        <br>
                                        <br>
                                        Para la elaboración de dicho sistema se tomaron muy en cuenta las factibilidades
                                        operativas, técnicas y económicas, las cuales
                                        nos brindaron la información necesaria para la realización de SICMEDIC
                                        <br>
                                        <br>
                                        <strong>Desarolladores:</strong>
                                        <br>
                                        David Flores Guzmán
                                        <br>
                                        Oscar René Muñoz Garcia
                                        <br>
                                        Emerson Josué Palacios
                                        <br>
                                        Miguel Ángel Beltran Morán
                                        <br>
                                        <strong class="pull-right"> Diseño de Sistemas II</strong>




                                        <p style="visibility: hidden">Raw denim you probably haven't heard of them jean
                                            shorts Austin.</p>

                                    </div>

                                    <div id="messages" class="tab-pane fade">

                                        <div class="form-group col-lg-3">

                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Teléfono
                                                1</label>



                                            <input class="form-control input-mask-phone" type="text" id="telefono" />



                                        </div>

                                        <div class="form-group col-lg-3">

                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Teléfono
                                                2</label>



                                            <input class="form-control input-mask-phone" type="text" id="telefono" />



                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Correo
                                                electrónico(opcional)</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="" />
                                        </div>
                                        <div class="form-group col-lg-12">

                                            <label for="inputName"><i class="ace-icon fa fa-home"></i> Dirección</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="" />
                                        </div>

                                        <p style="visibility: hidden">Raw denim you probably haven't heard of them jean
                                            shorts Austin.</p>
                                        <p style="visibility: hidden">Raw denim you probably haven't heard of them jean
                                            shorts Austin.</p>

                                    </div>


                                </div>
                            </div>



                        </form>


                    </div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top ">



                        <button class="btn btn-warning btn-white btn-round pull-right " style="margin-top: 10px"
                            data-dismiss="modal">

                            <i class="fa fa-check"></i><strong>Aceptar</strong>

                        </button>







                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>