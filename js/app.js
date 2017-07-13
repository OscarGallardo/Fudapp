var app = angular.module('fudapp', ['ngRoute']);

app.controller('ctrl', function($scope){
	$scope.valor = '';
});

app.config(function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl: 'js/views/index/index.html',
			controller: 'index'
		})

		.when('/about', {
			templateUrl: 'js/views/about/about.html',
			controller: 'about'
		})
		.when('/recetas', {
			templateUrl: 'js/views/recetas/recetas.html',
			controller: 'recetas'
		})
		.when('/recetas/nuevo', {
			templateUrl: 'js/views/recetas_new/recetasNuevos.html',
			controller: 'recetasNuevos'
		})
		.when('/login', {
			templateUrl: 'js/views/login/login.html',
			controller: 'login'
		})
});