//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("ReporteEmpleados", [
    "$scope",
    "$http",
    function ($scope, $http) {
      $scope.pagina = 1;
      $scope.arrayEmpleado = {};
      $scope.ColumnaNombre = '';
      $scope.reverse = false;

        
      //==>> CONSULTAR DATOS GET
      $http({
        method: "GET",
        url: "Api/empleados.php?page=" + $scope.pagina,
      }).then(function (response) {
        console.log(response.data);
        
       
        $scope.arrayEmpleado = response.data;
        

      });
      //<<==
      $scope.Ordenar = function(RColumnaNombre) {
        $scope.reverse = ($scope.ColumnaNombre === RColumnaNombre) ? !$scope.reverse : true;
        $scope.ColumnaNombre = RColumnaNombre;

        console.log(RColumnaNombre);
        console.log($scope.ColumnaNombre);
      };
   
  
      
    },
  ]);
  
  
  