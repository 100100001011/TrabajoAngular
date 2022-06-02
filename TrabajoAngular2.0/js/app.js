var app = angular.module("TrabajoApp", ["ngRoute"]);

app.controller("indexControl", [
  "$scope",
  "$http",
  function ($scope, $http) {
    
    $scope.arrEmpleados = {};
    $scope.numero = 1;
        
    $http({
      method: "GET",
      url: "Api/empleados.php?page=" + $scope.numero,
    }).then(function (response) {
      console.log(response.data);
      if (response.data.err !== undefined) {
        window.location = "#/";
        return;
      }
      $scope.arrEmpleados = response.data;
    });

   

  }


  
]);
