app.controller("alumnosCtrl", [
  "$scope",
  "$http",
  function ($scope, $http) {
    $scope.setActive("mAlumnos");

    $scope.alumnos = {};
    $scope.nregistros = 5;

    $http({
      method: "POST",
      url: "php/servicios/alumnos.listado.php",
    }).then(function (response) {
      $scope.alumnos = response.data;
    });

    $scope.Fsiguiente = function () {
      if ($scope.alumnos.length > $scope.nregistros) {
        $scope.nregistros += 1;
      }
    };

    $scope.Fanterior = function () {
      if ($scope.nregistros > 1) {
        $scope.nregistros -= 1;
      }
    };
  },
]);
