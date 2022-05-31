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
        //Formatos
        response.data.Sueldo = parseFloat(response.data.Sueldo);
        response.data.Fecha_Nacimiento = Formato_Fecha(response.data.Fecha_Nacimiento);
        response.data.Fecha_ingreso = Formato_Fecha(response.data.Fecha_ingreso); 
        //
        $scope.arrayEmpleado = response.data;
      });

      
      $scope.Guardar = function () {
        $scope.Fecha();
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

      $scope.Fecha = function (){
        var fecha_modificada = $scope.arrayEmpleado.Fecha_Nacimiento.toISOString().split('T')[0];
        //fecha_modificada.toISOString().split('T')[0];
        alert(fecha_modificada);
        //var fecha_modificada = new Date(fecha);
        return fecha_modificada;
      }
  
      
  
    },
  ]);
  

  function Formato_Fecha(fecha){
    //fecha.replace('-','/');
    //console.log(fecha.replaceAll('-','/'));
    var fecha_modificada = new Date(fecha.replaceAll('-',','));
    return fecha_modificada;
  }

  