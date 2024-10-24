<?php
/* Configuración de la aplicación */
require_once "../../app/config/App.php";
?>

<?php
// Incluir la cabecera de DASHBOARD y 2 secciones NAV + SIDE
require_once "../includes/header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php echo renderContentHeader("Lista de Permisos", "Inicio", SERVERURL . "views"); ?>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="row">
                <div class="col-md-6">Permisos</div>
                <div class="col-md-6 text-right">
                  <a href="./registra-permiso.php" class="btn btn-sm btn-primary">Registrar</a>
                </div>
              </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombre del Permiso</th>
                      <th>Tipo</th>
                      <th>Fecha de Creación</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Edu Estefano Olivos Marquez - Permiso de Ausencia</td>
                      <td>Sin Retorno</td>
                      <td><?php echo date('Y-m-d'); ?></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Edu Estefano Olivos Marquez - Permiso de Vacaciones</td>
                      <td>Con Retorno</td>
                      <td><?php echo date('Y-m-d', strtotime('-30 days')); ?></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Edu Estefano Olivos Marquez - Permiso por Motivos Personales</td>
                      <td>Sin Retorno</td>
                      <td><?php echo date('Y-m-d', strtotime('-60 days')); ?></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Edu Estefano Olivos Marquez - Permiso Médico</td>
                      <td>Con Retorno</td>
                      <td><?php echo date('Y-m-d', strtotime('-15 days')); ?></td>
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
// Incluir las últimas 2 secciones ASIDE + FOOTER y <SCRIPT>
require_once "../includes/footer.php";
?>

</body>

</html>