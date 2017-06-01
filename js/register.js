/* global _, angular, i18n */
'use strict';

var controllers = angular.module('acs.registerControllers', []);

controllers.controller('register', ['$scope', '$location', '$http', 'alerts', function($scope, $location, $http, alerts) {

    $scope.alerts = alerts;
    $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;
    $scope.input = {};

    $scope.register = function() {
        $scope.waiting = true;
        if ($scope.input.password != $scope.input.confirmation) {
            alerts.fail(i18n.t('passwords_not_match'));
            $scope.waiting = false;
            return;
        }
        $http.post('api/registerController/register', {
            firstName: $scope.input.fname,
            middleName: $scope.input.mname,
            lastName: $scope.input.lname,
            company: $scope.input.company,
            phone: $scope.input.phone,
            country: $scope.input.country,
            email: $scope.input.email,
            password: $scope.input.password,
            confirmation: $scope.input.confirmation
        }).success(function(data) {
            $scope.waiting = false;
            if (data.status) {
                alerts.success(i18n.t('you_may_login'));
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
        $http.get('./api/RegisterController/getCountries').success(function(data){
            $scope.countries = data;
        })
    }
    $scope.getCounties();
}]);