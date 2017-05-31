/* global _, angular, i18n */
'use strict';

var controllers = angular.module('acs.recruiter', []);


controllers.controller('recruitersList', ['$scope', '$location', '$http', '$window', 'alerts', 'user', function ($scope, $location, $http, $window, alerts, user) {


        $scope.gridOptions1 = {
            paginationPageSizes: [25, 50, 75],
            paginationPageSize: 25,
            columnDefs: [
                {name: 'name'},
                {name: 'gender'},
                {name: 'company'}
            ]
        };

        $scope.getRecruitersList = function () {
            $http.get('./api/RecruiterController/getRecruitersList').success(function (data) {
                $scope.gridOptions1.data = data;
                $scope.recruiters = data;
            })
        }

        $scope.getRecruitersList();

    }]);
