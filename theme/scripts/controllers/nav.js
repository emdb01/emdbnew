'use strict';

/**
 * @ngdoc function
 * @name minovateApp.controller:NavCtrl
 * @description
 * # NavCtrl
 * Controller of the minovateApp
 */
app.controller('NavCtrl', function ($scope, $rootScope, $http) {
    $scope.oneAtATime = false;

    $scope.status = {
        isFirstOpen: true,
        isSecondOpen: true,
        isThirdOpen: true
    };
    $http.get('api/menuController/getMenu')
            .success(function (items) {
                $rootScope.menuItems = items;
            })
});
