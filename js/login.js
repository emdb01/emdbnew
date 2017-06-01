/* global _, angular, i18n */
'use strict';

var controllers = angular.module('acs.loginControllers', []);


controllers.controller('checkLogin', ['$scope', '$location', '$http', '$window', 'alerts', 'user', function($scope, $location, $http, $window, alerts, user) {
    $scope.alerts = alerts;
    $scope.input = {};
    $scope.roles = ['Job Seeker', 'Recruiter', 'Government Agency'];
    
    $scope.login = function() {
        $scope.waiting = true;
        $http.post('api/loginController/login', {
            username: $scope.input.username,
            password: $scope.input.password,
            role: $scope.input.role
        }).success(function(data) {
            $scope.waiting = false;
            if (data.status) {
                user.setEmail(data.email);
                user.setToken(data.token);
                $location.path('/home');
//                $window.location.reload();
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
