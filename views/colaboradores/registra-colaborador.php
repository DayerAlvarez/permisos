<?php
/*Configuracion de la aplicacion */
require_once "../../app/config/App.php";
?>

<?php
//INCLUTE la cabecera de DASHBOARD y 2 seciones NAV + SIDE
require_once "../includes/header.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php echo renderContentHeader("Registro de colaboradores", "Lista colaborador","./lista-colaborador");?>
    <!-- /.content-header -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">Complete los datos</div>
                                    <div class="col-md-6 text-right">
                                        <a href="./lista-colaborador" class="btn btn-sm btn-primary">Mostrar lista</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Aquí puedes agregar el contenido adicional -->
                                 <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="apellidos">Apellidos</label>
                                        <input type="text" class="form-control" maxlength="40" id="apellidos" autofocus required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="apellidos">Nombres</label>
                                        <input type="text" class="form-control" maxlength="40" id="nombres"  required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="telefono">Telefono</label>
                                        <input 
                                        type="tel" 
                                        class="form-control"
                                        pattern="[0-9]+"
                                        id="telefono" 
                                        minlength="9"
                                        maxlength="9"
                                        required>
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


    <!-- Main content -->
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
//Incluye las ultimos 2 secciones ASIDE + FOOTER y <SCRIPT>
require_once "../includes/footer.php";
?>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        //Objetos


        //Funciones

        //Eventos
        document.querySelector("#Formulario-registro").addEventListener("submit", (event) => {
            event.preventDefault();

            if (confirm("¿Desea guardar?")){
                console.log("Grabado correctamente...");
            }
        })
        //Disparadores
        
    })
</script>

</body>

</html>