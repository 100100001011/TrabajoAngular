{{arrayEmpleado | json}}

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
                            <a ng-click="Ordenar('nombre')">Nombre </a>
                        </th>

                        <th class="text-center">
                            <a ng-click="Ordenar('cedula')">Cedula </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('provi1')">Provincia </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('fecha1')">Fecha Nacimiento </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('email')">Email </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('obser1')">Observaciones </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('fecha2')">Fecha Ingreso </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('cargo')">Cargo </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('depart')">Departamento </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('provi2')">Provincia </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('sueldo')">Sueldo </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('jornada')">Jornada </a>
                        </th>
                        <th class="text-center">
                            <a ng-click="Ordenar('obser2')">Observaciones </a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="i in arrEmpleados | orderBy: ColumnaNombre:reverse">

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