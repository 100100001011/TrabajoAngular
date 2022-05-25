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
      if (response.data.err !== undefined) {
        window.location = "#/alumnos";
        return;
      }
      $scope.arrEmpleados = response.data;
    });
  },
]);
