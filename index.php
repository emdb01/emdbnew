<!doctype html>
<html ng-app="minovateApp" ng-controller="MainCtrl" class="no-js {{containerClass}}">
  <head>
    <meta charset="utf-8">
    <title>EMDB</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="icon" type="theme/image/ico" href="favicon.ico" />
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="theme/bower_components/angular-bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="theme/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-bootstrap-nav-tree/dist/abn_tree.css" />
    <link rel="stylesheet" href="theme/bower_components/chosen/chosen.min.css" />
    <link rel="stylesheet" href="theme/bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="theme/bower_components/intro.js/introjs.css" />
    <link rel="stylesheet" href="theme/bower_components/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-loading-bar/build/loading-bar.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-material/angular-material.css" />
    <link rel="stylesheet" href="theme/bower_components/rickshaw/rickshaw.min.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-toastr/dist/angular-toastr.css" />
    <link rel="stylesheet" href="theme/bower_components/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-ui-grid/ui-grid.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-ui-select/dist/select.css" />
    <link rel="stylesheet" href="theme/bower_components/angular-ui-tree/dist/angular-ui-tree.min.css" />
    <link rel="stylesheet" href="theme/bower_components/animate.css/animate.css" />
    <link rel="stylesheet" href="theme/bower_components/bootstrap-daterangepicker/daterangepicker.css" />
    <link rel="stylesheet" href="theme/bower_components/leaflet-draw/dist/leaflet.draw.css" />
    <link rel="stylesheet" href="theme/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.css" />
    <link rel="stylesheet" href="theme/bower_components/morrisjs/morris.css" />
    <link rel="stylesheet" href="theme/bower_components/ng-table/dist/ng-table.css" />
    <link rel="stylesheet" href="theme/bower_components/ng-tags-input/ng-tags-input.min.css" />
    <link rel="stylesheet" href="theme/bower_components/ngImgCrop/compile/minified/ng-img-crop.css" />
    <link rel="stylesheet" href="theme/bower_components/owl-carousel/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="theme/bower_components/owl-carousel/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" href="theme/bower_components/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="theme/bower_components/weather-icons/css/weather-icons.css" />
    <link rel="stylesheet" href="theme/bower_components/weather-icons/css/weather-icons.min.css" />
    <link rel="stylesheet" href="theme/bower_components/weather-icons/css/weather-icons-wind.css" />
    <link rel="stylesheet" href="theme/bower_components/weather-icons/css/weather-icons-wind.min.css" />
    <link rel="stylesheet" href="theme/bower_components/dragular/dist/dragular.min.css" />
    <link rel="stylesheet" href="theme/bower_components/magnific-popup/dist/magnific-popup.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="theme/styles/main.css">
    <!-- endbuild -->
  </head>
  <body id="minovate" class="{{main.settings.navbarHeaderColor}} {{main.settings.activeColor}} {{containerClass}} header-fixed aside-fixed rightbar-hidden appWrapper" ng-class="{'header-fixed': main.settings.headerFixed, 'header-static': !main.settings.headerFixed, 'aside-fixed': main.settings.asideFixed, 'aside-static': !main.settings.asideFixed, 'rightbar-show': main.settings.rightbarShow, 'rightbar-hidden': !main.settings.rightbarShow}">

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Application content -->
    <div id="wrap" ui-view autoscroll="false"></div>

    <!-- Page Loader -->
    <div id="pageloader" page-loader></div>
    
    <!-- build:js(.) theme/scripts/oldieshim.js -->
    <!--[if lt IE 9]>
    <script src="theme/bower_components/es5-shim/es5-shim.js"></script>
    <script src="theme/bower_components/json3/lib/json3.min.js"></script>
    <![endif]-->
    <!-- endbuild -->

    <!-- build:js(.) theme/scripts/vendor.js -->

    <!-- bower:js -->
    <script src="theme/bower_components/jquery/jquery.js"></script>
    <script src="theme/bower_components/angular/angular.js"></script>
    <script src="theme/bower_components/angular-animate/angular-animate.js"></script>
    <script src="theme/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="theme/bower_components/angular-bootstrap-colorpicker/js/bootstrap-colorpicker-module.js"></script>
    <script src="theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="theme/bower_components/angular-bootstrap-nav-tree/dist/abn_tree_directive.js"></script>
    <script src="theme/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="theme/bower_components/angular-chosen-localytics/chosen.js"></script>
    <script src="theme/bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="theme/bower_components/datatables.net/js/jquery.dataTables.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/angular-datatables.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/bootstrap/angular-datatables.bootstrap.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/colreorder/angular-datatables.colreorder.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/columnfilter/angular-datatables.columnfilter.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/colvis/angular-datatables.colvis.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/fixedcolumns/angular-datatables.fixedcolumns.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/fixedheader/angular-datatables.fixedheader.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/scroller/angular-datatables.scroller.min.js"></script>
    <script src="theme/bower_components/angular-datatables/dist/plugins/tabletools/angular-datatables.tabletools.min.js"></script>
    <script src="theme/bower_components/d3/d3.js"></script>
    <script src="theme/bower_components/angular-file-upload/dist/angular-file-upload.min.js"></script>
    <script src="theme/bower_components/angular-flot/angular-flot.js"></script>
    <script src="theme/bower_components/angular-fontawesome/dist/angular-fontawesome.js"></script>
    <script src="theme/bower_components/angular-fullscreen/src/angular-fullscreen.js"></script>
    <script src="theme/bower_components/angular-simple-logger/dist/angular-simple-logger.js"></script>
    <script src="theme/bower_components/lodash/lodash.js"></script>
    <script src="theme/bower_components/angular-google-maps/dist/angular-google-maps.js"></script>
    <script src="theme/bower_components/intro.js/intro.js"></script>
    <script src="theme/bower_components/angular-intro.js/src/angular-intro.js"></script>
    <script src="theme/bower_components/angular-ipsum/dist/ipsum.min.js"></script>
    <script src="theme/bower_components/leaflet/dist/leaflet-src.js"></script>
    <script src="theme/bower_components/angular-leaflet-directive/dist/angular-leaflet-directive.js"></script>
    <script src="theme/bower_components/angular-loading-bar/build/loading-bar.js"></script>
    <script src="theme/bower_components/masonry/dist/masonry.pkgd.min.js"></script>
    <script src="theme/bower_components/ev-emitter/ev-emitter.js"></script>
    <script src="theme/bower_components/imagesloaded/imagesloaded.js"></script>
    <script src="theme/bower_components/jquery-bridget/jquery-bridget.js"></script>
    <script src="theme/bower_components/angular-masonry/angular-masonry.js"></script>
    <script src="theme/bower_components/angular-aria/angular-aria.js"></script>
    <script src="theme/bower_components/angular-messages/angular-messages.js"></script>
    <script src="theme/bower_components/angular-material/angular-material.js"></script>
    <script src="theme/bower_components/moment/moment.js"></script>
    <script src="theme/bower_components/angular-momentjs/angular-momentjs.js"></script>
    <script src="theme/bower_components/angular-resource/angular-resource.js"></script>
    <script src="theme/bower_components/rickshaw/rickshaw.js"></script>
    <script src="theme/bower_components/angular-rickshaw/rickshaw.js"></script>
    <script src="theme/bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="theme/bower_components/angular-smart-table/dist/smart-table.js"></script>
    <script src="theme/bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>
    <script src="theme/bower_components/angular-touch/angular-touch.js"></script>
    <script src="theme/bower_components/angular-translate/angular-translate.js"></script>
    <script src="theme/bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.js"></script>
    <script src="theme/bower_components/angular-translate-storage-cookie/angular-translate-storage-cookie.js"></script>
    <script src="theme/bower_components/angular-translate-storage-local/angular-translate-storage-local.js"></script>
    <script src="theme/bower_components/jquery-ui/ui/jquery-ui.js"></script>
    <script src="theme/bower_components/fullcalendar/fullcalendar.js"></script>
    <script src="theme/bower_components/angular-ui-calendar/src/calendar.js"></script>
    <script src="theme/bower_components/angular-ui-grid/ui-grid.js"></script>
    <script src="theme/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
    <script src="theme/bower_components/angular-ui-select/dist/select.js"></script>
    <script src="theme/bower_components/angular-ui-tree/dist/angular-ui-tree.js"></script>
    <script src="theme/bower_components/angular-ui-utils/ui-utils.js"></script>
    <script src="theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="theme/bower_components/flot/jquery.flot.js"></script>
    <script src="theme/bower_components/flot/jquery.flot.resize.js"></script>
    <script src="theme/bower_components/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="theme/bower_components/flot.tooltip/js/jquery.flot.tooltip.js"></script>
    <script src="theme/bower_components/html.sortable/dist/html.sortable.js"></script>
    <script src="theme/bower_components/jquery.easy-pie-chart/dist/angular.easypiechart.min.js"></script>
    <script src="theme/bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="theme/bower_components/jquery.slimscroll/jquery.slimscroll.js"></script>
    <script src="theme/bower_components/jquery.slimscroll/jquery.slimscroll.min.js"></script>
    <script src="theme/bower_components/jquery.sparkline/index.js"></script>
    <script src="theme/bower_components/json3/lib/json3.js"></script>
    <script src="theme/bower_components/leaflet-draw/dist/leaflet.draw.js"></script>
    <script src="theme/bower_components/leaflet-heat/dist/leaflet-heat.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Distance.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Layers.Load.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Permalink.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Permalink.Layer.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Permalink.Line.js"></script>
    <script src="theme/bower_components/leaflet-plugins/control/Permalink.Marker.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/Icon.Canvas.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/Layer.Deferred.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/Marker.Rotate.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/Marker.Text.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/OpenStreetBugs.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/vector/GPX.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/vector/GPX.Speed.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/vector/KML.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/vector/OSM.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/tile/Bing.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/tile/Google.js"></script>
    <script src="theme/bower_components/leaflet-plugins/layer/tile/Yandex.js"></script>
    <script src="theme/bower_components/eve-raphael/eve.js"></script>
    <script src="theme/bower_components/raphael/raphael.min.js"></script>
    <script src="theme/bower_components/mocha/mocha.js"></script>
    <script src="theme/bower_components/morrisjs/morris.js"></script>
    <script src="theme/bower_components/ng-bs-daterangepicker/src/ng-bs-daterangepicker.js"></script>
    <script src="theme/bower_components/ng-table/dist/ng-table.js"></script>
    <script src="theme/bower_components/ng-tags-input/ng-tags-input.min.js"></script>
    <script src="theme/bower_components/ngImgCrop/compile/minified/ng-img-crop.js"></script>
    <script src="theme/bower_components/oclazyload/dist/ocLazyLoad.js"></script>
    <script src="theme/bower_components/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
    <script src="theme/bower_components/textAngular/dist/textAngular-rangy.min.js"></script>
    <script src="theme/bower_components/textAngular/dist/textAngular-sanitize.min.js"></script>
    <script src="theme/bower_components/textAngular/dist/textAngular.min.js"></script>
    <script src="theme/bower_components/dragular/dist/dragular.min.js"></script>
    <script src="theme/bower_components/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <!-- endbower -->

    <!-- endbuild -->

    <!-- build:js({.tmp,app}) theme/scripts/app.js -->
    <script src="theme/scripts/app.js"></script>
    <script src="theme/scripts/controllers/main.js"></script>
    <script src="theme/scripts/directives/navcollapse.js"></script>
    <script src="theme/scripts/directives/slimscroll.js"></script>
    <script src="theme/scripts/controllers/navbar-chart.js"></script>
    <script src="theme/scripts/directives/sparkline.js"></script>
    <script src="theme/scripts/controllers/dashboard.js"></script>
    <script src="theme/scripts/directives/collapsesidebar.js"></script>
    <script src="theme/scripts/directives/ripple.js"></script>
    <script src="theme/scripts/controllers/nav.js"></script>
    <script src="theme/scripts/directives/pageloader.js"></script>
    <script src="theme/scripts/controllers/daterangepicker.js"></script>
    <script src="theme/scripts/directives/daterangepicker.js"></script>
    <script src="theme/scripts/controllers/boxedlayout.js"></script>
    <script src="theme/scripts/controllers/fullwidthlayout.js"></script>
    <script src="theme/scripts/controllers/sidebarsmlayout.js"></script>
    <script src="theme/scripts/controllers/sidebarxslayout.js"></script>
    <script src="theme/scripts/controllers/hzmenu.js"></script>
    <script src="theme/scripts/controllers/rtl.js"></script>
    <script src="theme/scripts/controllers/ui-typography.js"></script>
    <script src="theme/scripts/directives/tilecontrolclose.js"></script>
    <script src="theme/scripts/directives/tilecontroltoggle.js"></script>
    <script src="theme/scripts/directives/tilecontrolrefresh.js"></script>
    <script src="theme/scripts/directives/tilecontrolfullscreen.js"></script>
    <script src="theme/scripts/directives/prettyprint.js"></script>
    <script src="theme/scripts/controllers/ui-lists.js"></script>
    <script src="theme/scripts/directives/lazymodel.js"></script>
    <script src="theme/scripts/controllers/ui-buttonsicons.js"></script>
    <script src="theme/scripts/directives/activatebutton.js"></script>
    <script src="theme/scripts/controllers/ui-navs.js"></script>
    <script src="theme/scripts/controllers/ui-modals.js"></script>
    <script src="theme/scripts/controllers/ui-tiles.js"></script>
    <script src="theme/scripts/controllers/ui-portlets.js"></script>
    <script src="theme/scripts/controllers/ui-grid.js"></script>
    <script src="theme/scripts/controllers/ui-alerts.js"></script>
    <script src="theme/scripts/controllers/ui-general.js"></script>
    <script src="theme/scripts/directives/setnganimate.js"></script>
    <script src="theme/scripts/controllers/ui-tree.js"></script>
    <script src="theme/scripts/controllers/forms-common.js"></script>
    <script src="theme/scripts/controllers/forms-validate.js"></script>
    <script src="theme/scripts/directives/onblurvalidation.js"></script>
    <script src="theme/scripts/directives/formsubmit.js"></script>
    <script src="theme/scripts/controllers/forms-wizard.js"></script>
    <script src="theme/scripts/controllers/form-upload.js"></script>
    <script src="theme/scripts/controllers/form-img-crop.js"></script>
    <script src="theme/scripts/controllers/tables-bootstrap.js"></script>
    <script src="theme/scripts/directives/check-toggler.js"></script>
    <script src="theme/scripts/controllers/tables-datatables.js"></script>
    <script src="theme/scripts/controllers/tables-ui-grid.js"></script>
    <script src="theme/scripts/controllers/tables-ng-table.js"></script>
    <script src="theme/scripts/controllers/tables-smart-table.js"></script>
    <script src="theme/scripts/controllers/tables-footable.js"></script>
    <script src="theme/scripts/controllers/charts.js"></script>
    <script src="theme/scripts/directives/chart-morris.js"></script>
    <script src="theme/scripts/directives/gaugechart.js"></script>
    <script src="theme/scripts/directives/wrap-owlcarousel.js"></script>
    <script src="theme/scripts/directives/todofocus.js"></script>
    <script src="theme/scripts/directives/todoescape.js"></script>
    <script src="theme/scripts/directives/clock.js"></script>
    <script src="theme/scripts/controllers/ui-widgets.js"></script>
    <script src="theme/scripts/directives/active-toggle.js"></script>
    <script src="theme/scripts/directives/vector-map.js"></script>
    <script src="theme/scripts/controllers/maps-vector-map.js"></script>
    <script src="theme/scripts/controllers/maps-google-map.js"></script>
    <script src="theme/scripts/controllers/calendar.js"></script>
    <script src="theme/scripts/controllers/mail-inbox.js"></script>
    <script src="theme/scripts/controllers/mail-compose.js"></script>
    <script src="theme/scripts/controllers/mail-single.js"></script>
    <script src="theme/scripts/controllers/mail.js"></script>
    <script src="theme/scripts/controllers/pages-login.js"></script>
    <script src="theme/scripts/controllers/pages-signup.js"></script>
    <script src="theme/scripts/controllers/pages-forgot-password.js"></script>
    <script src="theme/scripts/controllers/pages-gallery.js"></script>
    <script src="theme/scripts/controllers/pages-timeline.js"></script>
    <script src="theme/scripts/controllers/pages-chat.js"></script>
    <script src="theme/scripts/controllers/pages-search-results.js"></script>
    <script src="theme/scripts/controllers/pages-profile.js"></script>
    <script src="theme/scripts/controllers/help.js"></script>
    <script src="theme/scripts/directives/anchor-scroll.js"></script>
    <script src="theme/scripts/controllers/shop-orders.js"></script>
    <script src="theme/scripts/controllers/shop-products.js"></script>
    <script src="theme/scripts/controllers/shop-invoices.js"></script>
    <script src="theme/scripts/controllers/shop-single-order.js"></script>
    <script src="theme/scripts/controllers/shop-single-product.js"></script>
    <script src="theme/scripts/controllers/shop-single-invoice.js"></script>
    <script src="theme/scripts/controllers/offcanvaslayout.js"></script>
    <script src="theme/scripts/directives/offcanvas-sidebar.js"></script>
    <script src="theme/scripts/directives/submitvalidate.js"></script>
    <script src="theme/scripts/directives/native-tab.js"></script>
    <script src="theme/scripts/controllers/maps-leaflet.js"></script>
    <script src="theme/scripts/controllers/ui-masonry.js"></script>
    <script src="theme/scripts/controllers/pages-intro.js"></script>
    <script src="theme/scripts/controllers/ui-dragula.js"></script>
    <script src="theme/scripts/directives/tilecontrollightbox.js"></script>

    <script src="theme/scripts/controllers/material/autocomplete.js"></script>
    <script src="theme/scripts/controllers/material/bottom-sheet.js"></script>
    <script src="theme/scripts/controllers/material/buttons.js"></script>
    <script src="theme/scripts/controllers/material/cards.js"></script>
    <script src="theme/scripts/controllers/material/checkbox.js"></script>
    <script src="theme/scripts/controllers/material/chips.js"></script>
    <script src="theme/scripts/controllers/material/content.js"></script>
    <script src="theme/scripts/controllers/material/dialog.js"></script>
    <script src="theme/scripts/controllers/material/divider.js"></script>
    <script src="theme/scripts/controllers/material/fab-speed-dial.js"></script>
    <script src="theme/scripts/controllers/material/fab-toolbar.js"></script>
    <script src="theme/scripts/controllers/material/grid-list.js"></script>
    <script src="theme/scripts/controllers/material/inputs.js"></script>
    <script src="theme/scripts/controllers/material/list.js"></script>
    <script src="theme/scripts/controllers/material/menu.js"></script>
    <script src="theme/scripts/controllers/material/progress-circular.js"></script>
    <script src="theme/scripts/controllers/material/progress-linear.js"></script>
    <script src="theme/scripts/controllers/material/radio-button.js"></script>
    <script src="theme/scripts/controllers/material/select.js"></script>
    <script src="theme/scripts/controllers/material/sidenav.js"></script>
    <script src="theme/scripts/controllers/material/slider.js"></script>
    <script src="theme/scripts/controllers/material/subheader.js"></script>
    <script src="theme/scripts/controllers/material/swipe.js"></script>
    <script src="theme/scripts/controllers/material/switch.js"></script>
    <script src="theme/scripts/controllers/material/tabs.js"></script>
    <script src="theme/scripts/controllers/material/toast.js"></script>
    <script src="theme/scripts/controllers/material/toolbar.js"></script>
    <script src="theme/scripts/controllers/material/tooltip.js"></script>
    <script src="theme/scripts/controllers/material/whiteframe.js"></script>
    <!-- endbuild -->
</body>
</html>
