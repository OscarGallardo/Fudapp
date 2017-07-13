app.controller('login', function($scope, $http, $location){
	'use strict'

	// Datos del formulario.
	$scope.email = '';
	$scope.password = '';

	//
	$scope.errorFlag = false;
	
	$scope.login = function() {
		// Petición HTTP para el login.
		$http.get(`http://localhost/fudapp/php/login.php?email="${$scope.email}"&password="${$scope.password}"`)	
			.then(function(response){
				if(response.data === 'NO_USER'){
					$scope.errorFlag = true;
				} else {
					$scope.errorFlag = false;
					$location.path('/');
				}
			}, function(error){
				console.log('Error: ' + error);
			})
	}

});