
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

    var edad=parseInt(anio, 10)-parseInt(document.getElementById("pacfecha").value.substr(5,9) ,10);

    console.log(edad);
}



    $("#pacnombre").keyup(function() {

        var pacnombre=$("#pacnombre");
        var pacapellido=$("#pacapellido");
        var pacsexo=$("#pacsexo");
        var pacfecha=$("#pacfecha");
        var btnenviar=$("#btnguardar");
        var alerta=$("#alerta");
    
        if(pacnombre.val()==""){
            pacnombre.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            pacnombre.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(pacfecha.val()==""||pacnombre.val()=="" || pacapellido.val()=="" || pacsexo.val()==""){
            
            document.getElementById("btnguardar").disabled=true;
            
        }else{
            document.getElementById("btnguardar").disabled=false;
            
        }
    
    
    
        
    });  

    $("#pacapellido").keyup(function() {

        var pacnombre=$("#pacnombre");
        var pacapellido=$("#pacapellido");
        var pacsexo=$("#pacsexo");
        var pacfecha=$("#pacfecha");
        var btnenviar=$("#btnguardar");
        var alerta=$("#alerta");
    
        if(pacapellido.val()==""){
            pacapellido.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            pacapellido.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(pacfecha.val() || pacnombre.val()=="" || pacapellido.val()=="" || pacsexo.val()==""){
            document.getElementById("btnguardar").disabled=true;
        }else{
            document.getElementById("btnguardar").disabled=false;
        }
    
    
    
        
    });  

    $("#pacsexo").change(function() {

        var pacnombre=$("#pacnombre");
        var pacapellido=$("#pacapellido");
        var pacfecha=$("#pacfecha");
        var pacsexo=$("#pacsexo");
        var btnenviar=$("#btnguardar");
        var alerta=$("#alerta");
    
        if(pacsexo.val()==""){
            pacsexo.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            pacsexo.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(pacfecha.val()=="" ||pacnombre.val()=="" || pacapellido.val()=="" || pacsexo.val()==""){
            document.getElementById("btnguardar").disabled=true;
        }else{
            document.getElementById("btnguardar").disabled=false;
        }
    
    
    
        
    });  

    $("#pacfecha").keyup(function() {

        var pacnombre=$("#pacnombre");
        var pacfecha=$("#pacfecha");
        var pacapellido=$("#pacapellido");
        var pacsexo=$("#pacsexo");
        var btnenviar=$("#btnguardar");
        var alerta=$("#alerta");
    
        if(pacfecha.val()==""){
            pacfecha.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            pacfecha.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(pacfecha.val()=="" || pacnombre.val()=="" || pacapellido.val()=="" || pacsexo.val()==""){
            document.getElementById("btnguardar").disabled=true;
        }else{
            document.getElementById("btnguardar").disabled=false;
        }
    
    
    
        
    });  

    $("#pacfecha").change(function() {

        var pacnombre=$("#pacnombre");
        var pacfecha=$("#pacfecha");
        var pacapellido=$("#pacapellido");
        var pacsexo=$("#pacsexo");
        var btnenviar=$("#btnguardar");
        var alerta=$("#alerta");
    
        if(pacfecha.val()==""){
            pacfecha.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            pacfecha.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(pacfecha.val()=="" || pacnombre.val()=="" || pacapellido.val()=="" || pacsexo.val()==""){
            document.getElementById("btnguardar").disabled=true;
        }else{
            document.getElementById("btnguardar").disabled=false;
        }
    
    
    
        
    });  

    $("#ennombre").change(function() {

        obteneredad();

        var ennombre=$("#ennombre");
        var enapellido=$("#encapellido");
        var enrelacion=$("#enquees");
        var endui=$("#endui");
        
        var btnenviar=$("#btnguardar");

        var alerta=$("#alerta");
    
        if(ennombre.val()=="" && obteneredad()<18){
            pacfecha.css("border-color","red");
            alerta.css("visibility","visible");
        }else{
            ennombre.css("border-color","");
            alerta.css("visibility","hidden");
        }
        if(enapellido.val()=="" || enrelacion.val()=="" || endui.val()==""){
            document.getElementById("btnguardar").disabled=true;
        }else{
            document.getElementById("btnguardar").disabled=false;
        }
    
    
    
        
    });  

    $( "#btnguardar" ).click(function() {

    var pacnombre=$("#pacnombre");
    var pacapellido=$("#pacapellido");
    var pacsexo=$("#pacsexo");
    var pacfecha=$("#pacfecha")

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
        $.ajax({
            method: metodo,
            url: accion,
            data: { pacnombre: $("#pacnombre").val(), pacapellido: $('#pacapellido').val(),
                    pacsexo: $('#pacsexo').val(),pacfecha : $('#pacfecha').val()
                    ,pacdui : $('#pacdui').val(),pacdireccion : $('#pacdireccion').val()
                    ,paccorreo : $('#paccorreo').val(),pactelefonop : $('#pactelefonop').val()
                    ,pactelefonos : $('#pactelefonos').val(),pacfecha : "1995-05-05" ,accion : tipo  }
          })
            .done(function( msg ) {
              $("#respuesta").html(msg);
            });
        return false;
    });





    
});




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