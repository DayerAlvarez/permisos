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
  <?php echo renderContentHeader("Lista de Horarios", "Inicio", SERVERURL . "views"); ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="row">
                <div class="col-md-6">Horarios</div>
                <div class="col-md-6 text-right"><a href="./registra-horario" class="btn btn-sm btn-primary">Registrar</a></div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Día</th>
                      <th>Hora de Entrada</th>
                      <th>Hora de Salida</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Lunes</td>
                      <td>08:00 AM</td>
                      <td>05:00 PM</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Martes</td>
                      <td>08:00 AM</td>
                      <td>05:00 PM</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Miércoles</td>
                      <td>08:00 AM</td>
                      <td>05:00 PM</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Jueves</td>
                      <td>08:00 AM</td>
                      <td>05:00 PM</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Viernes</td>
                      <td>08:00 AM</td>
                      <td>05:00 PM</td>
                    </tr>
                  </tbody>
                  <tfoot></tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Aquí el contenido a mostrar -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
// Incluye las últimas 2 secciones ASIDE + FOOTER y <SCRIPT>
require_once "../includes/footer.php";
?>

</body>

</html>
