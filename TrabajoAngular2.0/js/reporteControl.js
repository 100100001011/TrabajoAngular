//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("ReporteEmpleados", [
    "$scope",
    "$http",
    function ($scope, $http) {
      $scope.pagina = 1;
      $scope.arrayEmpleado = {};
      //$scope.propertyName = 'nombre';
      //$scope.reverse = true;

      $scope.prueba = "";
        
      //==>> CONSULTAR DATOS GET
      $http({
        method: "GET",
        url: "Api/empleados.php?page=" + $scope.pagina,
      }).then(function (response) {
        console.log(response.data);
        
       
        $scope.arrayEmpleado = response.data;
        

      });
      //<<==
      $scope.Ordenar = function(propertyName) {
        $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
        $scope.propertyName = propertyName;
      };
   
  
      
    },
  ]);
  
  
  