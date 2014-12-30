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
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#message_widget/create" type="button" class="btn btn-default navbar-btn add-widget">Add Widget</a>
          <a class="navbar-brand" href="/">PHP Desklet</a>
        </div>
      </div>
    </nav>
    <div class="container" ng-controller="MainController">
      <div class="widget-container col-md-12"><div ng-view></div></div>
    </div>

    <!-- CDN JS -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.8/angular-route.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.12.0/ui-bootstrap.js"></script>

    <!-- Local JS -->
    <script type="text/javascript" src="static/app/app.module.js"></script>
    <script type="text/javascript" src="static/app/app.route.js"></script>
    <script type="text/javascript" src="static/app/shared/main/main_controller.js"></script>
    <script type="text/javascript" src="static/app/components/message_widget/message_widget_directive.js"></script>
    <script type="text/javascript" src="static/app/components/message_widget/message_widget_controller.js"></script>
</html>