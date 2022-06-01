app.config(function($routeProvider){

	$routeProvider
		.when('/',{
			templateUrl: 'View/Inicio.php',
			
		})
		.when('/Ingreso',{
			templateUrl: 'View/Ingreso.php',
			controller: 'InsertarEmpleados'
		})
		.when('/Editar/:id',{
			templateUrl: 'View/Editar.php',
			controller: 'EditarEmpleados'
		})
		.when('/Reporte',{
			templateUrl: 'View/Reporte.php',
			controller: 'ReporteEmpleados'
		})
		.otherwise({
			redirectTo: '/'
		});


});