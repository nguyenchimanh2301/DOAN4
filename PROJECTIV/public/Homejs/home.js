var app = angular.module('myapp', ['']);
app.controller('mycontroller', function($scope, $http) {
    var api ='http://127.0.0.1:8000/api/Lsp/';
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/Lsp"
    }).success(function(response) {
        $scope.lsp = response;
    });
   
    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 3;
    $scope.listSP = [];
    /*=================== Thao tác dữ liệu ==================================== */
    $scope.LoadCart = function () {
        $scope.listSP = JSON.parse(localStorage.getItem('cart'));
        console.log($scope.listSP);
    };
});