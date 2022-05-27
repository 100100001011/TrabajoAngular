    <div class="container">


        <div role="tabpanel">

            <div class="card-header">
                <h4 align="center">Ingreso de Datos</h4>
            </div>

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    
                    <a data-toggle="tab" href="" data-target="#D_Personales">Datos Personales </a>
                </li>
                <li>
                    <a data-toggle="tab" href="" data-target="#D_Laborables">Datos Laborables</a>

                </li>
            </ul>

            <form id="F_Ingreso" action="javascript:insert();" method="post" class="was-validated">
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
                                        <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" width="100" height="100" id="prevista" class="img-circle">
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
                                    <label>Departamento</label>
                                    <input type="text" class="form-control" id="inp_departamento" placeholder="Departamento" maxlength="20" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Provincia</label>
                                    <select class="form-control" id="inp_provincia2">

                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Sueldo</label>
                                    <input type="number" step="any" class="form-control" id="inp_sueldo" placeholder="USD" maxlength="10" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>


                                <div class="form-group col-md-6">
                                    <label>Jornada Parcial:</label>
                                    <br>
                                    <div class="form-group row-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jornada" id="rad_jornada1" value="S">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jornada" id="rad_jornada2" value="N" checked>
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
                                <button id="btIngresar" type="submit" class="btn btn-success">Guardar</button>

                            </div>

            </form>


        </div>

        <div class="divbotones">

            <button id="btReporte" type="button" class="btn btn-warning">Reporte</button>
            <button id="btSalir" type="button" class="btn btn-danger">Salir</button>
        </div>

    </div>


    <script>
        //=======>JQUERY

        $('#btReporte').click(function(e) {
            $(location).attr('href', '#!/Reporte');
        });

        $('#btSalir').click(function(e) {
            $(location).attr('href', '#!/');
        });


        window.onload = function() {

            provincia();

        };

        //Cargar Imagen
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
    </script>