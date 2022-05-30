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
      
  
      //CONEXION CON LA API
      $http({
        method: "GET",
        url: "Api/empleados.php?id=" + $scope.numero,
      }).then(function (response) {
        if (response.data.err !== undefined) {
          window.location = "#/alumnos";
          return;
        }

        console.log(response.data.Fecha_ingreso);
        
        
        //response.data.Fecha_ingreso = "hola";
        
        
        $scope.arrayEmpleado = response.data;
      });

      
      $scope.Guardar = function () {
        
        console.log($scope.arrayEmpleado);
        $http({
          method: "PUT",
          url: "Api/empleados.php",
          data: $scope.arrayEmpleado , 
        }).then(function (res) {
          
          //if(res.data.err === false){
          //  $scope.actualiado = true;
          //}
  
          console.log(res.data);
          console.log(res.data.status);
          //alert(res.data);
        });
      };
  
      
  
    },
  ]);
  