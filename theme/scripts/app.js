'use strict';

/**
 * @ngdoc overview
 * @name minovateApp
 * @description
 * # minovateApp
 *
 * Main module of the application.
 */

  /*jshint -W079 */

var app = angular
  .module('minovateApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngMessages',
    'picardy.fontawesome',
    'ui.bootstrap',
    'ui.router',
    'ui.utils',
    'angular-loading-bar',
    'angular-momentjs',
    'FBAngular',
    'lazyModel',
    'toastr',
    'angularBootstrapNavTree',
    'oc.lazyLoad',
    'ui.select',
    'textAngular',
    'colorpicker.module',
    'angularFileUpload',
    'angular-flot',
    'angular-rickshaw',
    'easypiechart',
    'pascalprecht.translate',
    'ngMaterial',
    'localytics.directives',
    'leaflet-directive',
    'wu.masonry',
    'angular-intro',
  ])
  .run(['$rootScope', '$state', '$stateParams', function($rootScope, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;
    $rootScope.$on('$stateChangeSuccess', function(event, toState) {

      event.targetScope.$watch('$viewContentLoaded', function () {

        angular.element('html, body, #content').animate({ scrollTop: 0 }, 200);

        setTimeout(function () {
          angular.element('#wrap').css('visibility','visible');

          if (!angular.element('.dropdown').hasClass('open')) {
            angular.element('.dropdown').find('>ul').slideUp();
          }
        }, 200);
      });
      $rootScope.containerClass = toState.containerClass;
    });
  }])

  .config(['uiSelectConfig', function (uiSelectConfig) {
    uiSelectConfig.theme = 'bootstrap';
  }])

  //angular-language
  .config(['$translateProvider', function($translateProvider) {
    $translateProvider.useStaticFilesLoader({
      prefix: 'theme/languages/',
      suffix: '.json'
    });
    $translateProvider.useLocalStorage();
    $translateProvider.preferredLanguage('en');
    $translateProvider.useSanitizeValueStrategy(null);
  }])

  .config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/app/dashboard');

    $stateProvider

    .state('app', {
      abstract: true,
      url: '/app',
      templateUrl: 'theme/views/tmpl/app.html'
    })
    //dashboard
    .state('app.dashboard', {
      url: '/dashboard',
      controller: 'DashboardCtrl',
      templateUrl: 'theme/views/tmpl/dashboard.html'
    })
    
    //app core pages (errors, login,signup)
      .state('core', {
      abstract: true,
      url: '/core',
      template: '<div ui-view></div>'
    })
    //login
    .state('core.login', {
      url: '/login',
      controller: 'LoginCtrl',
      templateUrl: 'theme/views/tmpl/pages/login.html'
    })
    //signup
    .state('core.signup', {
      url: '/signup',
      controller: 'SignupCtrl',
      templateUrl: 'theme/views/tmpl/pages/signup.html'
    })
    //forgot password
    .state('core.forgotpass', {
      url: '/forgotpass',
      controller: 'ForgotPasswordCtrl',
      templateUrl: 'theme/views/tmpl/pages/forgotpass.html'
    })
    //page 404
    .state('core.page404', {
      url: '/page404',
      templateUrl: 'theme/views/tmpl/pages/page404.html'
    })
    
    //page offline
    .state('core.page-offline', {
      url: '/page-offline',
      templateUrl: 'theme/views/tmpl/pages/page-offline.html'
    })
    //locked screen
    .state('core.locked', {
      url: '/locked',
      templateUrl: 'theme/views/tmpl/pages/locked.html'
    })
    //example pages
    .state('app.pages', {
      url: '/pages',
      template: '<div ui-view></div>'
    })
    
    //profile page
    .state('app.pages.profile', {
      url: '/profile',
      controller: 'ProfileCtrl',
      templateUrl: 'theme/views/tmpl/pages/profile.html',
      resolve: {
        plugins: ['$ocLazyLoad', function($ocLazyLoad) {
          return $ocLazyLoad.load([
            'theme/scripts/vendor/filestyle/bootstrap-filestyle.min.js'
          ]);
        }],
      }
    })
  }]);

