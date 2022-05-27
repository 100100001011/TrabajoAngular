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
                        <th class="text-center" onclick="ordenarTabla(0, 'str')">Nombre</th>
                        <th class="text-center" onclick="ordenarTabla(1, 'str')">Cedula</th>
                        <th class="text-center" onclick="ordenarTabla(2, 'str')">Provincia</th>
                        <th class="text-center" onclick="ordenarTabla(3, 'int')">Fecha Nacimiento</th>
                        <th class="text-center" onclick="ordenarTabla(4, 'str')">Email</th>
                        <th class="text-center" onclick="ordenarTabla(5, 'str')">Observaciones</th>
                        <th class="text-center" onclick="ordenarTabla(6, 'int')">Fecha Ingreso</th>
                        <th class="text-center" onclick="ordenarTabla(7, 'str')">Cargo</th>
                        <th class="text-center" onclick="ordenarTabla(8, 'str')">Departamento</th>
                        <th class="text-center" onclick="ordenarTabla(9, 'str')">Provincia</th>
                        <th class="text-center" onclick="ordenarTabla(10, 'int')">Suledo</th>
                        <th class="text-center" onclick="ordenarTabla(11, 'str')">Jornada</th>
                        <th class="text-center" onclick="ordenarTabla(12, 'str')">Observaciones</th>

                    </tr>
                </thead>
                <tbody id="datos_tablas">

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

        window.onload = function() {
            Buscar();

        }
    </script>