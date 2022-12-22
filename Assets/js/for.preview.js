/*=======================================
    Esconder boton salida
=======================================*/
$(".btn-exit-teacher").hide();

/*=======================================
    Funcion para mostrar Hora Actual
=======================================*/
showTime();

function showTime() {
  myDate = new Date();
  hours = myDate.getHours();
  minutes = myDate.getMinutes();
  seconds = myDate.getSeconds();
  if (hours < 10) hours = 0 + hours;
  if (minutes < 10) minutes = "0" + minutes;
  if (seconds < 10) seconds = "0" + seconds;
  $("#time_now").text(hours + ":" + minutes + ":" + seconds);
  setTimeout("showTime()", 1000);
}

/*====================================
    Agregar y/o Quitar Modo Oscuro
======================================*/
$("#mode-view").on("click", function () {
  if ($("#mode-view").is(":checked")) {
    $(".color-mode").removeClass("bg-light");
    $(".color-mode").addClass("container-oscuro");
  } else {
    $(".color-mode").removeClass("container-oscuro");
    $(".color-mode").addClass("bg-light");
  }
});

/*======================================
    Cargar Resumen de Asistencia
======================================*/
let urlSummaryAttendence = "views/js/data-summary-attendence.json";
fetch(urlSummaryAttendence)
.then((response) => response.json())
.then((data) => {
    $("#sem-statistics-punctual").text(data[0].punctual);
    $("#sem-statistics-delay").text(data[0].delay);
    $("#sem-statistics-absence").text(data[0].absence);
})
.catch((error) => console.log(error));

/*======================================
    Cargar select de Semestres
======================================*/
let urlSemesters = "views/js/data-semesters.json";
fetch(urlSemesters)
.then((response) => response.json())
.then((data) => {
    let longData = data.length;
    for (let i = 0; i < longData; i++) {
        $("#list__semester").append(`<option value="${data[i].semester}">${data[i].semester}</option>`);
    }
})
.catch((error) => console.log(error));
