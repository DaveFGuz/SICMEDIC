<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Paciente - SICMEDIC</title>

    <meta name="description" content="top menu &amp; navigation" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />

    <script src="assets/js/ace-extra.min.js"></script>


</head>

<body class="no-skin">

    <!--barra superior de pagina -->

    <?php include 'modulos/barrasuperior.php';?>

    <!--Fin barra superior (logo y notificaciones) -->

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.loadState('main-container')
            } catch (e) { }
        </script>

        <div id="sidebar"
            class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('sidebar')
                } catch (e) { }
            </script>

            <ul class="nav nav-list">


                    <li class="hover">
                            <a href="" onclick="location.href='vista-inicio.html'" class="dropdown-toggle">
                                <i class="menu-icon fa fa-home"></i>
                                <span class="menu-text">
                                        &nbsp&nbsp&nbsp&nbsp &nbspInicio&nbsp&nbsp&nbsp&nbsp&nbsp
                                </span>
        
                                <b class="arrow fa fa-angle-down"></b>
                            </a>
        
        
        
                        </li>


                <li class=" active hover">
                    <a href="" onclick="location.href='vista-paciente.html'" class="dropdown-toggle">
                        <i class="menu-icon fa fa-group"></i>
                        <span class="menu-text">
                            Pacientes
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>



                </li>

                <li class="hover">
                    <a href="" onclick="location.href='vista-citas.html';" class="dropdown-toggle">
                        <i class="menu-icon fa fa-calendar-check-o"></i>
                        <span class="menu-text">
                                &nbsp&nbsp&nbsp&nbspCitas&nbsp&nbsp&nbsp&nbsp
                        </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>



                </li>

                <li class="hover">
                    <a href="" onclick="location.href='vista-medicamentos.html'" class="dropdown-toggle">
                        <i class="menu-icon fa fa-medkit"></i>
                        <span class="menu-text"> Medicamentos </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>


                </li>

                <li class="hover">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-lock"></i>
                        <span class="menu-text"> Seguridad </span>

                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="hover">
                            <a href="vista-respaldo.html">
                                <i class="menu-icon fa fa-caret-right"></i> Respaldo de Informaci�n
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="vista-usuario.html">
                                <i class="menu-icon fa fa-caret-right"></i> Usuarios
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="hover">
                            <a href="vista-bitacora.html">
                                <i class="menu-icon fa fa-caret-right"></i> Bitacora
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>


                <li class="hover" data-toggle="modal" style="cursor: pointer" data-target="#modal-acerca">
                    <a>
                        <i class="menu-icon fa fa-list"></i>

                        <span class="menu-text">
                            Acerca de

                        </span>
                    </a>

                    <b class="arrow"></b>
                </li>






            </ul>
            <!-- /.nav-list -->
        </div>

        <!--inicio contenido de la pagina -->

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content" style="background: #edf7f7">


                    <div class="page-header col-xs-12">
                            <div class="widget-header widget-header-large">
                                    <h3 class="widget-title grey lighter">
                                        <i class="ace-icon fa fa-group blue"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            PACIENTES
                                            </font></font></h3>

                                    

                                    
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

                                                    <div class="clearfix"
                                                        style="background: #2aa5a5;color: #FFFF;padding-top: 5px;padding-right: 5px">

                                                        <!--inicio area de botonos de tabla-->

                                                        <div class="pull-right tableTools-container">

                                                            <div class="dt-buttons btn-overlap btn-group">

                                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"
                                                                    aria-controls="dynamic-table" data-original-title=""
                                                                    title="" data-toggle="modal"
                                                                    data-target="#modal-table">
                                                                    <span>
                                                                        <img src="btn-nuevo.png"
                                                                            style="width: 30px;height: 30px;">&nbsp;Nuevo</span>
                                                                    </span>
                                                                </a>

                                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"
                                                                    aria-controls="dynamic-table" data-original-title=""
                                                                    title="">
                                                                    <span>
                                                                        <img src="btn-impresora.png"
                                                                            style="width: 30px;height: 30px;">&nbsp;Imprimir</span>
                                                                    </span>
                                                                </a>
                                                                <a class="dt-button buttons-collection buttons-colvis btn btn-white btn-primary btn-bold"
                                                                    aria-controls="dynamic-table" data-original-title=""
                                                                    title="">
                                                                    <span>
                                                                        <img src="btn-ayuda.png"
                                                                            style="width: 30px;height: 30px;">&nbsp;Ayuda</span>
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
                                                        <div id="dynamic-table_wrapper"
                                                            class="dataTables_wrapper form-inline no-footer">

                                                            <!--inicio Filtros de Tabla-->
                                                            
                                                            <div class="row tab-content">

                                                                <div>

                                                                    <div class="col-lg-2 col-xs-6">

                                                                        <label>mostrar
                                                                            <select name="dynamic-table_length"
                                                                                class="form-control form-group">
                                                                                <option value="10">10</option>
                                                                                <option value="25">25</option>
                                                                                <option value="50">50</option>
                                                                                <option value="100">100</option>
                                                                            </select>
                                                                            registros
                                                                        </label>

                                                                    </div>


                                                                    <div class="col-lg-3 col-xs-6" >

                                                                        <label>
                                                                            <select style=" margin-left: 10px;"
                                                                            
                                                                                name="dynamic-table_length dataTables_filter"
                                                                                class="form-control form-group">
                                                                                <option value="10">Paciente Activos</option>
                                                                                <option value="25">Pacientes Inactivos</option>

                                                                            </select>

                                                                        </label>

                                                                    </div>

                                                                    <div class="col-lg-7 col-xs-6">
                                                                        <div id="dynamic-table_filter"
                                                                            class="dataTables_filter">
                                                                            <label>Busqueda:
                                                                                <input type="text" style="width: 60%;"
                                                                                    class="form-control input-sm"
                                                                                    placeholder=""></label>



                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>










                                                            <!--Fin Filtros de Tabla-->

                                                            <table id="dynamic-table"
                                                                class="table table-striped table-bordered table-hover   dataTable no-footer"
                                                                role="grid">

                                                                <thead>
                                                                    <tr role="row" style="background: #ffff">
                                                                        <th style="width: 15%">
                                                                            <strong>EXPEDIENTE</strong></th>
                                                                        <th style="width: 50%"><strong>NOMBRE</strong>
                                                                        </th>
                                                                        <td style="width: 1%"><strong>EDAD</strong></td>
                                                                        <th style="width: 10%"><strong>ACCI�N</strong>
                                                                        </th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>


                                                                  
                                                                    <tr role="row" class="odd active">


                                                                        <td>
                                                                            <a href="vista-expediente.html" class="info tooltip-info"
                                                                                data-placement="right"
                                                                                data-rel="tooltip"
                                                                                title="Ir a Expediente"><i
                                                                                    class="ace-icon fa fa-folder-open-o bigger-140"></i>
                                                                                    <strong>AA102019</strong></a>
                                                                        </td>

                                                                        <td>  AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</td>

                                                                        <td>66</td>



                                                                        <td>


                                                                            <div
                                                                                class="hidden-sm hidden-xs action-buttons">

                                                                                <a class="info tooltip-info" href="#"
                                                                                    data-rel="tooltip" title="Mas Datos" data-toggle="modal"
                                                                                    data-target="#modal-infopaciente" >
                                                                                    <i
                                                                                        class="ace-icon fa fa-list bigger-180"></i>
                                                                                </a>

                                                                                <a class="info tooltip-info" href="vista-expediente.html"
                                                                                    data-rel="tooltip" title="ir a Expediente"
                                                                                    >
                                                                                    <i
                                                                                        class="ace-icon fa fa-folder-open-o bigger-180"></i>
                                                                                </a>


                                                                                <a class="green tooltip-info" href="#"
                                                                                    data-rel="tooltip"
                                                                                    title="Modificar" data-toggle="modal"
                                                                                    data-target="#modal-modificarpaciente">
                                                                                    <i
                                                                                        class="ace-icon fa fa-pencil bigger-180"></i>
                                                                                </a>

                                                                                <a class="red tooltip-info" href="#"
                                                                                    data-rel="tooltip" title="Dar Baja">
                                                                                    <i
                                                                                        class="ace-icon fa fa-arrow-down bigger-180"></i>
                                                                                </a>
                                                                            </div>

                                                                            <div class="hidden-md hidden-lg">
                                                                                <div class="inline pos-rel">
                                                                                    <button
                                                                                        class="btn btn-minier btn-yellow dropdown-toggle"
                                                                                        data-toggle="dropdown"
                                                                                        data-position="auto">
                                                                                        <i
                                                                                            class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                                                    </button>

                                                                                    <ul
                                                                                        class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                                        <li>
                                                                                            <a href="#"
                                                                                                class="tooltip-info"
                                                                                                data-rel="tooltip"
                                                                                                title=""
                                                                                                data-original-title="View">
                                                                                                <span class="blue">
                                                                                                    <i
                                                                                                        class="ace-icon fa fa-search-plus bigger-120"></i>
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="#"
                                                                                                class="tooltip-success"
                                                                                                data-rel="tooltip"
                                                                                                title=""
                                                                                                data-original-title="Edit">
                                                                                                <span class="green">
                                                                                                    <i
                                                                                                        class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="#"
                                                                                                class="tooltip-error"
                                                                                                data-rel="tooltip"
                                                                                                title=""
                                                                                                data-original-title="Delete">
                                                                                                <span class="red">
                                                                                                    <i
                                                                                                        class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                                                </span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                    </tr>
                                                                    









                                                                </tbody>
                                                            </table>


                                                            <!--PIE DE TABLA (PAGINACION DE TABLA)-->
                                                            <div class="row tab-content">
                                                                <div class="col-xs-8">
                                                                    <div class="dataTables_info" id="dynamic-table_info"
                                                                        role="status" aria-live="polite">
                                                                        mostrando 1 a 1 de 1 registros
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                                        id="dynamic-table_paginate">
                                                                        <ul class="pagination">
                                                                            <li class="paginate_button previous disabled"
                                                                                aria-controls="dynamic-table"
                                                                                tabindex="0"
                                                                                id="dynamic-table_previous">
                                                                                <a href="#">Previos</a>
                                                                            </li>
                                                                            <li class="paginate_button active btn-default"
                                                                                aria-controls="dynamic-table"
                                                                                tabindex="0"><a href="#">1</a>
                                                                            </li>
                                                                            <li class="paginate_button "
                                                                                aria-controls="dynamic-table"
                                                                                tabindex="0"><a href="#">2</a>
                                                                            </li>
                                                                            <li class="paginate_button "
                                                                                aria-controls="dynamic-table"
                                                                                tabindex="0"><a href="#">3</a>
                                                                            </li>
                                                                            <li class="paginate_button next"
                                                                                aria-controls="dynamic-table"
                                                                                tabindex="0" id="dynamic-table_next"><a
                                                                                    href="#">Siguiente</a>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
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
                <!-- /.page-content -->
            </div>
        </div>

        <!--fin contenido de la pagina -->

        <!--inicio pie de pagina -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="bigger-120 red">
                        <span class="bolder">UES-FMP Todos los Derechos Reservados</span> &copy; <span
                            class="bolder">2019</span>
                    </span>

                    ; ;
                    <img src="minerva.png" style="width: 45;height: 50px;">
                </div>
            </div>
        </div>

        <!--fin pie de pagina -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>

        <!--INICIO VENTANA EMERGENTE DE FORMULARIO PARA REGISTRO DE PACIENTES -->

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
                        
                        <form>

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

                                        <strong>SICMEDIC</strong> Surge al conocer la necesidad del
                                        consultorio m�dico de la Doctor
                                        Ana Luisa Vel�zquez, puesto que ellos no contaban con un sistema inform�tico
                                        para la sistematizaci�n de sus
                                        pacientes.
                                        <br>
                                        <br>
                                        Para la elaboraci�n de dicho sistema se tomaron muy en cuenta las factibilidades
                                        operativas, t�cnicas y econ�micas, las cuales
                                        nos brindaron la informaci�n necesaria para la realizaci�n de SICMEDIC
                                        <br>
                                        <br>
                                        <strong>Desarolladores:</strong>
                                        <br>
                                        David Flores Guzm�n
                                        <br>
                                        Oscar Ren� Mu�oz Garcia
                                        <br>
                                        Emerson Josu� Palacios
                                        <br>
                                        Miguel �ngel Beltran Mor�n
                                        <br>
                                        <strong class="pull-right"> Dise�o de Sistemas II</strong>




                                        <p style="visibility: hidden">Raw denim you probably haven't heard of them jean
                                            shorts Austin.</p>

                                    </div>

                                    <div id="messages" class="tab-pane fade">

                                        <div class="form-group col-lg-3">

                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono
                                                1</label>



                                            <input class="form-control input-mask-phone" type="text" id="telefono" />



                                        </div>

                                        <div class="form-group col-lg-3">

                                            <label for="telefono"><i class="ace-icon fa fa-phone"></i> Tel�fono
                                                2</label>



                                            <input class="form-control input-mask-phone" type="text" id="telefono" />



                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputName"><i class="ace-icon fa fa-envelope"></i> Correo
                                                electr�nico(opcional)</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="" />
                                        </div>
                                        <div class="form-group col-lg-12">

                                            <label for="inputName"><i class="ace-icon fa fa-home"></i> Direcci�n</label>
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


        <!--INICIO VENTANA EMERGENTE DE FORMULARIO PARA MODIFICAR DATOS DE PACIENTES -->

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

    



        <!--INICIO VENTANA EMERGENTE PARA MOSTRAR DATOS DE PACIENTES -->

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


        







    </div>
    <!-- /.main-container -->

    <!--  scripts basicos de esta pagina -->

    <!--[if !IE]> -->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- <![endif]-->

    <!--para cargar vista mobil -->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>




    <script src="assets/js/bootstrap.min.js">
    </script>

    <!-- script de puglin especificos de la pagina -->

    <!-- ace scripts(plantilla) -->
    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>

    <!-- para los campos de fecha -->
    <script src="assets/js/bootstrap-datepicker.min.js"></script>

    <!-- para mascara de los campos de fecha -->
    <script src="assets/js/jquery.maskedinput.min.js"></script>

    <!-- script en l�nea relacionados con esta p�gina -->
    <script type="text/javascript">
        jQuery(function ($) {
            var $sidebar = $('.sidebar').eq(0);
            if (!$sidebar.hasClass('h-sidebar')) return;

            $(document).on('settings.ace.top_menu', function (ev, event_name, fixed) {
                if (event_name !== 'sidebar_fixed') return;

                var sidebar = $sidebar.get(0);
                var $window = $(window);

                //return if sidebar is not fixed or in mobile view mode
                var sidebar_vars = $sidebar.ace_sidebar('vars');
                if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
                    $sidebar.removeClass('lower-highlight');
                    //restore original, default marginTop
                    sidebar.style.marginTop = '';

                    $window.off('scroll.ace.top_menu')
                    return;
                }


                var done = false;
                $window.on('scroll.ace.top_menu', function (e) {

                    var scroll = $window.scrollTop();
                    scroll = parseInt(scroll / 4); //move the menu up 1px for every 4px of document scrolling
                    if (scroll > 17) scroll = 17;


                    if (scroll > 16) {
                        if (!done) {
                            $sidebar.addClass('lower-highlight');
                            done = true;
                        }
                    } else {
                        if (done) {
                            $sidebar.removeClass('lower-highlight');
                            done = false;
                        }
                    }

                    sidebar.style['marginTop'] = (17 - scroll) + 'px';
                }).triggerHandler('scroll.ace.top_menu');

            }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

            $(window).on('resize.ace.top_menu', function () {
                $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
            });
            // para cargar componenete popover que muestra +datos de paciente
            $('[data-rel=popover]').popover({
                html: true
            });

            $('[data-rel=tooltip]').tooltip();

            $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            });

            $.mask.definitions['~'] = '[+-]';

            $('.input-mask-date').mask('99/99/9999');

        });
    </script>

</body>

</html>