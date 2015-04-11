<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>WTH 2015</title>

</head>
<body>
    <div ng-controller="loginController">
        {{ qq + name }}
    </div>

    <?php
        echo HTML::script("/bower_components/angular/angular.min.js");
        echo HTML::script("/js/app.js");
    ?>
</body>
</html>
