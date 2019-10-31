document.getElementById("btneditar").style.display="none";

function soloNumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
return /\d/.test(String.fromCharCode(keynum));

}
function paginador(pagina){
var porpagina=document.getElementById("porpagina").value;

$.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
    data: { pagina : pagina , porpagina : porpagina ,accion : "paginado"  }
  })
    .done(function( msg ) {

        document.getElementById("tabla").innerHTML=msg;
    });
}
function cancelar(){

    document.getElementById("formpac").reset();
    document.getElementById("pacdui").disabled=true;
    document.getElementById("resnombre").disabled=true;
    document.getElementById("resapellido").disabled=true;
    document.getElementById("resrelacion").disabled=true;
    document.getElementById("resdui").disabled=true;
    document.getElementById("restelefonop").disabled=true;
    document.getElementById("restelefonos").disabled=true;
    document.getElementById("pacnombre-error").style.display="hidden";
    document.getElementById("pacapellido-error").style.display="hidden";
    document.getElementById("pacsexo-error").style.display="hidden";
    document.getElementById("pacfecha-error").style.display="hidden";

    document.getElementById("resnombre-error").style.display="hidden";
    document.getElementById("resapellido-error").style.display="hidden";
    document.getElementById("resrelacion-error").style.display="hidden";

    document.getElementById('pacscrool').scrollTop = 0;

    

}



function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
}

function nuevoregistro(){
    document.getElementById('pacscrool').scrollTop = 0;
    document.getElementById("btneditar").style.display="none";
    document.getElementById("btnguardar").style.display="block";
    document.getElementById("texto").innerHTML="<i class='fa fa-user'></i> Nuevo Paciente";
    document.getElementById("pacnombre").style.borderColor="";
    document.getElementById("pacapellido").style.borderColor="";
    document.getElementById("pacsexo").style.borderColor="";
    document.getElementById("pacfecha").style.borderColor="";

    document.getElementById("resnombre").style.borderColor="";
    document.getElementById("resapellido").style.borderColor="";
    document.getElementById("resrelacion").style.borderColor="";
    
    document.getElementById("formpac").reset();
    
    
}

