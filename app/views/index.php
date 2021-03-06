<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap-theme.css" type="text/css" />

    <!-- Local CSS -->
    <link rel="stylesheet" href="static/css/php_desklet.css" type="text/css" />

  </head>
  <body ng-app="desklet_app">
    <div>
      <nav class="navbar navbar-default" ng-controller="MenuCtrl">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" ng-click="add_widget('MessageWidgetController')" class="btn btn-default navbar-btn">Add Message Widget</button>
            <a class="navbar-brand" href="/">PHP Desklet</a>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="widget-container col-md-12" ng-bind-html="widget_container"></div>
      </div>
    </div>

    <!-- CDN JS -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap.js"></script>

    <!-- Local JS -->
    <script type="text/javascript" src="static/app/app.module.js"></script>
    <script type="text/javascript" src="static/app/components/widgets/widgets_controllers.js"></script>
</html>
