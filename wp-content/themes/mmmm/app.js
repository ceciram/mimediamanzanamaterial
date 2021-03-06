/**
 * Created by DatingLatamSAC on 23/12/2016.
 */

var app = angular.module('app',["ngRoute"]);

app.controller('mainController', ['$scope', '$log', '$http', '$location', function($scope, $log, $http, $location) {

    $scope.loadJquery = function() {
        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: false,
                hover: false,
                gutter: 0,
                belowOrigin: false
            }
        );

    };

    $scope.modal = function (idModal){
      $('.modal').modal({
        dismissible: true,
      });
      $('#'+idModal).modal('open');
    }

    $scope.conversarContacto = function () {
        setTimeout(function () {
            $('.layer-chat').fadeOut(500);
            $('.chat').fadeIn(500);
        },100);
        $scope.ocultarContactos();
    };

    $scope.mostrarContactos = function () {
        $('#contactos').addClass('mover-right-contactos');
        $('#contactos').removeClass('mover-left-contactos');
        $('.opacity').show();
        $('.opacity').addClass('suave');
    };

    $scope.ocultarContactos = function () {
        $('#contactos').addClass('mover-left-contactos');
        $('#contactos').removeClass('mover-right-contactos');
        $('.opacity').hide();
        $('.opacity').addClass('desaparecer');
        $('.opacity').removeClass('suave');
    };

    $scope.volverFavorito = function () {
      $('.volver-favorito').addClass('hide');
      $('.quitar-favorito').removeClass('hide');
    };

    $scope.quitarFavorito = function () {
      $('.volver-favorito').removeClass('hide');
      $('.quitar-favorito').addClass('hide');
    };



}]);

app.controller('chatController', ['$scope', '$log', '$http', '$location', function($scope, $log, $http, $location) {
    setTimeout(function(){
        $scope.loadJquery();
    }, 0);
}]);

app.controller('enLineaController', ['$scope', '$log', '$http', '$location', function($scope, $log, $http, $location) {
    setTimeout(function(){
        $scope.loadJquery();
    }, 0);
}]);

app.config(function($routeProvider) {

	$routeProvider
		.when("/", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/enlinea/enlinea.html",
			controller  : "mainController"
		})
		.when("/enlinea", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/enlinea/enlinea.html",
      controller  : "enLineaController"
		})
		.when("/recomendados", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/recomendados/recomendados.html"
		})
		.when("/tegusta", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/tegusta/tegusta.html"
		})
		.when("/favoritos", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/favoritos/favoritos.html"
		})
		.when("/chat", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/chat/chat.html",
      controller  : "chatController"
		})
		.when("/invitaciones", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/invitaciones/invitaciones.html"
		})
		.when("/segustan", {
			templateUrl : "http://localhost/wordpress01/wp-content/themes/mmmm/segustan/segustan.html"
		})
		.otherwise({
			redirectTo: "/"
		});

});
