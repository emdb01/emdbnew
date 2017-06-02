/* global _, angular, i18n */
'use strict';

var controllers = angular.module('acs.registerControllers', []);

controllers.controller('register', ['$scope', '$location', '$http', 'alerts', function($scope, $location, $http, alerts) {

    $scope.alerts = alerts;
    $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;
    $scope.input = {};

    $scope.register = function() {
        $scope.waiting = true;
        $http.post('api/registerController/register', {
            who: $scope.input.who,
            country: $scope.input.country,
            email: $scope.input.email,
        }).success(function(data) {
            $scope.waiting = false;
            if (data.status) {
                alerts.success(i18n.t('check_email'));
                $location.path('login');
            } else {
                if (_.isEmpty(data.errors)) {
                    data.errors = '';
                }
                _.forEach(data.errors, function(error) {
                    if (error != null) {
                        alerts.fail(i18n.s(error.type, error.field));
                    }
                });
            }
        });
    };
    
    $scope.getCounties = function(){
        $http.get('./api/registerController/getCountries').success(function(data){
            $scope.countries = data;
        })
    }
    $scope.getCounties();
}]);