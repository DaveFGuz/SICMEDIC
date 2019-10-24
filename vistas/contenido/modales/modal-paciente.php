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

                <div class="" style="height:450px;overflow-y: auto;">

                        <div id="home" class="">

                        <h3 class="header smaller lighter default"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Datos Generales</font></font></h3>
                        <div class="well">

                        <div class="form-group col-lg-6">
    <label for="pacnombre">Nombre(s) <a>*</a></label>
        <input type="text" class="form-control" name="pacnombre" id="pacnombre"  placeholder="" onkeypress="return soloLetras(event)" />
</div>

<div class="form-group col-lg-6">
    <label for="pacapellido">Apellido(s) <a>*</a></label>
        <input type="text" class="form-control" id="pacapellido" placeholder="" onkeypress="return soloLetras(event)" />
</div>

<div class="form-group col-lg-6">
    <label for="pacsexo"><i class="fa fa-male bigger-110"></i> Sexo <a>*</a></label>
        <select class="form-control " id="pacsexo">
            <option value=""> Seleccionar sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>
</div>

<div class="form-group col-lg-6">
    <label for="pacfecha"><i class="fa fa-calendar bigger-110"></i> Fecha de Nacimiento <a>*</a></label>
        <input class="form-control date-picker input-mask-date"
        id="pacfecha" type="text" max="2019-12-12"  data-date-format="dd/mm/yyyy">
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
    <label for="pactelefonop"><i class="ace-icon fa fa-phone"></i> Teléfono Primario</label>
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

                        

                        
                            
                    
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						nota : si paciente es menor de edad tiene que ingresar datos del encargado
                        </font>
                    </div>


                    <h3 class="header smaller lighter default"><font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Datos de Responsable</font></font></h3>
                     

                    <div class="well">

                        

<div class="form-group col-lg-6">
    <label for="resnombre">Nombre(s)  <a id="ob1" style="visibility:hidden">*</a></label>
        <input type="text" class="form-control" name="resnombre" id="resnombre"  placeholder="" onkeypress="return soloLetras(event)" />
</div>

<div class="form-group col-lg-6">
    <label for="resapellido">apellido(s)  <a id="ob2" style="visibility:hidden">*</a></label>
        <input type="text" class="form-control" name="resapellido" id="resapellido"  placeholder="" onkeypress="return soloLetras(event)" />
</div>

<div class="form-group col-lg-6">
    <label for="resrelacion"><i class="fa fa-male bigger-110"></i> Relación <a id="ob3" style="visibility:hidden">*</a></label>
        <select class="form-control " id="resrelacion">
            <option value=""> Seleccionar la Relacion</option>
            <option value="MADRE">MADRE</option>
            <option value="PADRE">PADRE</option>
        </select>
</div>
<div class="form-group col-lg-6">
    <label for="resdui"><i class="ace-icon fa fa-phone"></i> DUI</label>
        <input class="form-control input-mask-phone" type="text" id="resdui"name="resdui" />
</div>

<div class="form-group col-lg-6">
    <label for="restelefonop"><i class="ace-icon fa fa-phone"></i> Teléfono Primario</label>
        <input class="form-control input-mask-phone" type="text" id="restelefonop"name="restelefonop" />
</div>

<div class="form-group col-lg-6">
    <label for="restelefonos"><i class="ace-icon fa fa-phone"></i> Teléfono Secundario</label>
        <input class="form-control input-mask-phone" type="text" id="restelefonos"name="restelefonos" />
</div>
                        

                        <h4 class="green smaller lighter"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;visibility:hidden">Pozo normal</font></font></h4>
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;visibility:hidden">
						Use el pozo como un efecto simple en un elemento para darle un efecto de inserción.
                        </font></font>
                    </div>
                        
                        

                    
                    
                       
                            
                </div>
            </div>  
        </div>
    </form>
</div>

                    <!-- /.PIE DE VENTANA EMERGENTE -->

                    <div class="modal-footer no-margin-top ">


                        <button class="btn btn-primary btn-white btn-round pull-left "
                            style="margin-top: 10px;color:#2aa5a5" id="btnguardar"  >

                            <img src="<?php echo SERVERURL."vistas/"?>btn-agregar.png" style="width: 30px;height: 30px"> <strong>Guardar</strong>

                        </button>


                        <button class=" btn btn-danger btn-white btn-round pull-left"
                            style="margin-top: 10px;color:#2aa5a5" data-dismiss="modal">

                            <img src="<?php echo SERVERURL."vistas/"?>btn-cancelar.png" style="width: 30px;height: 30px;"><strong> Cancelar
                            </strong>
                        </button>


                        <button class="btn btn-warning btn-white btn-round pull-rigth "
                            style="margin-top: 10px;color:#2aa5a5;visibility: hidden" id="alerta"  >

                             <strong>Complete los campos Indicados</strong>

                        </button>


                    </div>

                </div>
                <!-- /.CONTENIDO DE VENTANA EMERGENTE -->

            </div>
</div>



         




        