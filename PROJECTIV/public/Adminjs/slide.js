var app = angular.module('myapp', ['angularUtils.directives.dirPagination']);
app.controller('mycontroller', function($scope, $http) {
    var api = 'http://127.0.0.1:8000/api/Slides/';
    $http({
        Method: "GET",
        url: "http://127.0.0.1:8000/api/Slides"
    }).success(function(response) {
        console.log(response);
        $scope.slide = response;
    });
    $scope.editClick = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Them moi ban tin";
            // $scope.sanpham._token = CSRF_TOKEN;
            if($scope.slides){
                delete $scope.slides;
            }
        } else {

            $http({
                Method: "GET",
                url: "http://127.0.0.1:8000/api/Slides/" + id
            }).success(function(response) {
                $scope.slides = response;
                // $scope.sanpham._token = CSRF_TOKEN;
                
            });
            $scope.modalTitle = "Sua ban tin";
        }
        $('#modelId').modal('show');
    }
    $scope.updateData = function() {
        var m = $scope.id==0?"POST":"PUT";
        var urll = $scope.id==0?api:api+$scope.id;
        $http({
            method: m,
            url: urll,
            data: $scope.slides,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        });
    }
    $scope.deleteClick = function(id) {
        var xacnhan = confirm("Ban co muon xoa that khong?");
        if (xacnhan) {
        $http({
            method: "DELETE",
            url: "http://127.0.0.1:8000/api/Slides/" +id,
            data: $scope.slides,
            headers: { 'Content-Type': 'application/json' }
        }).success(function(response) {
            console.log(response);
            location.reload();
        }); 
        alert("Ban vua chon xoa id=" + id);
    } else {
        alert("Ban da huy lenh xoa");
    }
    }
    $scope.currentPage = 1;
    $scope.pageChangeHandler = function(num) {
            $scope.currentPage = num;
        };
    $scope.pageSize = 3;
});