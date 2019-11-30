jQuery(function($) {
  var dir = $("input[name='dir']").val();

  $("button[name='botonlogin']").click(function() {
    var usuario = $("input[name='usuario']");
    var clave = $("input[name='clave']");

    var errorusuario = $("#usuario-error");
    var errorclave = $("#clave-error");

    if (usuario.val() == "") {
      errorusuario.css("display", "block");
    } else {
      errorusuario.css("display", "none");
    }
    if (clave.val() == "") {
      errorclave.css("display", "block");
    } else {
      errorclave.css("display", "none");
    }

    if (usuario.val() != "" && clave.val() != "") {
      EnvioaJax();
    }
  });

  $("#btnenviar").click(function() {
    var correo = $("input[name='correousuario']").val();

   

    $.ajax({
      method: "POST",
      url: dir + "ajax/loginAjax.php",
      data: {
        correo: correo,
        accion: "recuperar"
      }
    })
      .done(function(msg) {
        $("#respuesta").html(msg);
      })
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
  });

  function EnvioaJax() {
    var usuario = $("input[name='usuario']").val();
    var clave = $("input[name='clave']").val();
    var cargando = $("#cargando");

    cargando.css("display", "block");

    $.ajax({
      method: "POST",
      url: dir + "ajax/loginAjax.php",
      data: {
        usuario: usuario,
        clave: clave,
        accion: "loguear"
      }
    })
      .done(function(msg) {
        cargando.css("display", "none");
        $("#respuesta").html(msg);
      })
      .error(function(msg) {
        cargando.css("display", "none");
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
});
