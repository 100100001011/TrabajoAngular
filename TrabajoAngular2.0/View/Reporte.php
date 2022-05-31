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

                        <th class="text-center"> Cedula </th>
                        <th class="text-center">Provincia</th>
                        <th class="text-center">Fecha Nacimiento</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Observaciones</th>
                        <th class="text-center">Fecha Ingreso</th>
                        <th class="text-center">Cargo</th>
                        <th class="text-center">Departamento</th>
                        <th class="text-center">Provincia</th>
                        <th class="text-center">Suledo</th>
                        <th class="text-center">Jornada</th>
                        <th class="text-center">Observaciones</th>

                    </tr>
                </thead>
                <tbody>
                <tr ng-repeat="i in arrEmpleados | orderBy:propertyName:reverse">
                        
                        <td class="text-rigth">{{i.Nombre}} {{i.Apellido}}</td>
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