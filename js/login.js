/* global _, angular, i18n */
'use strict';

var controllers = angular.module('acs.loginControllers', []);


controllers.controller('checkLogin', ['$scope', '$location', '$http', '$window', 'alerts', 'user', function($scope, $location, $http, $window, alerts, user) {
    $scope.alerts = alerts;
    $scope.input = {};

    $scope.login = function() {
        $scope.waiting = true;
        $http.post('api/LoginController/login', {
            email: $scope.input.email,
            password: $scope.input.password
        }).success(function(data) {
            $scope.waiting = false;
            if (data.status) {
                user.setEmail(data.email);
                user.setToken(data.token);
                $location.path('home');
                $window.location.reload();
            } else {
                if (_.isEmpty(data.errors)) {
                    data.errors = i18n.t('fill_out_login');
                }
                _.forEach(data.errors, function(error) {
                    if (error != null) {
                        alerts.fail(i18n.s(error.type, error.field));
                    }
                });
            }
        });
    };

}]);
