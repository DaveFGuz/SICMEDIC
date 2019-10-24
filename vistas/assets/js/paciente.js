

function soloNumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
return /\d/.test(String.fromCharCode(keynum));

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

jQuery(function ($) {


 function obteneredad(){
    var anio=document.getElementById("fechaactual").value;
    var pacanio=document.getElementById("pacfecha").value.substr(6,9);

    var edad=parseInt(anio,10)-parseInt(pacanio,10);

    return edad;
    
}

$("#pacfecha" ).change(function() {

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
  if(obteneredad()<18){
    document.getElementById("pacdui").value="";
    ob1.css("visibility","visible");
    ob2.css("visibility","visible");
    ob3.css("visibility","visible");
    document.getElementById("pacdui").disabled=true;
    document.getElementById("resnombre").disabled=false;
    document.getElementById("resapellido").disabled=false;
    document.getElementById("resrelacion").disabled=false;
    document.getElementById("restelefonop").disabled=false;
    document.getElementById("resdui").disabled=false;
    document.getElementById("restelefonos").disabled=false;
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
    }else{
        nombre.css("border-color","");
        alert.css("visibility","hidden");
    }

    if(apellido.val()==""){
        apellido.css("border-color","red");
        alert.css("visibility","visible");
    }else{
        apellido.css("border-color","");
        alert.css("visibility","hidden");
    }

    if(sexo.val()==""){
        sexo.css("border-color","red");
        alert.css("visibility","visible");
    }else{
        sexo.css("border-color","");
        alert.css("visibility","hidden");
    }

    if(fecha.val()==""){
        fecha.css("border-color","red");
        alert.css("visibility","visible");
        document.getElementById("pacdui").disabled=true;
    }else{
        fecha.css("border-color","");
        alert.css("visibility","hidden");
        document.getElementById("pacdui").disabled=false;
    }


    if(fecha.val()!=""){
    if(resnombre.val()=="" && obteneredad()<18  ){
        resnombre.css("border-color","red");
        alert.css("visibility","visible")
        
    }else{
        resnombre.css("border-color","");
        alert.css("visibility","hidden");
    }
    if(resapellido.val()=="" && obteneredad()<18 ){
        resapellido.css("border-color","red");
        alert.css("visibility","visible");
    }else{
        resapellido.css("border-color","");
        alert.css("visibility","hidden");
    }
    if(relacion.val()=="" && obteneredad()<18 ){
        relacion.css("border-color","red");
        alert.css("visibility","visible");
        
    }else{
        relacion.css("border-color","");
        alert.css("visibility","hidden");
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





     

    
 



    function enviardatos(){

    var pacnombre=$("#pacnombre");
    var pacapellido=$("#pacapellido");
    var pacsexo=$("#pacsexo");
    var pacfecha=$("#pacfecha");

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
                    ,pactelefonos : $('#pactelefonos').val(),pacfecha : "1995-05-05"
                    ,resnombre: $("#resnombre").val(), resapellido: $('#resapellido').val()
                    ,resrelacion: $("#resrelacion").val(), restelefonop: $('#restelefonop').val() 
                    ,restelefonos: $('#restelefonos').val()
                    ,edad: edadx
                    ,resdui: $("#resdui").val(),accion : tipo  }
          })
            .done(function( msg ) {
              $("#respuesta").html(msg);
            });
        return false;
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
        todayHighlight: true
    });

    $.mask.definitions['~'] = '[+-]';

    $('.input-mask-date').mask('99/99/9999');

});