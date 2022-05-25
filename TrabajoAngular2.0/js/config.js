app.config( function($routeProvider){

	$routeProvider
		.when('/',{
			templateUrl: 'parciales/home.html',
			controller: 'inicioCtrl'
		})
		//ENVIO DE PARAMETROS DESDE UNA PAGINA A OTRA PARA EDITAR
		.when('/alumnosEditar/:Rcodigo',{
			templateUrl: 'parciales/alumnosEditar.html',
			controller: 'alumnosEditar'
		})
		.otherwise({
			redirectTo: '/'
		});


});