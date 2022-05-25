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
    <!-- Librerias -->
    <script src="js/lib/angular.min.js"></script>
    <script src="js/lib/angular-route.min.js"></script>
    <!-- Principal y confing -->
    <script src="js/app.js"></script>
    <script src="js/config.js"></script>
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
    
    <div ng-view></div>

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