<html>

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

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .divbotones {

            margin: 1rem;
            padding: 1rem;

            /* IMPORTANTE */
            text-align: center;
        }
    </style>
</head>

<body>
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
                $(location).attr('href', '../index.php');
            });

            window.onload = function() {
                Buscar();

            }


            function Buscar() {
                $.getJSON("../Controller/Reporte.php?accion=leer", function(respuesta) {
                    console.log(respuesta);
                    var array = [];
                    //bucle para recorrer los datos index-valor
                    $.each(respuesta, function(llave, valor) {

                        if (llave >= 0) {

                            tabla = "<tr>";
                            tabla += "<td>" + valor.Nom + " " + valor.Ape + "</td>";
                            tabla += "<td>" + valor.Ced + "</td>";
                            tabla += "<td>" + valor.Prov1 + "</td>";
                            tabla += "<td>" + valor.FechNa + "</td>";
                            tabla += "<td>" + valor.Email + "</td>";
                            tabla += "<td>" + valor.Observ1 + "</td>";
                            tabla += "<td>" + valor.FechIng + "</td>";
                            tabla += "<td>" + valor.Cargo + "</td>";
                            tabla += "<td>" + valor.Depart + "</td>";
                            tabla += "<td>" + valor.Prov2 + "</td>";
                            tabla += "<td>" + valor.Sueldo + "</td>";
                            tabla += "<td>" + valor.Jornada + "</td>";
                            tabla += "<td>" + valor.Observ2 + "</td>";
                            tabla += "</tr>";
                            //console.log(valor.Nombre);
                            array.push(tabla);
                        }
                    });
                    //inserta los datos en la tabla
                    $("#datos_tablas").append(array.join(""));


                });

                $("#datos_tablas").empty();
            }



            function ordenarTabla(n, type) {

                var tabla, filas, cambiar, i, x, y, debeCambiar, directorio, count_switch = 0;

                tabla = document.getElementById("Reporte");

                cambiar = true;

                directorio = "asc";

                while (cambiar) {

                    cambiar = false;

                    filas = tabla.rows;

                    for (i = 1; i < (filas.length - 1); i++) {

                        debeCambiar = false;

                        x = filas[i].getElementsByTagName("TD")[n];

                        y = filas[i + 1].getElementsByTagName("TD")[n];


                        if (directorio == "asc") {

                            if ((type == "str" && x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) || (type == "int" && parseFloat(x.innerHTML) > parseFloat(y.innerHTML))) {

                                debeCambiar = true;

                                break;

                            }

                        } else if (directorio == "desc") {

                            if ((type == "str" && x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) || (type == "int" && parseFloat(x.innerHTML) < parseFloat(y.innerHTML))) {

                                debeCambiar = true;

                                break;

                            }

                        }

                    }

                    if (debeCambiar) {

                        filas[i].parentNode.insertBefore(filas[i + 1], filas[i]);

                        cambiar = true;

                        count_switch++;

                    } else {

                        if (count_switch == 0 && directorio == "asc") {

                            directorio = "desc";

                            cambiar = true;

                        }

                    }

                }

            }
        </script>
</body>

</html>