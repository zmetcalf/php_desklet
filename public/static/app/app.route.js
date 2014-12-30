desklet_app.config(function($routeProvider) {
  $routeProvider.when('/message_widget/create', {
    templateUrl: 'static/app/components/message_widget/message_widget.html',
    controller: 'MessageWidgetController'
  });
});