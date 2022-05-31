//$scope = CREA VARIABLES Y FUNCIONES //$http = PERMITE USAR ARCHIVOS EXTERNOS //$routeParams = RECIBE PARAMETROS POR EL POST
app.controller("EditarEmpleados", [
  "$scope",
  "$routeParams",
  "$http",
  function ($scope, $routeParams, $http) {
    $scope.prueba = "prueba";
    $scope.arrayEmpleado = {};
    $scope.arrayProvincias = {};
    $scope.numero = $routeParams.id;
    

    //==>> CONSULTAR DATOS GET
    $http({
      method: "GET",
      url: "Api/empleados.php?id=" + $scope.numero,
    }).then(function (response) {
      if (response.data.err !== undefined) {
        window.location = "#/inicio";
        return;
      }
      //Formatos
      response.data.Sueldo = parseFloat(response.data.Sueldo);
      response.data.Fecha_Nacimiento = $scope.Formato_Fecha(response.data.Fecha_Nacimiento);
      response.data.Fecha_ingreso = $scope.Formato_Fecha(response.data.Fecha_ingreso);
      //
      $scope.arrayEmpleado = response.data;
    });
    //<<==

    //==>> JSON
    $http({
      method: "POST",
      url: "Json/Provincias.json",
    }).then(function (response) {
      //console.log(response.data);
      $scope.arrayProvincias = response.data;
    });
    //<<==

    //==>> GUARDAR DATOS
    $scope.Guardar = function () {
      //$scope.arrayEmpleado.Fecha_Nacimiento = $scope.arrayEmpleado.Fecha_Nacimiento.toISOString().split("T")[0];
      //$scope.arrayEmpleado.Fecha_ingreso = $scope.arrayEmpleado.Fecha_ingreso.toISOString().split("T")[0];
      $http({
        method: "PUT",
        url: "Api/empleados.php",
        data: $scope.arrayEmpleado,
      }).then(function (res) {
        //if(res.data.err === false){
        //  $scope.actualiado = true;
        //}
        console.log(res);
        console.log(res.data.status);
        console.log(res.data.result);
        if(res.data.status == 'ok'){
          alert("ACTUALIZADO OK");
          
          //window.location = "#/";
          //return;
        }else{
          alert("NO SE PUDO ACTUALIZAR");
        }
        
        
        //alert(res.data);
      });
    };
    //<<==
    
    //==>>FUNCION FORMATO FECHA
    $scope.Formato_Fecha = function (fecha) {
      //fecha.replace('-','/');
      //console.log(fecha.replaceAll('-','/'));
      var fecha_modificada = new Date(fecha.replaceAll("-", ","));
      return fecha_modificada;
    };
    //<<==

  },
]);


