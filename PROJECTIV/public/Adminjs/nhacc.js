var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);
app.controller('mycontroller', function($scope, $http) {
    var api = 'http://127.0.0.1:8000/api/Nhaccs/';
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/Nhaccs"
    }).success(function(response) {
        console.log(response);
        $scope.nhaccs = response;
    });
    $scope.editClick = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Them moi nhacc tin";
            // $scope.sanpham._token = CSRF_TOKEN;
            if ($scope.nhacc){
             delete $scope.nhacc;
            }
        } else {
            $http({
                Method: "GET",
                url: "http://127.0.0.1:8000/api/Nhaccs/" + id
            }).success(function(response) {
                $scope.nhacc= response;
                // $scope.sanpham._token = CSRF_TOKEN;
            });
            $scope.modalTitle = "Sua nhacc tin";
        }
        $('#modelId').modal('show');
    }
    $scope.updateData = function() {
        var m = $scope.id==0?"POST":"PUT";
        var url = $scope.id==0?api:api+$scope.id;
        $http({
            method: m,
            url: url,
            data: $scope.nhacc,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        });
    }
    $scope.deleteClick = function(id) {
        var xacnhan = confirm("nhacc co muon xoa that khong?");
        if (xacnhan) {
        $http({
            method: "DELETE",
            url: "http://127.0.0.1:8000/api/Nhaccs/" +id,
            data: $scope.nhacc,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        }); 
        alert("nhacc vua chon xoa id=" + id);
    } else {
        alert("nhacc da huy lenh xoa");
    }
    }
    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 3;
});