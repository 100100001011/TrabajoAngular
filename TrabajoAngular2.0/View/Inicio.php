        {{arrEmpleados | json}}
        <div class="container">
            <div class="form-group col-md-12">
                <div class="card-header">
                    <h4 align="center">Modulo Empleados</h4>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="form-group col-md-4">

                    <label>Nombre</label>

                    <input type="text" class="form-control" ng-model="nombre_search" placeholder="Buscar Nombre ">
                </div>
                <div class="form-group col-md-4">
                    <label>Cedula</label>
                    <input type="text" class="form-control" ng-model="cedula_search" placeholder="Buscar C.I">
                </div>

            </div>
            <div class="card-body">
                <div class="form-group col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Cedula</th>
                            <th class="text-center">Cargo</th>
                        </tr>

                        <tr ng-repeat="i in arrEmpleados | filter:{Nombre:nombre_search,Cedula:cedula_search}">
                        
                            <td class="text-rigth">{{i.Nombre}} {{i.Apellido}}</td>
                            <td class="text-rigth">{{i.Cedula}}</td>
                            <td class="text-rigth">{{i.Cargo}}</td>
                            <td class="text-rigth"><a href="#!/Editar/{{i.id_Empleado}}">Editar</a></td>
                        </tr>
                    </table>
                </div>
                <div class="form-group col-md-12">
                    <button id="btInsertar" type="button" class="btn btn-success">Crear</button>
                    <button id="btReporte" type="button" class="btn btn-warning">Reporte</button>
                </div>
            </div>
            <script>
                $('#btInsertar').click(function(e) {
                    $(location).attr('href', '#!/Ingreso');
                });
                $('#btReporte').click(function(e) {
                    $(location).attr('href', '#!/Reporte');
                });
            </script>