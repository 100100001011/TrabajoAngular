
app.controller("InsertarEmpleados", [
  "$scope",
  "$http",
  function ($scope, $http) {
    
    $scope.arrayEmpleado = {
      Nombre: "",
      Apellido: "",
      Cedula: "",
      Provincia_1: "",
      Fecha_Nacimiento: "",
      Email: "",
      Observaciones_1: "",
      Foto: "",
      Fecha_ingreso: "",
      Cargo: "",
      Departamente: "",
      Provincia_2: "",
      Sueldo: "",
      Jornada: "",
      Observaciones_2: "",
    };

     
    console.log($scope.arrayEmpleado);
    
    $scope.Insertar = function () {

      $http({
        method: "POST",
        url: "Api/empleados.php",
        data: $scope.arrayEmpleado,
      }).then(function (response) {
        console.log(response);
      });
    };
  },
]);
