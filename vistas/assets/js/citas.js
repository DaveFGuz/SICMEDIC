var $es = 0;

function cancelar() {
  $("#modal-cita").modal("hide");

  document.getElementById("idpaciente")[0].selected = true;
  document.getElementById("nombrecitado").value = "";
  document.getElementById("horacita").value = "";
  document.getElementById("fechacita").value = "";
  document.getElementById("camponombre").style.display = "block";
  document.getElementById("campoid").style.display = "block";
  document.getElementById("telemos").style.display = "none";
  document.getElementById("idpaciente-error").style.display = "none";
  document.getElementById("nombrecitado-error").style.display = "none";
  document.getElementById("fechacita-error").style.display = "none";
  document.getElementById("horacita-error").style.display = "none";
  document.getElementById("telefono").style.display = "none";
  es = 0;
}

function pregunta() {
  $("#modal-pregunta").modal("show");
}

function setearvalor(valor) {
  $("#modal-pregunta").modal("hide");
  $("#modal-cita").modal({ backdrop: "static", keyboard: false });
  $("#modal-cita").modal("show");
  
  if (valor == 1) {
    document.getElementById("camponombre").style.display = "none";
    document.getElementById("campoid").style.display = "block";
    es = 1;
  }
  if (valor == 2) {
    document.getElementById("camponombre").style.display = "block";
    document.getElementById("campoid").style.display = "none";
    document.getElementById("telemos").style.display = "block";

    es = 2;
  }

  meridian = document.getElementById("horacita").value = "12:00 PM";
}

function soloLetras(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
  especiales = "8-37-39-46";

  tecla_especial = false;
  for (var i in especiales) {
    if (key == especiales[i]) {
      tecla_especial = true;
      break;
    }
  }

  if (letras.indexOf(tecla) == -1 && !tecla_especial) {
    return false;
  }
}

function validar() {
  if (document.getElementById("idpaciente").value == "" && es == 1) {
    document.getElementById("idpaciente-error").style.display = "block";
    document.getElementById("idpaciente-error").innerHTML =
      "Campo Obligatorio";
  } else {
    document.getElementById("idpaciente-error").style.display = "hidden";
    document.getElementById("idpaciente-error").innerHTML = "";
  }

  if (document.getElementById("nombrecitado").value == "" && es == 2) {
    document.getElementById("nombrecitado-error").style.display = "block";
    document.getElementById("nombrecitado-error").innerHTML =
      "Campo Obligatorio";
  } else {
    document.getElementById("nombrecitado-error").style.display = "hidden";
    document.getElementById("nombrecitado-error").innerHTML = "";
  }

  if (document.getElementById("fechacita").value == "") {
    document.getElementById("fechacita-error").style.display = "block";
    document.getElementById("fechacita-error").innerHTML =
      "Campo Obligatorio ";
  } else {
    document.getElementById("fechacita-error").style.display = "hidden";
    document.getElementById("fechacita-error").innerHTML = "";
  }
  if (document.getElementById("horacita").value == "") {
    document.getElementById("horacita-error").style.display = "block";
    document.getElementById("horacita-error").innerHTML =
      "Campo Obligatorio";
  } else {
    document.getElementById("horacita-error").style.display = "hidden";
    document.getElementById("horacita-error").innerHTML = "";
  }
  if (document.getElementById("telefono").value == "") {
    document.getElementById("telefono-error").style.display = "block";
    document.getElementById("telefono-error").innerHTML =
      "Campo Obligatorio ";
  } else {
    document.getElementById("horacita-error").style.display = "hidden";
    document.getElementById("horacita-error").innerHTML = "";
  }

  if (
    document.getElementById("nombrecitado").value != "" &&
    es == 2 &&
    document.getElementById("fechacita").value != "" &&
    document.getElementById("horacita").value != "" &&
    document.getElementById("telefono").value != ""
  ) {
    enviardatoscita();
  }
  if (
    document.getElementById("idpaciente").value != "" &&
    es == 1 &&
    document.getElementById("fechacita").value != "" &&
    document.getElementById("horacita").value != ""
  ) {
    enviardatoscita();
  }
}

function enviardatoscita() {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: {
      idpac: $("#idpaciente").val(),
      nombrecitado: $("#nombrecitado").val(),
      horacita: $("#horacita").val(),
      fechacita: $("#fechacita").val(),
      telefono: $("#telefono").val(),
      es: es,
      accion: "save"
    }
  }).done(function(msg) {
    $("#respuesta").html(msg);

    actualizartabla();
  });
}

function cambiarestadocita(idcita, estado, esta) {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { idcita: idcita, estado: estado, accion: "cambiarestado" }
  }).done(function(msg) {
    $("#respuesta").html(msg);

    actualizartabla();
  });
}

function eliminar(idcita, estado) {
  swal({
    title: "¿Estás seguro?",
    text: "La cita se Cancelar",
    type: "question",
    showCancelButton: true,
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar"
  }).then(function() {
    $.ajax({
      method: "POST",
      url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
      data: { idcita: idcita, estado: 0, accion: "cambiarestado" }
    }).done(function(msg) {
      $("#respuesta").html(msg);

      actualizartabla();
    });
  });
}

function actualizartabla() {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { accion: "paginado" ,fechaini: $("#fechaini").val() , fechafin: $("#fechafin").val() }
  }).done(function(msg) {
    $("#tablacita").html(msg);
  });
}

function paginador(pagina) {
  var porpagina = document.getElementById("porpagina").value;
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { porpagina: porpagina, pagina: pagina, accion: "paginado" }
  }).done(function(msg) {
    $("#tablacita").html(msg);
  });
}

$("#porpagina").change(function() {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { porpagina: $("#porpagina").val(), fechaini: $("#fechaini").val() , fechafin: $("#fechafin").val(), accion: "paginado" }
  }).done(function(msg) {
    document.getElementById("tablacita").innerHTML = msg;
  });
});

$("#fechaini").change(function() {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { porpagina: $("#porpagina").val(), fechaini: $("#fechaini").val() , fechafin: $("#fechafin").val() , accion: "paginado" }
  }).done(function(msg) {
    document.getElementById("tablacita").innerHTML = msg;
  });
});

$("#fechafin").change(function() {
  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/citaAjax.php",
    data: { porpagina: $("#porpagina").val(), fechaini: $("#fechaini").val() , fechafin: $("#fechafin").val() , accion: "paginado" }
  }).done(function(msg) {
    document.getElementById("tablacita").innerHTML = msg;
  });
});