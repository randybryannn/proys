$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    
    /*======================================
       Asistencia de maestro : ENTRADA
    ======================================*/
    $('.btn-entry-teacher').click(function () { 
        $(".btn-entry-teacher").hide()
        $(".btn-exit-teacher").show()
        Swal.fire({
            icon: "success",
            title: "Entrada registrada correctamente",
            text: "Buen Dia!",
        })
    })

    /*======================================
        Asistencia de maestro : SALIDA
    =====================================*/
    $('.btn-exit-teacher').click(function () { 
        let horaSalida = 20
        let myDate = new Date()
        let hours = myDate.getHours()
        let minutes = myDate.getMinutes()

        if(hours >= 20 || (hours == horaSalida-1 && minutes > 50)){

            $(".btn-exit-teacher").hide()
            $(".btn-entry-teacher").show()
            Swal.fire({
                icon: "success",
                title: "Salida registrada correctamente",
                text: "Hasta la proxima!",
            })
        }else{
            Swal.fire({
                icon: "error",
                title: "Error todavia no puede marcar su salida",
                text: "Debe cumplir sus horas!",
            })
        }        
    })
})