function ExtraerDatosMod(idpaciente){
    document.getElementById("btneditar").style.display="block";
    document.getElementById("btnguardar").style.display="none";
    document.getElementById("texto").innerHTML="<i class='fa fa-edit'></i> Modificar Paciente";
    document.getElementById("pacnombre").style.borderColor="";
    document.getElementById("pacapellido").style.borderColor="";
    document.getElementById("pacsexo").style.borderColor="";
    document.getElementById("pacfecha").style.borderColor="";
    document.getElementById("resnombre").style.borderColor="";
    document.getElementById("resapellido").style.borderColor="";
    document.getElementById("resrelacion").style.borderColor="";

    document.getElementById("formpac").reset();

    $.ajax({
        method: "POST",
        url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
        data: { idpaciente : idpaciente ,accion : "obtenerdatos"  }
      })
        .done(function( msg ) {

        document.getElementById("pacid").value=idpaciente;
          
          var datos=JSON.parse(msg);

          var formatfecha=datos.pacfecha.substr(8,2,3)+"/"+datos.pacfecha.substr(5,2,3)+"/"+datos.pacfecha.substr(0,4);

         document.getElementById("pacnombre").value=datos.pacnombre;
         document.getElementById("pacapellido").value=datos.pacapellido;
        
         document.getElementById("pacfecha").value=formatfecha;
         if(datos.pacsexo=="FEMENINO"){
            document.getElementById("pacsexo")[2].selected=true;
          
         }
         if(datos.pacsexo=="MASCULINO"){
            document.getElementById("pacsexo")[1].selected=true;
         }
         
         document.getElementById("pacdui").value=datos.pacdui;
         document.getElementById("paccorreo").value=datos.paccorreo;
         document.getElementById("pacdireccion").value=datos.pacdireccion;
         document.getElementById("pactelefonop").value=datos.pactelefonop;
         document.getElementById("pactelefonos").value=datos.pactelefonos;

         var anio=document.getElementById("actual").value;
                var pacanio=datos.pacfecha.substr(0,4);
            
                var edad=parseInt(anio,10)-parseInt(pacanio,10);

                if(edad>=18){
                    document.getElementById("pacdui").disabled=false;
                }
                if(edad<18){
                    document.getElementById("pacdui").disabled=true;
                }

            if(datos.resnombre!=null && datos.resapellido!=null && datos.resrelacion!=null) {

                document.getElementById("resdui").value=datos.resdui;
                document.getElementById("resnombre").value=datos.resnombre;
                document.getElementById("resapellido").value=datos.resapellido;
                
                document.getElementById("restelefonop").value=datos.restelefonop;
                document.getElementById("restelefonos").value=datos.restelefonos;

                if(datos.pacsexo=="MADRE"){
                    document.getElementById("resrelacion")[1].selected=true;
                  
                 }
                 if(datos.pacsexo=="PADRE"){
                    document.getElementById("resrelacion")[2].selected=true;
                 }
                 if(datos.pacsexo=="ABUELA"){
                    document.getElementById("resrelacion")[3].selected=true;
                  
                 }
                 if(datos.pacsexo=="ABUELO"){
                    document.getElementById("resrelacion")[4].selected=true;
                 }
                 if(datos.pacsexo=="HERMANA"){
                    document.getElementById("resrelacion")[5].selected=true;
                  
                 }
                 if(datos.pacsexo=="HERMANO"){
                    document.getElementById("resrelacion")[6].selected=true;
                 }
                 if(datos.pacsexo=="TIA"){
                    document.getElementById("resrelacion")[5].selected=true;
                  
                 }
                 if(datos.pacsexo=="TIO"){
                    document.getElementById("resrelacion")[6].selected=true;
                 }





                document.getElementById("resdui").disabled=false;
                document.getElementById("resnombre").disabled=false;
                document.getElementById("resapellido").disabled=false;
                document.getElementById("resrelacion").disabled=false;
                document.getElementById("restelefonop").disabled=false;
                document.getElementById("restelefonos").disabled=false;
            }



        });


}


