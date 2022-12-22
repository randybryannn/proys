<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Assets/css/styles.css">
    <link rel="stylesheet" href="Assets/css/boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/css/all.min.css">
    <link rel="stylesheet" href="Assets/css/fontawesome/fontawesome.min.css">
    <title><?php echo $data['page_name']; ?></title>
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
        <nav id="sidebar" class="shadow">
            <a href="dashboard" style="text-decoration: none;color:#000;">
                <div class="d-flex pt-2 pl-2">
                    <img src="Assets/img/uni_gray_xs.png" alt="" class="m-0 pl-1 pr-2" style="height:45px;">
                    <div class="d-flex flex-column">
                        <span class="d-block">UNI EARPFIM</span>
                        <span class="d-block" style="font-size: 12px;">PRACTICANTE</span>
                    </div>
                </div>
            </a>
            <ul class="list-unstyled mt-4">
                <li class="active limain">
                    <a href="#pageGeneral" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>General</a>
                    <ul class="collapse list-unstyled bgelements" id="pageGeneral">
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Aula Virtual FM</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mi horario de Clases</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Informacion Docente</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mis Cursos Asignados</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Tutoria Alumnos</a>
                        </li>
                        <li>
                            <a href="attendance"><i class="fab fa-slack-hash mr-2"></i>Asistencia</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Cargar Notas ORCE</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Biblioteca Virtual</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Mi disponibilidad</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Reclamo del reclamo docente</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Correcion de Notas</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Ayuda en Aula</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-slack-hash mr-2"></i>Aula Virtual Titulacion</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageAdmin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Administrador</a>
                    <ul class="collapse list-unstyled bgelements" id="pageAdmin">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageAcreditacion" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Acreditacion FIM</a>
                    <ul class="collapse list-unstyled bgelements" id="pageAcreditacion">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageVirtual" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Virtual</a>
                    <ul class="collapse list-unstyled bgelements" id="pageVirtual">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li class="limain">
                    <a href="#pageDocAcad" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-business-time mr-2"></i>Documentos Academicos</a>
                    <ul class="collapse list-unstyled bgelements" id="pageDocAcad">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Page Content -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info btnavbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </nav>
            <main class="mdl-layout__content d-flex">
                <div class="mt-2 col-lg-11 col-12 col-sm-12 mx-auto" id="contenedor-seccion">
                    <div class="mx-auto col-12">
                        <!--FIRST DIV-->
                        <div class="col-12 mt-3 shadow-sm bg-light rounded color-mode">
                            <div class="col-12 d-flex justify-content-center p-2">
                                <div class="opcview">
                                    <input type="checkbox" name="mode-view" id="mode-view">
                                </div>
                                <div class="d-flex flex-column w-100 ml-5">
                                    <div class="semester__title">
                                        <strong>Resumen de Asistencia del Semestre Actual</strong>
                                    </div>
                                    <div class="semester__statistics">
                                        <strong>P:</strong>
                                        <span id="sem-statistics-punctual"></span>
                                        <strong>T:</strong>
                                        <span id="sem-statistics-delay"></span>
                                        <strong>F:</strong>
                                        <span id="sem-statistics-absence"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--SECOND DIV-->
                        <div class="col-12 mt-3 p-3 shadow-sm bg-light rounded color-mode">
                            <div class="col-12 d-flex container-semester-hour">
                                <div class="datesemester">
                                    <strong>Semestre:</strong>
                                    <select id="list__semester">
                                        <?php
                                        foreach ($data['semestres'] as $value) { ?>
                                            <option value="<?php echo $value['semestre']; ?>"><?php echo $value['semestre']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="hoursemester ml-3">
                                    <strong>Hora:</strong>
                                    <span id="time_now"></span>
                                </div>
                            </div>
                        </div>
                        <!--THIRD DIV-->
                        <div class="col-12 mt-3 p-3 shadow-sm bg-light rounded text-center color-mode">
                            <div class="d-flex flex-wrap">
                                <div class="col-sm d-flex flex-column mt-1 mb-1">
                                    <div>
                                        <strong>Marcar mi asistencia:</strong>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-entry-teacher w-75 mt-2">
                                            <i class="fas fa-sign-in-alt"></i>
                                            <span>Entrada</span>
                                        </button>
                                        <button class="btn btn-outline-primary btn-exit-teacher w-75 mt-2">
                                            <i class="fas fa-sign-out-alt"></i>
                                            <span>Salida</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm d-flex flex-column mt-1 mb-1">
                                    <div>
                                        <strong>Asistencia de Alumnos:</strong>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-attendance-alumns w-75 mt-2">
                                            <i class="fas fa-users"></i>
                                            <span>Marcar</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm d-flex flex-column mt-1 mb-1">
                                    <div>
                                        <strong>Solicitudes de alumnos</strong>
                                    </div>
                                    <div>
                                        <button class="btn btn-outline-primary btn-requests w-75 mt-2">
                                            <i class="fas fa-file-alt"></i>
                                            <span>Ver Solicitudes</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--FOURTH DIV-->
                        <div class="col-12 mt-3 shadow-sm bg-light rounded text-center color-mode">
                            <div class="col-12 text-center pt-3">
                                <strong>Informacion sobre asistencias de alumnos:</strong>
                            </div>
                            <div class="d-flex flex-column flex-wrap pl-3 pr-3">
                                <div class="d-flex flex-wrap">
                                    <div class="col-sm align-items-center">
                                        <button class="btn btn-outline-info btn-punctual w-75 mt-3">
                                            <i class="fas fa-user-check"></i>
                                            <span>Puntual</span>
                                        </button>
                                    </div>
                                    <div class="col-sm align-items-center">
                                        <button class="btn btn-outline-info btn-delay w-75 mt-3">
                                            <i class="fas fa-user-clock"></i>
                                            <span>Tardanza</span>
                                        </button>
                                    </div>
                                    <div class="col-sm align-items-center">
                                        <button class="btn btn-outline-info btn-absence w-75 mt-3">
                                            <i class="fas fa-user-times"></i>
                                            <span>Falta</span>
                                        </button>
                                    </div>
                                    <div class="col-sm align-items-center">
                                        <button class="btn btn-outline-info btn-unknown w-75 mt-3">
                                            <i class="fas fa-question-circle"></i>
                                            <span>Desconocido</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm mb-3">
                                    <button class="btn btn-outline-warning btn-report w-100 mt-3 mx-auto">
                                        <i class="fas fa-book"></i>
                                        <span>Mostrar reporte</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--FIFTH DIV-->
                        <div class="col-12 mt-3 shadow-sm bg-light rounded color-mode">
                            <!-- Generados-->
                            <button class="w-100 btn btn-outline-secondary btn-data-month w-100 m-2" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-clipboard-list"></i>
                                <span>OCTUBRE 20222</span>
                            </button>
                            <div class="collapse pb-2" id="collapseExample1">
                                <div class="card card-body container-info-semester">
                                    <div class="d-flex justify-content-center">
                                        <div class="w-50">
                                            <canvas id="myChartMonths1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="w-100 btn btn-outline-secondary btn-data-month w-100 m-2" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-clipboard-list"></i>
                                <span>NOVIEMBRE 20222</span>
                            </button>
                            <div class="collapse pb-2" id="collapseExample2">
                                <div class="card card-body container-info-semester">
                                    <div class="d-flex justify-content-center">
                                        <div class="w-50">
                                            <canvas id="myChartMonths2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </main>
        </div>
    </div>
    </div>
    <?php require_once('Views/modals/modal.attendance.php'); ?>
    <?php require_once('Views/modals/modal.punctual.php'); ?>
    <?php require_once('Views/modals/modal.delay.php'); ?>
    <?php require_once('Views/modals/modal.absence.php'); ?>
    </div>
    <script src="Assets/js/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="Assets/js/boostrap/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="Assets/js/for.preview.js"></script>
    <script src="Assets/js/funciones.js"></script>
    <script src="Assets/js/for.modals.js"></script>
</body>

</html>