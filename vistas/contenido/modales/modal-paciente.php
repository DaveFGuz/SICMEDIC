 <!--Modal para registrar informacion de pacientes nuevo -->

 <div id="modal-table" class="modal fade" tabindex="-1">
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
                        
                        <form class="FormularioAjax" data-form="save" action="" method="POST"  >

                            <div class="col-sm-12" style="margin-top: 10px">



                                <div class="" style="height:500px;overflow-y: scroll;">
                                    <div id="home" class="tab-pane fade in active">

                                        
                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Datos Generales<a class="pull-right" style="font-size: 12px">(*)Datos Obligatorios</a>
                                                    </font></font></h4>
        
                                            
        
                                            
                                        </div>

                                        <div class="tab-content" style="height: 400px;">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>
                                                    G�nero</label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Masculino</option>
                                                    <option value="AK">Femenino</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha
                                                    de Nacimiento <a>*</a></label>
                                                <input class="form-control date-picker input-mask-date"
                                                    id="form-field-mask-1" type="text" data-date-format="dd-mm-yyyy">
                                            </div>

                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>

                                            <div class="form-group col-lg-6">
                                                    <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Email </label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
                                                </div>


                                                <div class="form-group col-lg-6">

                                                        <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono
                                                             <a> *</a></label>
        
        
        
                                                        <input class="form-control input-mask-phone" type="text"
                                                            id="telefono" />
        
    
                                                    </div>

                                                    <div class="form-group col-lg-6">

                                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono m�vil
                                                                 <a> </a></label>
            
            
            
                                                            <input class="form-control input-mask-phone" type="text"
                                                                id="telefono" />
            
            
            
                                                        </div>

                                                        <div class="form-group col-lg-12">

                                                                <label for="inputName"><i class="ace-icon fa fa-home"></i>
                                                                    Direcci�n</label>
                                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                                            </div>


                                        </div>
                                        <br>
                                        
                                        

                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                     Datos de Encargado
                                                    </font></font></h4>
                                        </div>


                                        <div class="tab-content" style="height: 250px">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>  Es </label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Conocido/a</option>
                                                    <option value="AK">Padre</option>
                                                    <option value="AK">Madre</option>
                                                    <option value="AK">Tio/a</option>
                                                    <option value="AK">Primo/a</option>
                                                </select>
                                            </div>





                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>
                                            <div class="form-group col-lg-6">


                                                <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono <a>*</a>
                                                </label>



                                                <input class="form-control input-mask-phone" type="text"
                                                    id="telefono" />



                                            </div>
                                            <div class="form-group col-lg-6">


                                                    <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono movil 
                                                    </label>
    
    
    
                                                    <input class="form-control input-mask-phone" type="text"
                                                        id="telefono" />
    
    
    
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



         




        <!--Modal para modificar informacion de pacientes registrados -->

        <div id="modal-modificarpaciente" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong><i class="fa fa-user"></i> Modificar Paciente </strong>
                        </div>
                    </div>
                
                    <div class="modal-body no-padding" style="background: #fcf8e3">
                        
                        <form>

                            <div class="col-sm-12" style="margin-top: 10px">



                                <div class="" style="height:500px;overflow-y: scroll;">
                                    <div id="home" class="tab-pane fade in active">

                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Datos Generales<a class="pull-right" style="12px">(*)Datos Obligatorios</a>
                                                    </font></font></h4>
                                        </div>

                                        <div class="tab-content" style="height: 400px;">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>
                                                    G�nero</label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Masculino</option>
                                                    <option value="AK">Femenino</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha
                                                    de Nacimiento <a>*</a></label>
                                                <input class="form-control date-picker input-mask-date"
                                                    id="form-field-mask-1" type="text" data-date-format="dd-mm-yyyy">
                                            </div>

                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>

                                            <div class="form-group col-lg-6">
                                                    <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Email </label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
                                                </div>


                                                <div class="form-group col-lg-6">

                                                        <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono
                                                             <a> *</a></label>
        
        
        
                                                        <input class="form-control input-mask-phone" type="text"
                                                            id="telefono" />
        
    
                                                    </div>

                                                    <div class="form-group col-lg-6">

                                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono m�vil
                                                                 <a> </a></label>
            
            
            
                                                            <input class="form-control input-mask-phone" type="text"
                                                                id="telefono" />
            
            
            
                                                        </div>

                                                        <div class="form-group col-lg-12">

                                                                <label for="inputName"><i class="ace-icon fa fa-home"></i>
                                                                    Direcci�n</label>
                                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                                            </div>


                                        </div>
                                        <br>
                                        
                                        

                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Datos de Encargado
                                                    </font></font></h4>
                                        </div>


                                        <div class="tab-content" style="height: 250px">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>  Es </label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Conocido/a</option>
                                                    <option value="AK">Padre</option>
                                                    <option value="AK">Madre</option>
                                                    <option value="AK">Tio/a</option>
                                                    <option value="AK">Primo/a</option>
                                                </select>
                                            </div>





                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>
                                            <div class="form-group col-lg-6">


                                                <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono <a>*</a>
                                                </label>



                                                <input class="form-control input-mask-phone" type="text"
                                                    id="telefono" />



                                            </div>
                                            <div class="form-group col-lg-6">


                                                    <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono movil 
                                                    </label>
    
    
    
                                                    <input class="form-control input-mask-phone" type="text"
                                                        id="telefono" />
    
    
    
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

    


        <!--Modal para mostrar informacion de pacientes registrados -->

        <div id="modal-infopaciente" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            <strong><i class="fa fa-user"></i> Informacion de Paciente </strong>
                        </div>
                    </div>
                
                    <div class="modal-body no-padding" style="background: #fcf8e3">
                        
                        <form>

                            <div class="col-sm-12" style="margin-top: 10px">



                                <div class="" style="height:500px;overflow-y: scroll;">
                                    <div id="home" class="tab-pane fade in active">

                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Datos Generales
                                                    </font></font></h4>
                                        </div>


                                        <div class="tab-content" style="height: 400px;">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>
                                                    G�nero</label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Masculino</option>
                                                    <option value="AK">Femenino</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha
                                                    de Nacimiento <a>*</a></label>
                                                <input class="form-control date-picker input-mask-date"
                                                    id="form-field-mask-1" type="text" data-date-format="dd-mm-yyyy">
                                            </div>

                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>

                                            <div class="form-group col-lg-6">
                                                    <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Email </label>
                                                    <input type="text" class="form-control" id="inputName" placeholder="" />
                                                </div>


                                                <div class="form-group col-lg-6">

                                                        <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono
                                                             <a> *</a></label>
        
        
        
                                                        <input class="form-control input-mask-phone" type="text"
                                                            id="telefono" />
        
    
                                                    </div>

                                                    <div class="form-group col-lg-6">

                                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono m�vil
                                                                 <a> </a></label>
            
            
            
                                                            <input class="form-control input-mask-phone" type="text"
                                                                id="telefono" />
            
            
            
                                                        </div>

                                                        <div class="form-group col-lg-12">

                                                                <label for="inputName"><i class="ace-icon fa fa-home"></i>
                                                                    Direcci�n</label>
                                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                                            </div>


                                        </div>
                                        <br>
                                        
                                        

                                        <div class="widget-header widget-header-small">
                                            <h4 class="widget-title blue ">
                                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Datos de Encargado
                                                    </font></font></h4>
                                        </div>


                                        <div class="tab-content" style="height: 250px">
                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Nombre(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputName">Apellido(s) <a>*</a></label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />
                                            </div>

                                            <div class="form-group col-lg-6">
                                                <label for="inputMessage"><i class="fa fa-male bigger-110"></i>  Es </label>
                                                <select class="form-control " id="form-field-select-1">
                                                    <option value="AL">Conocido/a</option>
                                                    <option value="AK">Padre</option>
                                                    <option value="AK">Madre</option>
                                                    <option value="AK">Tio/a</option>
                                                    <option value="AK">Primo/a</option>
                                                </select>
                                            </div>





                                            <div class="form-group col-lg-6">

                                                <label for="inputName"><i class="fa fa-credit-card bigger-110"></i>
                                                    N�mero de Identidad Personal</label>
                                                <input type="text" class="form-control" id="inputName" placeholder="" />

                                            </div>
                                            <div class="form-group col-lg-6">


                                                <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono <a>*</a>
                                                </label>



                                                <input class="form-control input-mask-phone" type="text"
                                                    id="telefono" />



                                            </div>
                                            <div class="form-group col-lg-6">


                                                    <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono movil 
                                                    </label>
    
    
    
                                                    <input class="form-control input-mask-phone" type="text"
                                                        id="telefono" />
    
    
    
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
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="btn-impresora.png" style="width: 30px;height: 30px"> <strong>Imprimir</strong>

                        </button>


                        <button class=" btn btn-danger btn-white btn-round pull-left"
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Salir
                            </strong>
                        </button>



                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>
