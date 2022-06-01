

app.controller("InsertarEmpleados", [
  "$scope",
  "$http",
  function ($scope, $http) {

    var Empleado = {
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
        Observaciones_2: ""
    }

    
    $scope.arrayEmpleado = Empleado;

    console.log($scope.prueba);
    
    
    
  },
]);
