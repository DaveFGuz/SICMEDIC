var i = 0;
var arraymedicamentos = [];
var dir = document.getElementsByName("dir").value;

function agregar() {
  i++;
  var table = document.getElementById("tablamedicamento");
  var combo = document.getElementById("medicamento");
  var selected = combo.options[combo.selectedIndex].text;
  var row = table.insertRow(i);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  arraymedicamentos.push(document.getElementById("medicamento").value);
  cell1.innerHTML = selected;
  cell2.innerHTML =
    "<input type='text' style='width: 90%' value='1' class='form-control' name='cantidad'>";
  cell3.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='dosis'>";
  cell4.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='frecuencia'>";
  cell5.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='duracion'>";
  cell6.innerHTML =
    " <a class='info tooltip-info' onclick='quitar(" +
    i +
    ")'data-rel='tooltip' title='Quitar'><i class='ace-icon fa fa-trash bigger-190'></i></a>";
}

function agregaresc() {
  i++;
  var table = document.getElementById("tablamedicamento");

  var row = table.insertRow(i);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  arraymedicamentos.push(document.getElementById("nombremedic").value);
  cell1.innerHTML = document.getElementById("nombremedic").value;
  cell2.innerHTML =
    "<input type='text' style='width: 90%' value='1' class='form-control' name='cantidad'>";
  cell3.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='dosis'>";
  cell4.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='frecuencia'>";
  cell5.innerHTML =
    "<input type='text' style='width: 90%' class='form-control' name='duracion'>";
  cell6.innerHTML =
    " <a class='info tooltip-info' onclick='quitar(" +
    i +
    ")'data-rel='tooltip' title='Quitar'><i class='ace-icon fa fa-trash bigger-190'></i></a>";
}

function quitar() {
  if (i != 0) {
    arraymedicamentos.pop(document.getElementById("medicamento").value);

    var table = document.getElementById("tablamedicamento");
    var row = table.deleteRow(i);
    i--;
  }
}

function convertirAJson() {
  var cuenta, cantidad, mov;
  var registros = [];
  for (var c = 0; c <= i - 1; c++) {
    medicamento = arraymedicamentos[c];
    cantidad = document.getElementsByName("cantidad")[c].value;
    dosis = document.getElementsByName("dosis")[c].value;
    frecuencia = document.getElementsByName("frecuencia")[c].value;
    duracion = document.getElementsByName("duracion")[c].value;
    registros.push({
      idmedicamento: medicamento,
      cantidad: cantidad,
      dosis: dosis,
      frecuencia: frecuencia,
      duracion: duracion
    });
  }
  return JSON.stringify(registros);
}

function limpiarModal(){
  document.getElementById("formulario_consulta").reset();
  $('#modal-table').modal('hide');
}

function guardar_consulta() {
  jQuery(function($) {
    var formdata = new FormData($("#formulario_consulta")[0]);
    
    formdata.append("medicamentos",convertirAJson());
    $.ajax({
      method: "POST",
      url: dir + "ajax/consultaAjax.php",
      data: formdata,
      accion: "save",
      cache: false,
      contentType: false,
      processData: false
    }).done(function(msg) {
      $("#respuesta").html(msg);
    });
  });
}
