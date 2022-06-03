
<!-- FORMULARIO EMPLEADO =====> -->
<section id='2'>
    <div class="container">
        <div role="tabpanel">
            <div class="card-header">
                <h4 align="center">Actualizar Datos</h4>
            </div>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">

                    <a data-toggle="tab" href="" data-target="#D_Personales">Datos Personales </a>
                </li>
                <li>
                    <a data-toggle="tab" href="" data-target="#D_Laborables">Datos Personales </a>

                </li>
            </ul>
            <form ng-submit="Guardar()" class="was-validated">
                <div class="card-body">
                    <div class="tab-content">
                        <!--Etiqueta-->
                        <div role="tabpanel" class="tab-pane active" id="D_Personales">
                            <!--Formulario-->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nombres</label>
                                    <input type="text" class="form-control" ng-model="arrayEmpleado.Nombre" id="inp_nombres" placeholder="Nombres" maxlength="50" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" ng-model="arrayEmpleado.Apellido" id="inp_apellidos" placeholder="Apellidos" maxlength="50" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Cedula</label>
                                    <input class="form-control" ng-model="arrayEmpleado.Cedula" id="inp_cedula" placeholder="Cedula" maxlength="10" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label>Provincia</label>
                                    <select class="form-control" ng-model="arrayEmpleado.Provincia_1" id="inp_provincia1">
                                        <option label="Please Select"></option>
                                        <option ng-repeat="i in arrayProvincias" value="{{i.provincia}}">
                                            {{i.provincia}}
                                        </option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Fecha de nacimientos</label>
                                    <input type="date" class="form-control" ng-model="arrayEmpleado.Fecha_Nacimiento" id="inp_fecha" placeholder="aaaa-mm-dd" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" ng-model="arrayEmpleado.Email" id="inp_email" placeholder="Email" required maxlength="50">
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Observaciones</label>
                                    <textarea class="form-control" ng-model="arrayEmpleado.Observaciones_1" id="inp_observacion1" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
                                </div>
                            </div>
                        </div>
                        <!--Etiqueta-->
                        <div role="tabpanel" class="tab-pane" id="D_Laborables">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Fecha de ingreso</label>
                                    <input type="date" class="form-control" ng-model="arrayEmpleado.Fecha_ingreso" id="inp_fechaingreso" placeholder="aaaa-mm-dd" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Cargo</label>
                                    <input type="text" class="form-control" ng-model="arrayEmpleado.Cargo" id="inp_cargo" placeholder="Cargo" maxlength="20" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Departamento:</label>
                                    <input type="text" class="form-control" ng-model="arrayEmpleado.Departamente" id="inp_departamento" placeholder="Departamento" maxlength="20" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label>Provincia</label>
                                    <select class="form-control" ng-model="arrayEmpleado.Provincia_2" id="inp_provincia1">
                                        <option label="Please Select"></option>
                                        <option ng-repeat="i in arrayProvincias" value="{{i.provincia}}">
                                            {{i.provincia}}
                                        </option>
                                    </select>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sueldo:</label>
                                    <input type="number" step="any" class="form-control" string-to-number ng-model="arrayEmpleado.Sueldo" id="inp_sueldo" placeholder="USD" maxlength="10" required>
                                    <div class="invalid-feedback">Campo requerido.</div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jornada Parcial:</label>
                                    <br>
                                    <div class="form-group row-md-4">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jornadaS" ng-model="arrayEmpleado.Jornada" id="rad_jornada1" value="S">
                                            <label class="form-check-label">Si</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jornadaN" ng-model="arrayEmpleado.Jornada" id="rad_jornada2" value="N">
                                            <label class="form-check-label">No</label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputAddress2">Observaciones</label>
                                    <textarea class="form-control" ng-model="arrayEmpleado.Observaciones_2" id="inp_obser" rows="3" placeholder="Observaciones" maxlength="100"></textarea>
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
    $('#btSalir').click(function(e) {
        $(location).attr('href', '#!/');
    });


</script>