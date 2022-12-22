<div class="modal fade bd-example-modal-lg" id="modal-attendance-alumns" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ASISTENCIA DE ALUMNOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover" id="tbattendence">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NOMBRE COMPLETO</th>
                            <th scope="col">ESTADO</th>
                        </tr>
                    </thead>
                    <tbody id="bodytbattendence">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-attendance-alumns-confirm">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>