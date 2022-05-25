<!DOCTYPE html>
<html lang="en" ng-app="TrabajoApp" ng-controller="indexControl">

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
    <!-- ANGULARJS -->
    <script src="js/lib/angular.min.js"></script>
    <script src="js/lib/angular-route.min.js"></script>
    <script src="js/app.js"></script>

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

                    <input type="text" class="form-control" ng-model="search.Nombre" placeholder="Buscar Nombre ">
                </div>
                <div class="form-group col-md-4">
                    <label>Cedula</label>
                    <input type="text" class="form-control" ng-model="search.Cedula" placeholder="Buscar C.I">
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

                        <tr ng-repeat="i in arrEmpleados | filter:search">
                            <td class="text-center">{{i.Nombre}}</td>
                            <td class="text-center">{{i.Cedula}}</td>
                            <td class="text-center">{{i.Cargo}}</td>
                        </tr>
                    </table>
                </div>
                <div class="form-group col-md-12">
                    <button id="btInsertar" type="button" class="btn btn-success">Crear</button>
                    <button id="btReporte" type="button" class="btn btn-warning">Reporte</button>
                </div>
            </div>
    </section>
    <!-- <====================== -->

    <script>
        var idUp;
        //=======>JQUERY
        $('#btSalir').click(function(e) {
            location.reload();
        });

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