//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("alumnosEditar", [
  "$scope",
  "$routeParams",
  "$http",
  function ($scope, $routeParams, $http) {
    //$routeParams para recibir lo que se envia en el archivo config
    $scope.mensaje = "FUNCIONOOOOO";
    //$scope.id = $routeParams.Rcodigo;
    $scope.arrayAlumnos = {};
    //var id = $routeParams.Rcodigo;
    $scope.numero = $routeParams.Rcodigo;

    $scope.actualiado = false;

    $http({
      method: "POST",
      url: "php/servicios/alumnos.getAlumno.php?c=" + $scope.numero,
    }).then(function (response) {
      if (response.data.err !== undefined) {
        window.location = "#/alumnos";
        return;
      }
      $scope.arrayAlumnos = response.data;
    });

    

    $scope.GuardarAlumnos = function () {
      $http({
        method: "POST",
        url: "php/servicios/alumnos.guardar.php",
        data: { alumnos:  $scope.arrayAlumnos },
      }).then(function (res) {

        if(res.data.err === false){
          $scope.actualiado = true;
        }

        console.log(res);
        alert(res.data);
      });
    };
  },
]);
