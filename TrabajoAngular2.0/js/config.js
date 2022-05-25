app.config(function($routeProvider){

	$routeProvider
		.when('/',{
			templateUrl: 'View/Inicio.php',
			
		})
		.otherwise({
			redirectTo: '/'
		});


});