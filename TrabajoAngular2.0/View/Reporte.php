

<div class="card">
    <div class="card-header">
        <div class="form-group col-md-12 ">
            <h3 align="center">Reporte Empleado</h3>

        </div>
    </div>
    <div class="card-body">
        <div class="form-group col-md-12 ">
            <!--class="table-bordered"-->
            <table id="Reporte" class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-center">
                            <a ng-click="columna='Nombre';reves = !reves ;">Nombre </a>
                        </th>

                        <th class="text-center">
                            <a ng-click="columna='Cedula';reves = !reves ;">Cedula </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Provincia_1';reves = !reves ;">Provincia </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Fecha_Nacimiento';reves = !reves ;">Fecha Nacimiento </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Email';reves = !reves ;">Email </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Observaciones_1';reves = !reves ;">Observaciones </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Fecha_ingreso';reves = !reves ;">Fecha Ingreso </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Cargo';reves = !reves ;">Cargo </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Departamente';reves = !reves ;">Departamento </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Provincia_2';reves = !reves ;">Provincia </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Sueldo';reves = !reves ;">Sueldo </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Jornada';reves = !reves ;">Jornada </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="columna='Observaciones_2';reves = !reves ;">Observaciones </a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="i in arrEmpleados | orderBy: columna :reves">

                        <td class="text-rigth">{{i.Nombre +' '+ i.Apellido}}</td>
                        <td class="text-rigth">{{i.Cedula}}</td>
                        <td class="text-rigth">{{i.Provincia_1}}</td>
                        <td class="text-rigth">{{i.Fecha_Nacimiento}}</td>
                        <td class="text-rigth">{{i.Email}}</td>
                        <td class="text-rigth">{{i.Observaciones_1}}</td>
                        <td class="text-rigth">{{i.Fecha_ingreso}}</td>
                        <td class="text-rigth">{{i.Cargo}}</td>
                        <td class="text-rigth">{{i.Departamente}}</td>
                        <td class="text-rigth">{{i.Provincia_2}}</td>
                        <td class="text-rigth">{{i.Sueldo}}</td>
                        <td class="text-rigth">{{i.Jornada}}</td>
                        <td class="text-rigth">{{i.Observaciones_2}}</td>

                    </tr>

                </tbody>
            </table>
        </div>
        <div class="divbotones">


            <button id="btSalir" type="submit" class="btn btn-danger">Salir</button>
        </div>
    </div>


    <script>
        $('#btSalir').click(function(e) {
            $(location).attr('href', '#!/');
        });
    </script>