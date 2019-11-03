<div class="page-content" style="background: #edf7f7">

<!-- /.Encabezado de pagina-->
                        <div class="page-header col-xs-12">
                                <div class="widget-header widget-header-large">
                                        <h3 class="widget-title grey lighter">
                                            <i class="ace-icon fa fa-calendar-check-o blue"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                CITAS
                                                </font></font></h3>
    
                                        
    
                                        
                                    </div>
                        </div>
                    

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- contenido de la pagina -->
                            
                            <div class="col-sm-12">
                                    <div class="tabbable">
                                        
                                        
                                        <div class="tab-content">
                                            <div id="home" class="tab-pane fade in active">
                                                    
                                                    <div class="row">
                                                            <div class="col-xs-12" >
                            
                                                                <div class="clearfix" style="background: #2aa5a5;color: #FFFF;padding-top: 5px;padding-right: 5px">
                            
                                                                    <!--inicio area de botonos de tabla-->
                            
                                                                    <div class="pull-right tableTools-container" >
                            
                                                                        <div class="dt-buttons btn-overlap btn-group" >
                            
                                                                            <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table" data-original-title="" title="" onclick="pregunta()">
                                                                                <span>
                                                                                        <img src="http://localhost/SICMEDIC/vistas/btn-nuevo.png" style="width: 30px;height: 30px;" >&nbsp;Nuevo</span>
                                                                                </span>
                                                                            </a>
                            
                                                                            <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table" >
                                                                                <span>
                                                                                        <img src="http://localhost/SICMEDIC/vistas/btn-impresora.png" style="width: 30px;height: 30px;" >&nbsp;Imprimir</span>
                                                                                </span>
                                                                            </a>
                                                                            <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table" >
                                                                                <span>
                                                                                        <img src="http://localhost/SICMEDIC/vistas/btn-ayuda.png" style="width: 30px;height: 30px;" >&nbsp;Ayuda</span>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                            
                                                                        <!--fin area de botonos-->
                            
                                                                    </div>
                            
                                                                    <!--fin area de botonos de tabla-->
                            
                                                                </div>
                            
                            
                                                                <!-- div.table-responsive -->
                            
                                                                <!-- div.dataTables_borderWrap -->
                                                                <div>
                                                                    <div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">
                            
                                                                        <!--inicio Filtros de Tabla-->
                            
                                                                        <div class="row tab-content" >
                            
                                                                            
                                                                            
                                                                                    <div class="col-xs-2">
                                                                                <div class="dataTables_length" id="dynamic-table_length">
                                                                                    <label> Mostrar
                                                                                            <select name="dynamic-table_length"  class="form-control form-group">
                                                                                            <option value="10">10</option><option value="25">25</option><option value="50">50</option>
                                                                                            <option value="100">100</option></select> 
                                                                                            registros</label>
                                                                                </div>
                                                                                    </div>
                                                                                    <div class="col-xs-5">
                                                                                <div class="dataTables_length" id="dynamic-table_length">
                                                                                    <label for="inputName"></i>Del</label>
                                                                                    <input class="form-control date-picker input-mask-date" id="form-field-mask-1" type="text" data-date-format="dd/mm/yyyy">
                                                                                    <label for="inputName">Al</label>
                                                                                    <input class="form-control date-picker input-mask-date" id="form-field-mask-1" type="text" data-date-format="dd/mm/yyyy">   
                                                                                </div>
                                                                                </div>
                            
                                                                          
                            
                                                                            
                            
                                                                            
                            
                            
                                                                            <div class="col-xs-5">
                                                                                <div id="dynamic-table_filter" class="dataTables_filter">
                                                                                    <label>Buscar:
                                                                                        <input type="search" class="form-control input-sm" placeholder="" 
                                                                                        aria-controls="dynamic-table"></label></div>
                            
                            
                                                                            </div>
                            
                                                                        </div>
                            
                                                                        <!--Fin Filtros de Tabla-->
                            
                                                                        <div id="tablacita">
                                                                        <?php
                                                        require_once "./controladores/citaControlador.php";
                                                        $insAdmi = new citaControlador();
                                                        
                                                        $insAdmi->paginador_cita_controlador();
                                                        ?>
                                                                        </div>
                            
                            
                                                                        <!--PIE DE TABLA (PAGINACION DE TABLA)-->
                                                                        <div class="row tab-content" >
                                                                            <div class="col-xs-6">
                                                                                <div class="dataTables_info" id="dynamic-table_info" role="status" aria-live="polite">
                                                                                    mostrando 1 a 10 de 23 registros
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-6">
                                                                                <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
                                                                                    <ul class="pagination">
                                                                                        <li class="paginate_button previous disabled" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_previous">
                                                                                            <a href="#">Previos</a>
                                                                                        </li>
                                                                                        <li class="paginate_button active" aria-controls="dynamic-table" tabindex="0"><a href="#">1</a>
                                                                                        </li>
                                                                                        <li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">2</a>
                                                                                        </li>
                                                                                        <li class="paginate_button " aria-controls="dynamic-table" tabindex="0"><a href="#">3</a>
                                                                                        </li>
                                                                                        <li class="paginate_button next" aria-controls="dynamic-table" tabindex="0" id="dynamic-table_next"><a href="#">Siguiente</a>
                                                                                        </li>
                            
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                            
                            
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 <p style="visibility: hidden">Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                           
                                            </div>
            
                                            
            
                                            
                                        </div>
                                    </div>
                                </div>

                               

                           







                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        
                    </div>
                   
                </div>


                <?php include 'vistas/contenido/scripts/scripts-cita.php' ?>
                <?php include 'vistas/contenido/modales/modal-cita.php' ?>