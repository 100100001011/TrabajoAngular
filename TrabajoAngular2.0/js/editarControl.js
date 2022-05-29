//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("EditarEmpleados", [
    "$scope",
    "$routeParams",
    "$http",
    function ($scope, $routeParams, $http) {
      $scope.prueba = "prueba";
      $scope.arrayEmpleado = {};
      $scope.numero = $routeParams.id;
      $scope.actualiado = false;
      $scope.fecha_1 = "";
  
      //CONEXION CON LA API
      $http({
        method: "GET",
        url: "Api/empleados.php?id=" + $scope.numero,
      }).then(function (response) {
        if (response.data.err !== undefined) {
          window.location = "#/alumnos";
          return;
        }
        response.data.Fecha_ingreso = response.data.Fecha_ingreso;
        
        
        $scope.arrayEmpleado = response.data;
      });
  
      
  
    },
  ]);
  