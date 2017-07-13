app.controller('recetas', function($scope, $http){
	$scope.listaRecetas = [];

	$http.get('http://localhost/fudapp/php/getAllRecetas.php')
		.then(function(response){
			$scope.listaRecetas = response.data;
		})
});
