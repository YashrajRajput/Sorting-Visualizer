<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Calculator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body ng-app="calculator">
    <h3>Simple Calculator</h3>
    <div ng-controller="calcController">
        <form>
            <input type="number" id="num1" ng-model="numOne" value="0" /><br /><br />
            <input type="number" id="num2" ng-model="numTwo" value="0" /><br /><br />
            <input type="radio" ng-model="operator" value="+" selected/>Add
            <input type="radio" ng-model="operator" value="-" />Subtract
            <input type="radio" ng-model="operator" value="*" />Multiply
            <input type="radio" ng-model="operator" value="/" />Divide
        </form><br />
        {{numOne}} {{operator}} {{numTwo}} = {{calculate(operator)}}
    </div>
    <script>
        var app = angular.module('calculator', []);
        app.controller('calcController', function ($scope) {
            $scope.numOne = 0;
            $scope.numTwo = 0;
            $scope.operator = '+';
            $scope.calculate = function (optr) {
                switch (optr) {
                    case '+':
                        return parseFloat($scope.numOne) + parseFloat($scope.numTwo);
                        break;
                    case '-':
                        return parseFloat($scope.numOne) - parseFloat($scope.numTwo);
                        break;
                    case '*':
                        return parseFloat($scope.numOne) * parseFloat($scope.numTwo);
                        break;
                    case '/':
                        return parseFloat($scope.numOne) / parseFloat($scope.numTwo);
                        break;
                }
            }
        });
    </script>
    <script>
        $("#num1").focus(function () {
            this.value = "";
        });
        $("#num2").focus(function () {
            this.value = "";
        });
    </script>
</body>
</html>
