var $es=0;


function cancelar(){
  $('#modal-cita').modal('hide');

  document.getElementById("nombrecitado").disabled=true;
  document.getElementById("idpaciente").disabled=true;
  document.getElementById("idpaciente")[0].selected=true;
  document.getElementById("nombrecitado").value="";
  document.getElementById("horacita").value="";
  document.getElementById("fechacita").value="";

}

function pregunta(){
    
  $('#modal-pregunta').modal('show');

}

function setearvalor(valor){
  

  $('#modal-pregunta').modal('hide');
  $('#modal-cita').modal('show');
  $('#modal-cita').modal({backdrop: 'static', keyboard: false})
  if(valor==1){
  document.getElementById("idpaciente").disabled=false;
  document.getElementById("nombrecitado").disabled=true;
  es=1;
  }
  if(valor==2){
  document.getElementById("idpaciente").disabled=true;
  document.getElementById("nombrecitado").disabled=false;
  es=2;
  }
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


function validar(){

  if(document.getElementById("idpaciente").value=="" && es==1 ){
  document.getElementById("idpaciente-error").style.display="block";
  document.getElementById("idpaciente-error").innerHTML="seleccione un paciente para la cita";
  }
else{
    document.getElementById("idpaciente-error").style.display="hidden";
    document.getElementById("idpaciente-error").innerHTML="";
    }


    if(document.getElementById("nombrecitado").value=="" && es==2 ){
      document.getElementById("nombrecitado-error").style.display="block";
      document.getElementById("nombrecitado-error").innerHTML="Complete  el nombre del citado";
      }
    else{
        document.getElementById("nombrecitado-error").style.display="hidden";
        document.getElementById("nombrecitado-error").innerHTML="";
        }


        if(document.getElementById("fechacita").value=="" ){
          document.getElementById("fechacita-error").style.display="block";
          document.getElementById("fechacita-error").innerHTML="Indique la fecha de la cita ";
          }
        else{
            document.getElementById("fechacita-error").style.display="hidden";
            document.getElementById("fechacita-error").innerHTML="";
            }
            if(document.getElementById("horacita").value=="" ){
              document.getElementById("horacita-error").style.display="block";
              document.getElementById("horacita-error").innerHTML="Indique la hora de la cita ";
              }
            else{
                document.getElementById("horacita-error").style.display="hidden";
                document.getElementById("horacita-error").innerHTML="";
                }

                if(document.getElementById("nombrecitado").value!="" 
                && es==2 && document.getElementById("fechacita").value!="" 
                && document.getElementById("horacita").value!=""){
                  enviardatoscita();
                }
                if(document.getElementById("idpaciente").value!="" 
                && es==1 && document.getElementById("fechacita").value!="" 
                && document.getElementById("horacita").value!=""){
                  enviardatoscita();
                }
                
    

}


function enviardatoscita(){




  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { idpac : $("#idpaciente").val() ,
            nombrecitado : $("#nombrecitado").val()
            ,horacita : $("#horacita").val(),fechacita : $("#fechacita").val()
            ,es : es ,accion : "save"  }
  })
    .done(function( msg ) {
      cancelar

      $("#respuesta").html(msg);

      actualizartabla();

    });
}

function cambiarestadocita(idcita,estado){




  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { idcita : idcita 
           ,estado : estado
            ,accion : "cambiarestado"  }
  })
    .done(function( msg ) {
      cancelar();

      $("#respuesta").html(msg);

      actualizartabla();

    });
}




function actualizartabla(){
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { accion : "paginado"  }
  })
    .done(function( msg ) {

      $("#tablacita").html(msg);

    });
}