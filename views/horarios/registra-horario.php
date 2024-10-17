<?php
/* Configuracion de la aplicacion */
require_once "../../app/config/App.php";
?>

<?php
// Incluye la cabecera de DASHBOARD y 2 secciones NAV + SIDE
require_once "../includes/header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo renderContentHeader("Registro de Horarios", "Lista de Horarios", "./lista-horario"); ?>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="POST">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">Complete los datos del horario</div>
                                    <div class="col-md-6 text-right">
                                        <a href="./lista-horarios.php" class="btn btn-sm btn-primary">Mostrar lista</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="dia">Día</label>
                                        <select class="form-control" id="dia" required>
                                            <option value="">Seleccione un día</option>
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miércoles">Miércoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="hora_entrada">Hora de Entrada</label>
                                        <input type="time" class="form-control" id="hora_entrada" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="hora_salida">Hora de Salida</label>
                                        <input type="time" class="form-control" id="hora_salida" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-sm btn-outline-secondary" type="reset">Cancelar</button>
                                <button class="btn btn-sm btn-primary" type="submit">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
// Incluye las últimas 2 secciones ASIDE + FOOTER y <SCRIPT>
require_once "../includes/footer.php";
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Eventos
        document.querySelector("form").addEventListener("submit", (event) => {
            event.preventDefault();

            if (confirm("¿Desea guardar el horario?")) {
                // Aquí puedes agregar la lógica para enviar el formulario
                console.log("Horario grabado correctamente...");
            }
        });
    });
</script>

</body>
</html>
