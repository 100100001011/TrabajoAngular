//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("ReporteEmpleados", [
    "$scope",
    "$http",
    function ($scope, $http) {
      $scope.pagina = 1;
      $scope.arrayEmpleado = {};
      $scope.columna = {
        columna_1 : ""
      };

        
      //==>> CONSULTAR DATOS GET
      $http({
        method: "GET",
        url: "Api/empleados.php?page=" + $scope.pagina,
      }).then(function (response) {
        //console.log(response.data);
        $scope.arrayEmpleado = response.data;

      });
      //<<==


 
  
      
    },
  ]);
  
  
  