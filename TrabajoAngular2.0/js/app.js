var app = angular.module("universidadApp", ["ngRoute"]);

app.controller("mainCtrl", [
  "$scope",
  "$http",
  function ($scope, $http) {
    $scope.menuSuperior = "parciales/menu.html";

    $scope.setActive = function (Opcion) {
      $scope.mInicio = "";
      $scope.mProfesores = "";
      $scope.mAlumnos = "";

      $scope[Opcion] = "active";
    };
  },
]);

//app.filter se crean filtros
//Filtro personalizado de telefono
app.filter('Filtro_telefono',function(){
	return function(numero){
		return numero.substring(0,4) + "-" + numero.substring(4);
	};
});