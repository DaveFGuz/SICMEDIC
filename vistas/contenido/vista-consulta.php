<div class="page-content" style="background: #edf7f7">


    <div class="page-header " style="margin-left: 10px;margin-right: 10px">
        <div class="widget-header widget-header-large">
            <h3 class="widget-title grey lighter">
                <i class="ace-icon fa fa-folder-open blue"></i>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        Consultas de <?php

                        $nombre=$_SESSION['nombrecmp'];
                        
                        echo $nombre ;
                         ?>
                    </font>
                </font>
            </h3>



        </div>
    </div>

    <!-- /.page-header -->

    <div class="row">


        <div class="col-xs-12" style="margin-top: 20px;">


            <!-- PAGE CONTENT BEGINS -->



            <div class="col-sm-12">


                <div class="tabbable">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active">
                            <a data-toggle="tab" href="#home">
                                <i class="green ace-icon fa fa-home bigger-120"></i>
                                Historial De Consultas
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content" style="height: auto ">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="clearfix" style="background: #2aa5a5;color: #FFFF;padding-top: 5px;padding-right: 5px">

                                        <!--inicio area de botonos de tabla-->

                                        <div class="pull-right tableTools-container">

                                            <div class="dt-buttons btn-overlap btn-group">

                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal-table" aria-controls="dynamic-table">
                                                    <span>
                                                        <img src="<?php echo SERVERURL; ?>vistas/btn-nuevo.png" style="width: 30px;height: 30px;">&nbsp; Nuevo</span>
                                                    </span>
                                                </a>
                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table">
                                                    <span>
                                                        <img src="<?php echo SERVERURL; ?>vistas/btn-ayuda.png" style="width: 30px;height: 30px;">&nbsp;Ayuda</span>
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

                                            <div class="row tab-content" style="background: #edf7f7">


                                                <div class="col-xs-5">
                                                    
                                                </div>











                                            </div>

                                        </div>

                                        <!--Fin Filtros de Tabla-->





                                        <?php

                                        require_once "./controladores/consultaControlador.php";
                                        $insAdmin = new consultaControlador();

                                        $insAdmin->paginador_historial_consulta_controlador();

                                        ?>



                                        
                                    </div>






                                    <!--PIE DE TABLA (PAGINACION DE TABLA)-->



                                </div>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>

    </div>


</div>

<?php include 'scripts/scripts-consulta.php'; ?>

<?php include 'modales/modal-consulta.php'; ?>