function cambiarestado(idpaciente,estado){

    var texto="";
    if(estado==1){
        texto="Quieres dar de alta al paciente";
    }
    if(estado==0){
        texto="Quieres dar de baja al paciente";
    }
    jQuery(function ($) {
    swal({
        title: "¿Estás seguro?",   
        text: texto,   
        type: "question",   
        showCancelButton: true,     
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function () {
        
        $.ajax({
            method: "POST",
            url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
            data: { idpaciente : idpaciente, estado : estado,
                    accion : "cambiarestado" }
          })
            .done(function( msg ) {
              $("#respuesta").html(msg);
              $.ajax({
                method: "POST",
                url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
                data: { accion : "alltabla"  }
              })
                .done(function( msg ) {
                  $("#tabla").html(msg);
                });
            });
        return false;
    });
});
}





jQuery(function ($) {

    

 function obteneredad(){
    var anio=document.getElementById("actual").value;
    var pacanio=document.getElementById("pacfecha").value.substr(6,9);

    var edad=parseInt(anio,10)-parseInt(pacanio,10);
    

    return edad;
    
}

$("#porpagina").change(function(){

    $.ajax({
        method: "POST",
        url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
        data: { porpagina : $("#porpagina").val(),
                accion : "paginado" }
      })
        .done(function( msg ) {
            document.getElementById("tabla").innerHTML=msg;
        });
});

$("#estado").change(function(){

    $.ajax({
        method: "POST",
        url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
        data: { porpagina : $("#porpagina").val(),porpagina : $("#estado").val(),
                accion : "paginado" }
      })
        .done(function( msg ) {
            document.getElementById("tabla").innerHTML=msg;
        });
});




$("#resnombre").keyup(function(){
if($("#resnombre").val()!="" && $("#resapellido").val()==""){
    document.getElementById("resrelacion")[0].selected=true
    document.getElementById("resrelacion").disabled=true;
}
if($("#resnombre").val()=="" && $("#resapellido").val()==""){
    document.getElementById("resrelacion")[0].selected=true
    document.getElementById("resrelacion").disabled=true;
}
if($("#resnombre").val()!="" && $("#resapellido").val()!=""){
   
    document.getElementById("resrelacion").disabled=false;
}

});

$("#resapellido").keyup(function(){
    if($("#resnombre").val()!="" && $("#resapellido").val()==""){
        document.getElementById("resrelacion").disabled=true;
        document.getElementById("resrelacion")[0].selected=true
    }
    if($("#resnombre").val()=="" && $("#resapellido").val()==""){
        document.getElementById("resrelacion").disabled=true;
        document.getElementById("resrelacion")[0].selected=true
    }
    if($("#resnombre").val()!="" && $("#resapellido").val()!=""){
    
        document.getElementById("resrelacion").disabled=false;
    }
    
    });

$("#pacfecha" ).change(function() {


    if(document.getElementById("pacfecha").value!=""){

    var ob1=$('#ob1');
   
    var ob2=$('#ob2');
   
    var ob3=$('#ob3');

  if(obteneredad()>=18){
    document.getElementById("pacdui").disabled=false;
    document.getElementById("resnombre").disabled=false;
    document.getElementById("resapellido").disabled=false;
    document.getElementById("resrelacion").disabled=false;
    document.getElementById("restelefonop").disabled=false;
    document.getElementById("resdui").disabled=false;
    document.getElementById("restelefonos").disabled=false;
    ob1.css("visibility","hidden");
    ob2.css("visibility","hidden");
    ob3.css("visibility","hidden");
    
  }
 
  if(obteneredad()<18 ){
    document.getElementById("pacdui").value="";
    ob1.css("visibility","visible");
    ob2.css("visibility","visible");
    ob3.css("visibility","visible");
    document.getElementById("pacdui").disabled=true;
    document.getElementById("resnombre").disabled=false;
    document.getElementById("resapellido").disabled=false;
    document.getElementById("restelefonop").disabled=false;
    document.getElementById("resdui").disabled=false;
    document.getElementById("restelefonos").disabled=false;
  }
}
  

});





$( "#btnguardar" ).click(function() {
    var nombre=$('#pacnombre');
    var apellido=$('#pacapellido');
    var sexo=$('#pacsexo');
    var dui=$('#pacdui');
    var fecha=$('#pacfecha');
    var alert=$('#alerta');


    var resnombre=$('#resnombre');
    var resapellido=$('#resapellido');
    var relacion=$('#resrelacion');
   
    
   

    if(nombre.val()==""){
        nombre.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacnombre-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacnombre-error").style.display="block";
    }else{
        nombre.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacnombre-error").innerHTML="";
        document.getElementById("pacnombre-error").style.display="hidden";
    }

    if(apellido.val()==""){
        apellido.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacapellido-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacapellido-error").style.display="block";
    }else{
        apellido.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacapellido-error").innerHTML="";
        document.getElementById("pacapellido-error").style.display="hidden";
    }

    if(sexo.val()==""){
        sexo.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacsexo-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacsexo-error").style.display="block";
    }else{
        sexo.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacsexo-error").innerHTML="";
        document.getElementById("pacsexo-error").style.display="hidden";
    }

    if(fecha.val()==""){
        fecha.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacdui").disabled=false;
        document.getElementById("pacfecha-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacfecha-error").style.display="block";
        
    }else{
        fecha.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacdui").disabled=true;
        document.getElementById("pacfecha-error").innerHTML="";
        document.getElementById("pacfecha-error").style.display="hidden";
    }


    if(fecha.val()!=""){
    if(resnombre.val()=="" && obteneredad()<18  ){
        resnombre.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resnombre-error").innerHTML="Campo Obligatorio";
        document.getElementById("resnombre-error").style.display="block";
        
    }else{
        resnombre.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resnombre-error").innerHTML="";
        document.getElementById("resnombre-error").style.display="hidden";
    }
    if(resapellido.val()=="" && obteneredad()<18 ){
        resapellido.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resapellido-error").innerHTML="Campo Obligatorio";
        document.getElementById("resapellido-error").style.display="block";
    }else{
        resapellido.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resapellido-error").innerHTML="";
        document.getElementById("resapellido-error").style.display="hidden";
    }
    if(relacion.val()=="" && obteneredad()<18 ){
        relacion.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resrelacion-error").innerHTML="Campo Obligatorio";
        document.getElementById("resrelacion-error").style.display="block";
        
    }else{
        relacion.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resrelacion-error").innerHTML="";
        document.getElementById("resrelacion-error").style.display="hidden";
    }
}
    

        
        
    
    if(fecha.val!=""){
    if(nombre.val()!="" && apellido.val()!="" && sexo.val()!="" && fecha.val()!="" &&  obteneredad()>=18){
        enviardatos();
    }

    if(resnombre.val()!="" && resapellido.val()!="" && relacion.val()!="" && nombre.val()!="" && apellido.val()!="" && sexo.val()!="" && fecha.val()!="" && obteneredad()<18){
        enviardatos();
    }
}

});

$( "#btneditar" ).click(function() {
    var nombre=$('#pacnombre');
    var apellido=$('#pacapellido');
    var sexo=$('#pacsexo');
    var dui=$('#pacdui');
    var fecha=$('#pacfecha');
    var alert=$('#alerta');


    var resnombre=$('#resnombre');
    var resapellido=$('#resapellido');
    var relacion=$('#resrelacion');
   
    
   

    if(nombre.val()==""){
        nombre.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacnombre-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacnombre-error").style.display="block";
    }else{
        nombre.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacnombre-error").innerHTML="";
        document.getElementById("pacnombre-error").style.display="hidden";
    }

    if(apellido.val()==""){
        apellido.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacapellido-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacapellido-error").style.display="block";
    }else{
        apellido.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacapellido-error").innerHTML="";
        document.getElementById("pacapellido-error").style.display="hidden";
    }

    if(sexo.val()==""){
        sexo.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacsexo-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacsexo-error").style.display="block";
    }else{
        sexo.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacsexo-error").innerHTML="";
        document.getElementById("pacsexo-error").style.display="hidden";
    }

    if(fecha.val()==""){
        fecha.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacdui").disabled=false;
        document.getElementById("pacfecha-error").innerHTML="Campo Obligatorio";
        document.getElementById("pacfecha-error").style.display="block";
        
    }else{
        fecha.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacdui").disabled=true;
        document.getElementById("pacfecha-error").innerHTML="";
        document.getElementById("pacfecha-error").style.display="hidden";
    }


    if(fecha.val()!=""){
    if(resnombre.val()=="" && obteneredad()<18  ){
        resnombre.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resnombre-error").innerHTML="Campo Obligatorio";
        document.getElementById("resnombre-error").style.display="block";
        
    }else{
        resnombre.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resnombre-error").innerHTML="";
        document.getElementById("resnombre-error").style.display="hidden";
    }
    if(resapellido.val()=="" && obteneredad()<18 ){
        resapellido.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resapellido-error").innerHTML="Campo Obligatorio";
        document.getElementById("resapellido-error").style.display="block";
    }else{
        resapellido.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resapellido-error").innerHTML="";
        document.getElementById("resapellido-error").style.display="hidden";
    }
    if(relacion.val()=="" && obteneredad()<18 ){
        relacion.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("resrelacion-error").innerHTML="Campo Obligatorio";
        document.getElementById("resrelacion-error").style.display="block";
        
    }else{
        relacion.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("resrelacion-error").innerHTML="";
        document.getElementById("resrelacion-error").style.display="hidden";
    }
}
    

        
        
    
    if(fecha.val!=""){
    if(nombre.val()!="" && apellido.val()!="" && sexo.val()!="" && fecha.val()!="" &&  obteneredad()>=18){
        enviardatosmod();
    }

    if(resnombre.val()!="" && resapellido.val()!="" && relacion.val()!="" && nombre.val()!="" && apellido.val()!="" && sexo.val()!="" && fecha.val()!="" && obteneredad()<18){
        enviardatosmod();
    }
}

});





     

    
 



    function enviardatosmod(){


    var form=$('#formpac');

    var tipo=form.attr('data-form');
    var accion=form.attr('action');
    var metodo=form.attr('method');
    var respuesta=form.children('.RespuestaAjax');

    var msjError="<script>swal('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
    


    var textoAlerta;
    if(tipo==="save"){
        textoAlerta="Los datos del sistema serán actualizados";
    }else{
        textoAlerta="Quieres realizar la operación solicitada";
    }


    swal({
        title: "¿Estás seguro?",   
        text: textoAlerta,   
        type: "question",   
        showCancelButton: true,     
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function () {
        edadx=obteneredad();
        $.ajax({
            method: metodo,
            url: accion,
            data: { idpaciente : $("#pacid").val(), pacnombre: $("#pacnombre").val()
                    , pacapellido: $('#pacapellido').val(),
                    pacsexo: $('#pacsexo').val(),pacfecha : $('#pacfecha').val()
                    ,pacdui : $('#pacdui').val(),pacdireccion : $('#pacdireccion').val()
                    ,paccorreo : $('#paccorreo').val(),pactelefonop : $('#pactelefonop').val()
                    ,pactelefonos : $('#pactelefonos').val(),pacfecha : $('#pacfecha').val()
                    ,resnombre: $("#resnombre").val(), resapellido: $('#resapellido').val()
                    ,resrelacion: $("#resrelacion").val(), restelefonop: $('#restelefonop').val() 
                    ,restelefonos: $('#restelefonos').val()
                    ,edad: edadx
                    ,resdui: $("#resdui").val(),accion : "modificar"  }
          })
            .done(function( msg ) {
              $("#respuesta").html(msg);
              $('#modal-rgpaciente').modal('hide');
              cancelar();
              actualizardatos();
            });
        return false;
    });
}


function enviardatos(){


    var form=$('#formpac');

    var tipo=form.attr('data-form');
    var accion=form.attr('action');
    var metodo=form.attr('method');
    var respuesta=form.children('.RespuestaAjax');

    var msjError="<script>swal('Ocurrió un error inesperado','Por favor recargue la página','error');</script>";
    


    var textoAlerta;
    if(tipo==="save"){
        textoAlerta="Los datos que enviaras quedaran almacenados en el sistema";
    }else if(tipo==="delete"){
        textoAlerta="Los datos serán eliminados completamente del sistema";
    }else if(tipo==="update"){
        textoAlerta="Los datos del sistema serán actualizados";
    }else{
        textoAlerta="Quieres realizar la operación solicitada";
    }


    swal({
        title: "¿Estás seguro?",   
        text: textoAlerta,   
        type: "question",   
        showCancelButton: true,     
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function () {
        edadx=obteneredad();
        $.ajax({
            method: metodo,
            url: accion,
            data: { pacnombre: $("#pacnombre").val(), pacapellido: $('#pacapellido').val(),
                    pacsexo: $('#pacsexo').val(),pacfecha : $('#pacfecha').val()
                    ,pacdui : $('#pacdui').val(),pacdireccion : $('#pacdireccion').val()
                    ,paccorreo : $('#paccorreo').val(),pactelefonop : $('#pactelefonop').val()
                    ,pactelefonos : $('#pactelefonos').val(),pacfecha : $('#pacfecha').val()
                    ,resnombre: $("#resnombre").val(), resapellido: $('#resapellido').val()
                    ,resrelacion: $("#resrelacion").val(), restelefonop: $('#restelefonop').val() 
                    ,restelefonos: $('#restelefonos').val()
                    ,edad: edadx
                    ,resdui: $("#resdui").val(),accion : tipo  }
          })
            .done(function( msg ) {
              $("#respuesta").html(msg);
              actualizardatos();
            });
        return false;
    });
}

function actualizardatos(){


    $.ajax({
        method: "POST",
        url: "http://localhost/SICMEDIC/ajax/pacienteAjax.php",
        data: { accion : "alltabla"  }
      })
        .done(function( msg ) {
            cancelar();
        $('#modal-rgpaciente').modal('hide');
          $("#tabla").html(msg);
        });

}





    





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
        endDate: $('#fechaactual').val()
    });

    $.mask.definitions['~'] = '[+-]';

    $('.telefono').mask('9999-9999');
    $('.dui').mask('99999999-9');
    $('.input-mask-date').mask('99/99/9999');
    
    

});