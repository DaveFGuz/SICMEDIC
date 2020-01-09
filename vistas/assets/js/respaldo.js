var dir = $("input[name='dir']").val();

function backup() {
    var op = "Hola";
    swal({
        title: "¿Crear respaldo de los datos actuales?",
        text: '',
        type: "question",
        showCancelButton: true,
        confirmButtsonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function() {

        $.ajax({
            data: op,
            url: dir + "ajax/myphp-backup.php",
            type: 'POST',
            beforeSend: function() {
                let timerInterval
                swal({
                    title: '¡Respaldando Base de datos!',
                    html: 'Por favor espere <strong></strong>.',
                    timer: 2000,
                    onBeforeOpen: () => {
                        swal.showLoading()
                        timerInterval = setInterval(() => {
                            swal.getContent().querySelector('strong')
                                .textContent = swal.getTimerLeft()
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.timer
                    ) {
                        console.log('I was closed by the timer')
                    }
                })
            },
            success: function(response) {
                // alert(response);
                sweetGuardo("Se hizo un respaldo de la BD exitosamente.");
            }
        });
    });

}

function restore(archivos) {
    swal({
        title: "¿Estás seguro de restaurar?",
        text: 'podrian perderse datos no guardados',
        type: "warning",
        showCancelButton: true,
        confirmButtsonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function() {
        $.ajax({
            data: { archivo: archivos },
            url: dir + 'ajax/myphp-restore.php',
            type: 'POST',
            beforeSend: function() {
                let timerInterval
                swal({
                    title: '¡Restaurando Base de datos!',
                    html: 'Por favor espere <strong></strong>.',
                    timer: 7000,
                    onBeforeOpen: () => {
                        swal.showLoading()
                        timerInterval = setInterval(() => {
                            swal.getContent().querySelector('strong')
                                .textContent = swal.getTimerLeft()
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.timer
                    ) {
                        console.log('Listo')
                    }
                })
            },
            success: function(response) {
                // alert(response);
                sweetGuardo("Se restauró la base de datos exitosamente.");
            }
        });
    });
}

function eliminar(archivos) {

    swal({
        title: "¿Estás seguro de eliminar este respaldo?",
        text: '',
        type: "question",
        showCancelButton: true,
        confirmButtsonText: "Aceptar",
        cancelButtonText: "Cancelar"
    }).then(function() {

        $.ajax({
            method: "POST",
            url: dir + "ajax/respaldoAjax.php",
            data: {
                archivo: archivos,
                accion: "eliminar"
            }
        }).done(function(msg) {
            $("#respuesta").html(msg);

        });

    });

}

function actualizar() {


    $.ajax({
            method: "POST",
            url: dir + "ajax/respaldoAjax.php",
            data: { accion: "alltabla" }
        })
        .done(function(msg) {

            $("#tablarespaldo").html(msg);
        });

}


function sweetGuardo(str) {
    swal(

        'Exito!',
        '' + str,
        'success'
    ).then(function() {
        location.reload();
    });
}