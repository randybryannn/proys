$(document).ready(function () {
    /*=====================================
      Abrir Modal de Asitencia de Alumnos
    =======================================*/
    $(".btn-attendance-alumns").click(function () {
        
        let url = 'views/js/data-alumns.json'
        fetch(url)
        .then(response => response.json())
        .then(data => {
            let body = ''
            let longData = data.length
            for (let i = 0; i < longData; i++) {
                body += `<tr><th scope="row">${i+1}</th>`+
                `<td class="attendance_alumn_name">${data[i].lastname_alumn} ${data[i].name_alumn}</td>`+
                `<td><div class="d-flex justify-content-around">`+
                `<div><input type="radio" class="rb-asistencia" name="rb-asistencia${i+1}" value="1" id="rb-asistencia${i+1}">`+
                `<span class="rb-asistencia__icons"><i class="fas fa-user-check text-success"></i></span></div>`+
                `<div><input type="radio" class="rb-asistencia" name="rb-asistencia${i+1}" value="2" id="rb-asistencia${i+1}">`+
                `<span class="rb-asistencia__icons"><i class="fas fa-user-clock text-warning"></i></span></div>`+
                `<div><input type="radio" class="rb-asistencia" name="rb-asistencia${i+1}" value="3" id="rb-asistencia${i+1}">`+
                `<span class="rb-asistencia__icons"><i class="fas fa-user-times text-danger"></i></span></div>`+
                `</div></td></tr>`
                document.getElementById('bodytbattendence').innerHTML = body
            }
            console.log(data)
        })
        .catch(error => console.log(error))
        
        $("#modal-attendance-alumns").modal()
    })

    /*=======================================
      Guardar Datos de Asistencia Alumnos
    =======================================*/
    $(document).on('click','.btn-attendance-alumns-confirm', function () {
        // Verificar que se hayan marcados los radiobutton de cada fila
        let verificacion = true
        document.querySelectorAll("#tbattendence tbody tr").forEach(function (e) {
            if (e.querySelector("input[class=rb-asistencia]:checked") == null) {
                verificacion = false
            }
        })
        // Guardar la informacion
        if (verificacion) {
            let todayAttendance = []
            document.querySelectorAll("#tbattendence tbody tr").forEach(function (e) {
                let datarow = {
                    name: e.querySelector(".attendance_alumn_name").innerText,
                    state: e.querySelector("input[class=rb-asistencia]:checked").value
                }
                todayAttendance.push(datarow)
            })
            alumnos = todayAttendance

            console.log(alumnos)

            Swal.fire({
                icon: "success",
                title: "Asistencia registrada correctamente",
                text: "Datos guardados!",
            })
            $("#modal-attendance-alumns").modal("hide")
        } else {
            // En caso no se haya marcado todos los radiobutton
            Swal.fire({
                icon: "error",
                title: "No ha marcado todas las asistencias",
                text: "Datos no guardados!",
            })
        }
    })

    /*=======================================
      Abrir Modal de Asitencia PUNTUAL
    =======================================*/
    $(".btn-punctual").click(function () {
        loadModalTypeAttendance('#body-alumns-punctual')
        $('#modal-attendance-alumns-punctual').modal()
    })

    /*=======================================
      Abrir Modal de Asitencia TARDANZA
    =======================================*/
    $(".btn-delay").click(function () {
        loadModalTypeAttendance('#body-alumns-delay')
        $('#modal-attendance-alumns-delay').modal()
    })

    /*=======================================
      Abrir Modal de Asitencia FALTA
    =======================================*/
    $(".btn-absence").click(function () {
        loadModalTypeAttendance('#body-alumns-absence')
        $('#modal-attendance-alumns-absence').modal()
    })

    /*=============================================
        Cargar datos en tablas de INFO asistencia
    ===============================================*/
    function loadModalTypeAttendance(vid){
        const states = {
            "#body-alumns-punctual": 1,
            "#body-alumns-delay": 2,
            "#body-alumns-absence": 3,
        }
        const state = states[vid]

        $(vid).html("")

        if(alumnos.length > 0){
            let i = 1
            alumnos.forEach(element => {
                if(element.state == state){
                    var tr = `<tr>
                        <td>${i}</td>
                        <td>${element.name}</td>
                        </tr>`
                    $(vid).append(tr)
                    i++
                }
            })
        }else{
            $(vid).append('<p>No hay registros</p>')
        }
    }
})