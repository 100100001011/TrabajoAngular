app.controller("InsertarEmpleados", [
  "$scope",
  "$http",
  function ($scope, $http) {
    //Variables
    $scope.arrayProvincias = {};
    //Objeto
    $scope.arrayEmpleado = {
      Nombre: "",
      Apellido: "",
      Cedula: "",
      Provincia_1: "",
      Fecha_Nacimiento: "",
      Email: "",
      Observaciones_1: "",
      Foto: "imagen",
      Fecha_ingreso: "",
      Cargo: "",
      Departamente: "",
      Provincia_2: "",
      Sueldo: "",
      Jornada: "",
      Observaciones_2: "",
    };

    //==>> JSON
    $http({
      method: "POST",
      url: "Json/Provincias.json",
    }).then(function (response) {
      //console.log(response.data);
      $scope.arrayProvincias = response.data;
    });
    //<<==

    //console.log($scope.arrayEmpleado);

    $scope.Insertar = function () {
      $http({
        method: "POST",
        url: "Api/empleados.php",
        data: $scope.arrayEmpleado,
      }).then(function (response) {
        //console.log(response);
        if(response.data.status == 'ok'){
          alert("Empleado Ingresado");
          window.location = "#/";
          location.reload();
          return;
        }else{
          alert("No se pudo ingresar el Empleado");
        }
      });
    };
  },
]);
