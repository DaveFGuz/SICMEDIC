var examenes = new Array();
var medicamentos = new Array();
var json = "";
var jsonArray;

function agregarmedicamento() {

}
function quitarmedicamento() {

}
function validardatos() {
  var presion =
    document.getElementById("presion1").value +
    "/" +
    document.getElementById("presion2").value;
    
  var frecuencia = document.getElementById("frecuencia");
  var temperatura = document.getElementById("temperatura");
  var peso = document.getElementById("peso");
  var estatura = document.getElementById("estatura");
  var estatura = document.getElementById("sintomas");
  var estatura = document.getElementById("diagnostico");
  var estatura = document.getElementById("observacion");
  var estatura = document.getElementById("examenes");

  alert(presion);

  $.ajax({
    method: "POST",
    url: "http://localhost/SICMEDIC/ajax/consultaAjax.php",
    data: { imagenes: jsonArray, accion: "save" }
  })
    .done(function(msg) {})
    .error(function(msg) {
      swal({
        title: "Ocurrio un error",
        text: "Sin Respuesta del servidor",
        type: "error",
        confirmButtonText: "Aceptar"
      }).then(function() {
        location.reload();
      });
    });
}
