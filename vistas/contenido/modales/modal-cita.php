<div id="modal-cita" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										<span class="white">&times;</span>
									</button>
                            <strong><i class="fa fa-calendar-check-o"></i> Nueva Cita</strong>
                        </div>
                    </div>
                    <!-- CONTENIDO DE MODAL -->
                    <div class="modal-body no-padding" style="background: #fcf8e3">

                        <!--FORMULARIO PARA REGISTRO DE PACIENTE-->
                        <form>


                            <div class="col-sm-12" style="margin-top: 10px">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="myTab">
                                            

                                            
                                        </ul>
                                        
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">

                                                <div class="form-group col-lg-12"  >
                                                    <label for="state"><i class="fa fa-group"></i> Paciente</label>
                                                <br>
                                                        <select multiple="" id="busquedapaciente" name="state" disabled  class="select2" style="width: 500px" data-placeholder="buscar paciente">
                                                            <option value="AL">FG001017 DAVID FLORES GUZMAN</option>
                                                            <option value="AL">JP022017 EMERSON JOSUE PALACIOS</option>
                                                            <option value="AL">RN032017 OSCAR RENE MUÑOZ</option>
                                                            <option value="AL">MB042017 MIGUEL ANGEL BELTRAN BONILLA</option>
                                                        </select>
            
                                                        
                                                    </div>
                                                        <div class="form-group col-lg-12" >
                                                            <label for="inputName" ><i class="fa fa-edit"></i> Nombre </label>
                                                            <input type="text" class="form-control" id="pacnombre" disabled placeholder="" />
                                                        </div>
                                                    
                                                        

                                                        

                                                        <div class="form-group col-lg-6">
                                                                <label for="inputName"><i class="fa fa-calendar bigger-110"></i> Fecha</label>
                                                                <input class="form-control date-picker input-mask-date" id="fecha" type="text" data-date-format="dd/mm/yyyy">  
                                                        </div>

                                                        
                                                        <div class="form-group col-lg-6">
                                                                <label for="inputName"><i class="fa fa-clock-o bigger-110"></i> Hora</label>
                                                                <input id="hora" type="text" class="form-control" />
															    
                                                            </div>


                                                        

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
                                </div>



                        </form>


                    </div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top " >


                        <button class="btn btn-primary btn-white btn-round pull-left" style="margin-top: 10px" data-dismiss="modal">

								<img src="btn-agregar.png" style="width: 30px;height: 30px;"> <strong>Guardar</strong>

								</button>


                        <button class=" btn btn-danger btn-white btn-round pull-left" onclick="cancelar()" style="margin-top: 10px">

								<img src="btn-cancelar.png" style="width: 30px;height: 30px;"> <strong>Cancelar</strong>

								</button>



                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>





        <div id="modal-pregunta" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header" style="background: #2aa5a5">
                            <button type="button" class="close"  aria-hidden="true">
										<span class="white">&times;</span>
									</button>
                            <strong><i class="fa fa-calendar-check-o"></i> Nueva Cita</strong>
                        </div>
                    </div>
                    <!-- CONTENIDO DE MODAL -->
                    <div class="modal-body no-padding" style="background: #fcf8e3">

                        <!--FORMULARIO PARA REGISTRO DE PACIENTE-->
                        <form>


                            <div class="col-sm-12" style="margin-top: 10px">
                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="myTab">
                                            

                                            
                                        </ul>
                                        
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">

                                                
                                                        <div class="form-group col-lg-12">
                                                            <label for="inputName" ><i class="fa fa-edit"></i> Es Paciente Nuevo?</label>
                                                            si
                                                            <input type="checkbox" class="form-control" id="si" onchange="escheckeado()" placeholder="" />
                                                        </div>

                                                        <div class="form-group col-lg-12">
                                                            <label for="inputName" ><i class="fa fa-edit"></i> </label>
                                                            no
                                                            <input type="checkbox" class="form-control" id="no" onchange="escheckeado()" placeholder="" />
                                                        </div>
                                                    
                                                    
                                                        

                                                        

                                                        


                                                        

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
                                </div>



                        </form>


                    </div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top " >


                       


                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
        </div>