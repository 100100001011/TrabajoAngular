<!DOCTYPE html>
<html lang="en">

<head>

    <!-- BOOTSTARP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        .file {
            visibility: hidden;
            position: absolute;
        }

        textarea {
            resize: none;
        }

        .divbotones {
            margin: 1rem;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- TABLA RESULTADOS =====> -->
    <section id="1">
        <div class="container">
            <div class="form-group col-md-12">
                <div class="card-header">
                    <h4 align="center">Modulo Empleados</h4>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="inp_buscarNombre" placeholder="Buscar Nombre ">
                </div>
                <div class="form-group col-md-4">
                    <label>Cedula</label>
                    <input type="text" class="form-control" id="inp_buscarCedula" placeholder="Buscar C.I">
                </div>
                <div class="form-group col-md-4">
                    <br>
                    <button id="btBuscar" type="button" class="btn btn-primary">Buscar</button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Cedula</th>
                                <th class="text-center">Cargo</th>
                            </tr>
                        </thead>
                        <tbody id="datos_tablas">
                        </tbody>
                    </table>
                </div>
                <div class="form-group col-md-12">
                    <button id="btInsertar" type="button" class="btn btn-success">Crear</button>
                    <button id="btReporte" type="button" class="btn btn-warning">Reporte</button>
                </div>
            </div>
    </section>
    <!-- <====================== -->
    <!-- FORMULARIO EMPLEADO =====> -->
    <section id='2'>
        <div class="container">
            <div role="tabpanel">
                <div class="card-header">
                    <h4 align="center">Actualizar Datos</h4>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"">
                    <a class=" nav-link active" href="#D_Personales" data-toggle="tab">Datos Personales</a>
                    </li>
                    <li>
                        <a class="nav-link " href="#D_Laborables" data-toggle="tab">Datos Laborables</a>
                    </li>
                </ul>
                <form id="F_Actualizar" action="javascript:Actualizar();" method="post" class="was-validated">
                    <div class="card-body">
                        <div class="tab-content">
                            <!--Etiqueta-->
                            <div role="tabpanel" class="tab-pane active" id="D_Personales">
                                <!--Formulario-->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Nombres</label>
                                        <input type="text" class="form-control" id="inp_nombres" placeholder="Nombres" maxlength="50" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Apellidos</label>
                                        <input type="text" class="form-control" id="inp_apellidos" placeholder="Apellidos" maxlength="50" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cedula</label>
                                        <input class="form-control" id="inp_cedula" placeholder="Cedula" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Provincia</label>
                                        <select class="form-control" id="inp_provincia1">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fecha de nacimientos</label>
                                        <input type="date" class="form-control" id="inp_fecha" placeholder="aaaa-mm-dd" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="inp_email" placeholder="Email" required maxlength="50">
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Observaciones</label>
                                        <textarea class="form-control" id="inp_observacion1" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Fotografia</label>
                                        <input type="file" name="img[]" class="file" accept="image/*" id="file_image">
                                        <div>
                                            <img src="" width="100" height="100" id="prevista" class="img-circle">
                                            <button type="button" class="browse btn btn-primary">Cargar Imagen</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Etiqueta-->
                            <div role="tabpanel" class="tab-pane" id="D_Laborables">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Fecha de ingreso</label>
                                        <input type="date" class="form-control" id="inp_fechaingreso" placeholder="aaaa-mm-dd" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Cargo</label>
                                        <input type="text" class="form-control" id="inp_cargo" placeholder="Cargo" maxlength="20" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Departamento:</label>
                                        <input type="text" class="form-control" id="inp_departamento" placeholder="Departamento" maxlength="20" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Provincia</label>
                                        <select class="form-control" id="inp_provincia2">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sueldo:</label>
                                        <input type="number" step="any" class="form-control" id="inp_sueldo" placeholder="USD" maxlength="10" required>
                                        <div class="invalid-feedback">Campo requerido.</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Jornada Parcial:</label>
                                        <br>
                                        <div class="form-group row-md-4">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jornadaS" id="rad_jornada1" value="S">
                                                <label class="form-check-label">Si</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="jornadaN" id="rad_jornada2" value="N">
                                                <label class="form-check-label">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputAddress2">Observaciones</label>
                                        <textarea class="form-control" id="inp_obser" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <button id="btActualizar" type="submit" class="btn btn-info">Actualizar</button>
                                </div>
                </form>
            </div>
            <div class="divbotones">
                <button id="btSalir" type="button" class="btn btn-danger">Salir</button>
            </div>
        </div>
    </section>
    <!-- <========================= -->
    <script>
        var idUp;
        //=======>JQUERY
        $('#btSalir').click(function(e) {
            location.reload();
        });
        //AL CARGAR LA PAGINA
        window.onload = function() {

            Buscar_Mostrar();
            provincia();
            $('#2').hide();
        }
        //Cambiar de archivo
        $('#btInsertar').click(function(e) {
            $(location).attr('href', './View/Ingreso.php');
        });
        $('#btReporte').click(function(e) {
            $(location).attr('href', './View/Reporte.php');
        });
        //Cargar Imagen ficha
        $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
        $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("prevista").src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        });
        //Clic btn buscar
        $('#btBuscar').click(function(e) {
            Buscar_Mostrar();
        });
        //Vaciar la tabla
        $("#datos_tablas").empty();
        //<=========
    

        

    


    </script>
</body>

</html>