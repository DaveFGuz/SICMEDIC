<div class="page-content" style="background: #edf7f7">


    <div class="page-header col-xs-12">
        <div class="widget-header widget-header-large">
            <h3 class="widget-title grey lighter">
                <i class="ace-icon fa fa-group blue"></i>/
                <font style="vertical-align: inherit;">

                    PACIENTES


                </font>
            </h3>

        </div>
    </div>
    <!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->




            <div class="col-sm-12">
                <div class="tabbable">


                    <div class="tab-content" style="height: auto;">
                        <div class="tab-pane fade in active">

                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="clearfix" style="background: #2aa5a5;color: #FFFF;padding-top: 5px;padding-right: 5px">

                                        <!--inicio area de botonos de tabla-->

                                        <div class="pull-right tableTools-container">

                                            <div class="dt-buttons btn-overlap btn-group">

                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table" data-original-title="" title="" data-toggle="modal" data-backdrop="static" data-keyboard="false" onclick="nuevoregistro()" data-target="#modal-rgpaciente">
                                                    <span>
                                                        <img src="<?php echo SERVERURL; ?>vistas/btn-nuevo.png" style="width: 30px;height: 30px;">&nbsp;Nuevo</span>
                                                    </span>
                                                </a>

                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" aria-controls="dynamic-table" data-original-title="" title="">
                                                    <span>
                                                        <img src="<?php echo SERVERURL; ?>vistas/btn-impresora.png" style="width: 30px;height: 30px;">&nbsp;Imprimir</span>
                                                    </span>
                                                </a>
                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold" href="<?php echo SERVERURL; ?>reportes-pdf/Ayuda_Paciente.pdf" target="_blank" aria-controls="dynamic-table" data-original-title="" title="">
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

                                            <div class="row tab-content">

                                                <div>

                                                    <div class="col-lg-3 col-xs-6">

                                                        <label>Mostrar
                                                            <select name="dynamic-table_length" class="form-control form-group" id="porpagina">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select>
                                                            registros
                                                        </label>

                                                    </div>


                                                    <div class="col-lg-3 col-xs-6">

                                                        <label>
                                                            <select style="margin-left: -95px;" name="dynamic-table_length dataTables_filter" id="estado" class="form-control form-group">
                                                                <option value="1">Paciente Activos</option>
                                                                <option value="0">Pacientes Inactivos</option>

                                                            </select>

                                                        </label>

                                                    </div>

                                                    <div class="col-lg-6 col-xs-6">
                                                        <div id="dynamic-table_filter" class="dataTables_filter">
                                                            <label>Busqueda:
                                                                <input type="text" style="width: 60%;" class="form-control input-sm" id="busqueda" placeholder=""></label>



                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div id="tabla">



                                                <?php

                                                require_once "./controladores/pacienteControlador.php";
                                                $insAdmin = new pacienteControlador();

                                                $insAdmin->paginador_administrador_controlador();

                                                ?>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="visibility: hidden">Raw denim you probably haven't heard of them
                                jean shorts Austin.</p>

                        </div>

                    </div>
                </div>
            </div>


            <!-- PAGE CONTENT ENDS -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<?php include 'modales/modal-paciente.php'; ?>
<?php include 'scripts/scripts-paciente.php'; ?>

<?php
if ($_SESSION["rgnuevo"] != "0" && $_SESSION["idcita"] != "0") {
    echo "<script type='text/javascript'>";

    echo "var idcita='" . $_SESSION["idcita"] . "';";
    echo "var esdecita='" . $_SESSION["rgnuevo"] . "';";

    echo "$('#modal-rgpaciente').modal('show');
        nuevoregistro();
        </script>";
} else {

    echo "<script type='text/javascript'>";

    echo "var idcita='0';";
    echo "var esdecita='noesdecita';";
    echo "</script>";
}
$_SESSION["rgnuevo"] = "0";
$_SESSION["idcita"] = "0";
?>